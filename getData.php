
<?php
header('Content-Type: application/json');


$apiUrl = "";

// El token Bearer para la autenticación
$bearerToken = "";

// Los datos del cuerpo de la solicitud POST
$postData = [
    'email' => '',  // El correo electrónico
    'password' => ''   // La contraseña
];

// Inicializar cURL
$ch = curl_init();

// Establecer la URL de la API
curl_setopt($ch, CURLOPT_URL, $apiUrl);

// Establecer el método de solicitud como POST
curl_setopt($ch, CURLOPT_POST, true);

// Establecer los datos que se enviarán en la solicitud (como JSON)
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

// Establecer las cabeceras, incluyendo el token Bearer
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $bearerToken
]);

// Configurar cURL para devolver la respuesta en lugar de mostrarla directamente
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Verificar si hubo errores en la solicitud cURL
if ($response === false) {
    // Si hay un error, devolverlo
    $error = curl_error($ch);
    curl_close($ch);
    echo json_encode(["error" => "cURL Error: " . $error]);
    exit;
}

// Cerrar cURL
curl_close($ch);

// Devolver la respuesta como JSON
echo $response;
?>
