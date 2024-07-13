<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Dominios</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="domain-form">
            <label for="name-input">Nombre:</label>
            <input type="text" id="name-input" name="name" required>
            <label for="surname-input">Apellido:</label>
            <input type="text" id="surname-input" name="surname" required>
            <label for="domain-input">Dominio:</label>
            <input type="text" id="domain-input" name="domain" required>
            <button type="submit">Validar</button>
        </form>
        <br>
        <button id="download-csv" style="display: none;">Descargar CSV</button>
    </div>

    <script>
        document.getElementById('domain-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);

            fetch('validate.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(`Dominio: ${data.status}\nPosibles correos: ${data.emails.join(', ')}\nCorreo válido: ${data.valid_email}`);
                
                if (data.status === "valido") {
                    document.getElementById('download-csv').style.display = 'block';
                }
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('download-csv').addEventListener('click', function() {
            window.location.href = 'validate.php?action=download_csv';
        });
    </script>
</body>
</html>
