<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $domain = $_POST['domain'];
    
    $status = verificar_registros_mx($domain);
    $emails = generar_posibles_correos($name, $surname, $domain);
    $valid_email = verificar_correos_validos($emails);
    
    $data = [
        'name' => $name,
        'surname' => $surname,
        'domain' => $domain,
        'status' => $status,
        'valid_email' => $valid_email
    ];

    // Guardar datos en sesión para generar CSV posteriormente
    session_start();
    $_SESSION['csv_data'] = $data;

    echo json_encode(['status' => $status, 'emails' => $emails, 'valid_email' => $valid_email]);
}

function verificar_registros_mx($domain) {
    try {
        $records = dns_get_record($domain, DNS_MX);
        if ($records !== false && count($records) > 0) {
            return "valido";
        } else {
            return "invalido";
        }
    } catch (Exception $e) {
        return "error: " . $e->getMessage();
    }
}

function generar_posibles_correos($nombre, $apellido, $dominio) {
    $posibles_correos = [];
    
    // Generar combinaciones básicas
    $posibles_correos[] = "$nombre@$dominio";
    $posibles_correos[] = "$apellido@$dominio";
    $posibles_correos[] = "$nombre.$apellido@$dominio";
    $posibles_correos[] = "$nombre$apellido@$dominio";
    $posibles_correos[] = $nombre[0] . "$apellido@$dominio";
    $posibles_correos[] = "$nombre" . $apellido[0] . "@$dominio";
    $posibles_correos[] = "$nombre" . "_$apellido@$dominio";
    $posibles_correos[] = "$apellido" . "_$nombre@$dominio";
    $posibles_correos[] = "$nombre" . "-$apellido@$dominio";
    $posibles_correos[] = "$apellido" . "-$nombre@$dominio";
    
    // Otras combinaciones posibles
    if (strlen($nombre) >= 2) {
        $posibles_correos[] = $nombre[0] . ".$apellido@$dominio";
        $posibles_correos[] = "$nombre." . $apellido[0] . "@$dominio";
    }
    if (strlen($apellido) >= 2) {
        $posibles_correos[] = $nombre[0] . "_$apellido@$dominio";
        $posibles_correos[] = "$nombre" . "_" . $apellido[0] . "@$dominio";
    }
    
    return array_slice($posibles_correos, 0, 10);  // Limitar a los primeros 10 posibles correos
}

function verificar_correos_validos($emails) {
    foreach ($emails as $email) {
        if (verificar_correo_puede_recibir($email)) {
            return $email;
        }
    }
    return null;
}

function verificar_correo_puede_recibir($email) {
    $domain = substr(strrchr($email, "@"), 1);

    // Verificar si el dominio tiene registros MX
    try {
        $records = dns_get_record($domain, DNS_MX);
        if ($records === false || count($records) == 0) {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
    
    // Intentar conectarse al servidor SMTP del dominio
    foreach ($records as $mx) {
        $mx_server = $mx['target'];
        try {
            $connection = fsockopen($mx_server, 25, $errno, $errstr, 5);
            if (!$connection) {
                continue;
            }

            stream_set_timeout($connection, 5);
            $response = fgets($connection, 1024);
            fwrite($connection, "HELO example.com\r\n");
            $response = fgets($connection, 1024);
            fwrite($connection, "MAIL FROM:<Gabrielbg21@hotmail.com>\r\n");
            $response = fgets($connection, 1024);
            fwrite($connection, "RCPT TO:<$email>\r\n");
            $response = fgets($connection, 1024);
            fwrite($connection, "QUIT\r\n");
            fclose($connection);

            if (strpos($response, '250') !== false || strpos($response, '251') !== false) {
                return true;
            }
        } catch (Exception $e) {
            continue;
        }
    }
    
    return false;
}

if (isset($_GET['action']) && $_GET['action'] === 'download_csv') {
    session_start();
    if (isset($_SESSION['csv_data'])) {
        $data = $_SESSION['csv_data'];
        $filename = 'domain_validation.csv';
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=' . $filename);
        
        $output = fopen('php://output', 'w');
        fputcsv($output, array('Name', 'Last Name', 'Domain', 'Domain Status', 'Email Valid'));
        fputcsv($output, $data);
        fclose($output);
        
        // Eliminar datos de sesión después de la descarga
        unset($_SESSION['csv_data']);
        exit();
    } else {
        echo "No hay datos para descargar.";
    }
}
?>
