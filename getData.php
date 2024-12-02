
<?php
header('Content-Type: application/json');


$apiUrl = "http://comedatos.qroo.gob.mx/api/NucleoDigital";

// El token Bearer para la autenticación
$bearerToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiZmNjZTRmMjE1ZWIwZmU4NDJlMjRjOGY3M2FkMTQzYTM3OWQxMWNkNWY0MThhMjgwZDkwMmNkNDYwZjczODBlZjJlOTVkZjYxMTgyZjMwODIiLCJpYXQiOjE3MzExNjU4NDUuNDUwMDk3LCJuYmYiOjE3MzExNjU4NDUuNDUwMTA0LCJleHAiOjE3NjI3MDE4NDUuMTU0MzcxLCJzdWIiOiI0MSIsInNjb3BlcyI6W119.SYqbu744gHgNSc0ii1Mlm7P-zKKR6Vrsdkx8WkBhXpV7erN9Exqr9r3a26jJB6kn3MEu-i4Fn9Ui7OIOtXEB7fASwLgYB1hZYtetxR-eTmQBARHRf-VFn9-Ftz2MOulbJY4TfqoDAn84gLTCT1FqTeEFU1WMYQtRQRwi0oa9P5uf8zOvi7Hif9SVJdOYeGFUSEjboQ5Z1HuVdG8TcDgbve4Skdub_L8odYgPukjDZxcO9hqLHwI2tGwroD0INEIraoMHjejEbO8P2e9f7lVomzQh8yDJQkLvVW6hWZpRv59iBYhr5C-ZtdRK37aYPUmzTwXnS9kZ8uny6ls8K7vpi1YfAP3bhVupbfdS2k51xEgVGzuYKXlPv4ufNtqIK2CLQszAzgH-oDwkbr-FotAPos7Vc3JKtN06Xsja16zbnckZsgywv758XlaJzb2V7UlU6_SFInDebqbcS5M-ritp7VexCQOg1161jmtJ5645djxah9xAhxK4TcJaq4ozYHShu0XVNeOfIG31nzrg-F-2iKwsspIX9TTyIab0itePVQSsoY4TYc6fopOuA_k6SjoqNjr36Vyoso3I66sUsfg1aOQoxwHxOLUMsTg5hhDxoVzrEvR-5WM_-3eRCGPceAKVxD_a1nqaZfrgiXnNU0cwCzMqvgy1dykj9Iec6py89S0";

// Los datos del cuerpo de la solicitud POST
$postData = [
    'email' => '240300952@ucaribe.edu.mx',  // El correo electrónico
    'password' => 'secoesnova'   // La contraseña
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
