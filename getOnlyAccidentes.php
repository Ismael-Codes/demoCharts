<?php
// URL de la API
$api_url = "getData.php";  // Cambia esta URL con la correcta

// Iniciar cURL
$ch = curl_init();

// Configurar cURL
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",  // Asegúrate de que la API acepte JSON
]);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);

// Verifica si hay un error con la solicitud
if ($response === false) {
    echo "Error al llamar la API: " . curl_error($ch);
    exit;
}

// Cerrar la conexión cURL
curl_close($ch);

// Decodificar la respuesta JSON de la API
$data = json_decode($response, true);

// Estructura que queremos enviar
$result = [
    "nombreEquipo" => "AI WIZZARDS",  // Este es un valor fijo, cambia si es necesario
    "datosTablas" => []
];

// Procesamos los datos obtenidos de la API
foreach ($data as $registro) {
    // Aquí se asume que la respuesta tiene la estructura correcta, y extraemos cada elemento
    $registro_procesado = [
        "id" => $registro['id'],
        "mes" => $registro['mes'],
        "anio" => $registro['anio'],
        "tipo_vehiculo" => $registro['tipo_vehiculo'],
        "genero_conductor" => $registro['genero_conductor'],
        "tiene_licencia" => $registro['tiene_licencia'],
        "licencia_vigente" => $registro['licencia_vigente'],
        "cantidad_accidentes" => $registro['cantidad_accidentes']
    ];

    // Añadir el registro procesado a la lista correspondiente
    $tabla = "comedatos_aiwizzards_accidentes";  // El nombre de la tabla que se usará para la estructura
    $result['datosTablas'][$tabla][] = $registro_procesado;
}

// Imprimir la estructura final como JSON
echo json_encode($result, JSON_PRETTY_PRINT);
?>