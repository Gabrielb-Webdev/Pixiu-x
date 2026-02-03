<?php
// public_html/api/submit-hubspot.php

// ===== DEBUG LOG =====
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/hs_error.log');

// ===== HUBSPOT =====
$PORTAL_ID = '46161581';
$FORM_GUID = '15745e2d-d023-478a-b32f-d672ef4f702a';

function v($k){ return isset($_POST[$k]) ? trim($_POST[$k]) : ''; }

$fields = [
  'firstname' => v('firstname'),
  'lastname'  => v('lastname'),
  'email'     => v('email'),
  'phone'     => v('phone'),      // ya normalizado en E.164 por el JS
  'service'   => v('service'),
  'company'   => v('company'),
  'message'   => v('message'),
];

// Requeridos mínimos
$missing = [];
foreach (['firstname','lastname','email','phone','service','company'] as $req) {
  if ($fields[$req] === '') $missing[] = $req;
}
if ($missing) {
  error_log('Missing fields: '.implode(',', $missing));
  header('Location: /?error=1#contact');
  exit;
}

// Contexto
$context = [
  'hutk'      => $_COOKIE['hubspotutk'] ?? '',
  'pageUri'   => $_SERVER['HTTP_REFERER'] ?? 'https://pixiux.net/',
  'pageName'  => 'Contact Form',
  'ipAddress' => $_SERVER['REMOTE_ADDR'] ?? '',
];

// Helper cURL
function curl_post($url, $headers, $body, $timeout = 20) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => $timeout,
  ]);
  $resp   = curl_exec($ch);
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $err    = curl_error($ch);
  curl_close($ch);
  return [$status, $resp, $err];
}

/* ========= INTENTO 1: Forms v3 integration (JSON) ========= */
$v3_url = "https://api.hsforms.com/submissions/v3/integration/submit/$PORTAL_ID/$FORM_GUID";
$v3_payload = [
  'fields'  => array_map(fn($n,$v)=>['name'=>$n,'value'=>$v], array_keys($fields), $fields),
  'context' => $context,
];
[$s1,$r1,$e1] = curl_post(
  $v3_url,
  ['Content-Type: application/json'],
  json_encode($v3_payload, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
);

if ($s1 >= 200 && $s1 < 300) {
  // OK v3
} else {
  error_log("V3 failed ($s1): $e1 | $r1");

  /* ======== INTENTO 2: Forms v2 uploads (x-www-form-urlencoded) ======== */
  $v2_url = "https://forms.hubspot.com/uploads/form/v2/$PORTAL_ID/$FORM_GUID";
  $v2_body = $fields;
  $v2_body['hs_context'] = json_encode($context, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

  [$s2,$r2,$e2] = curl_post(
    $v2_url,
    ['Content-Type: application/x-www-form-urlencoded; charset=UTF-8'],
    http_build_query($v2_body)
  );

  if (!($s2 >= 200 && $s2 < 300)) {
    error_log("V2 failed ($s2): $e2 | $r2");
    header('Location: /?error=1#contact');
    exit;
  }
}

// Éxito → thank-you “bonito”
$fname   = urlencode($fields['firstname']);
$service = urlencode($fields['service']);
header("Location: /thank-you?name=$fname&service=$service");
exit;
