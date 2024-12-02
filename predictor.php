<?php
header('Content-Type: application/json');

// Obtener datos desde getData.php
$datosJson = file_get_contents('getDataDemo2.php');
//$datos = json_decode($datosJson, true);
$datos = [
    "nombreEquipo" => "AI WIZZARDS",
    "datosTablas" => [
        "comedatos_aiwizzards_accidentes" => [

            ["id" => "2", "mes" => "Enero", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Femenino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "3", "mes" => "Febrero", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "4", "mes" => "Febrero", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "Si"],
            ["id" => "17", "mes" => "Abril", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "Si"],
            ["id" => "27", "mes" => "Abril", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "Si"],

            ["id" => "7", "mes" => "Abril", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "Si"],
            ["id" => "8", "mes" => "Abril", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "9", "mes" => "Mayo", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "10", "mes" => "Mayo", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "Si"],
            ["id" => "11", "mes" => "Junio", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "12", "mes" => "Junio", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "13", "mes" => "Julio", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "Si"],
            ["id" => "14", "mes" => "Julio", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "15", "mes" => "Agosto", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "16", "mes" => "Agosto", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "Si"],
            ["id" => "17", "mes" => "Septiembre", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "18", "mes" => "Septiembre", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "19", "mes" => "Octubre", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "Si"],
            ["id" => "20", "mes" => "Octubre", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "21", "mes" => "Noviembre", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "22", "mes" => "Noviembre", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "Si"],
            ["id" => "23", "mes" => "Diciembre", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "24", "mes" => "Diciembre", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"]
        ],
        "comedatos_aiwizzards_licencias" => [
            ["id" => "1", "mes" => "Enero", "anio" => 2023, "tipo_licencia" => "A1 - Automovilista", "descripcion" => "Para la conducción de vehículos particulares", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 450],
            ["id" => "2", "mes" => "Febrero", "anio" => 2023, "tipo_licencia" => "A2 - Motociclista", "descripcion" => "Para la conducción de motocicletas", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 300],
            ["id" => "3", "mes" => "Marzo", "anio" => 2023, "tipo_licencia" => "B1 - Transporte Público", "descripcion" => "Para la conducción de transporte público", "requisitos" => "CURP, INE, Examen de la vista, Examen médico", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 200],
            ["id" => "4", "mes" => "Abril", "anio" => 2023, "tipo_licencia" => "A1 - Automovilista", "descripcion" => "Para la conducción de vehículos particulares", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 470],
            ["id" => "5", "mes" => "Mayo", "anio" => 2023, "tipo_licencia" => "A2 - Motociclista", "descripcion" => "Para la conducción de motocicletas", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 320],
            ["id" => "6", "mes" => "Junio", "anio" => 2023, "tipo_licencia" => "B1 - Transporte Público", "descripcion" => "Para la conducción de transporte público", "requisitos" => "CURP, INE, Examen de la vista, Examen médico", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 210],
            ["id" => "7", "mes" => "Julio", "anio" => 2023, "tipo_licencia" => "A1 - Automovilista", "descripcion" => "Para la conducción de vehículos particulares", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 480],
            ["id" => "8", "mes" => "Agosto", "anio" => 2023, "tipo_licencia" => "A2 - Motociclista", "descripcion" => "Para la conducción de motocicletas", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 330],
            ["id" => "9", "mes" => "Septiembre", "anio" => 2023, "tipo_licencia" => "B1 - Transporte Público", "descripcion" => "Para la conducción de transporte público", "requisitos" => "CURP, INE, Examen de la vista, Examen médico", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 220],
            ["id" => "10", "mes" => "Octubre", "anio" => 2023, "tipo_licencia" => "A1 - Automovilista", "descripcion" => "Para la conducción de vehículos particulares", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 490],
            ["id" => "11", "mes" => "Noviembre", "anio" => 2023, "tipo_licencia" => "A2 - Motociclista", "descripcion" => "Para la conducción de motocicletas", "requisitos" => "CURP, INE, Examen de la vista", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 340],
            ["id" => "12", "mes" => "Diciembre", "anio" => 2023, "tipo_licencia" => "B1 - Transporte Público", "descripcion" => "Para la conducción de transporte público", "requisitos" => "CURP, INE, Examen de la vista, Examen médico", "capacitacion_requerida" => "Sí", "licencias_emitidas" => 230]
        ],
        "comedatos_aiwizzards_matriculados" => [
            ["id" => "1", "tipo_vehiculo" => "Carro", "cantidad" => 1250],
            ["id" => "2", "tipo_vehiculo" => "Moto", "cantidad" => 800],
            ["id" => "3", "tipo_vehiculo" => "Bicicleta", "cantidad" => 450],
            ["id" => "4", "tipo_vehiculo" => "Carro", "cantidad" => 1300],
            ["id" => "5", "tipo_vehiculo" => "Moto", "cantidad" => 850],
            ["id" => "6", "tipo_vehiculo" => "Bicicleta", "cantidad" => 500],
            ["id" => "7", "tipo_vehiculo" => "Carro", "cantidad" => 1350],
            ["id" => "8", "tipo_vehiculo" => "Moto", "cantidad" => 900],
            ["id" => "9", "tipo_vehiculo" => "Bicicleta", "cantidad" => 550],
            ["id" => "10", "tipo_vehiculo" => "Carro", "cantidad" => 1400],
            ["id" => "11", "tipo_vehiculo" => "Moto", "cantidad" => 950],
            ["id" => "12", "tipo_vehiculo" => "Bicicleta", "cantidad" => 600]
        ]
    ]
];


// Verificar si los datos se obtuvieron correctamente
if ($datos === null) {
    echo json_encode([
        "error" => "No se pudieron obtener los datos."
    ]);
    exit;
}

$accidentes = $datos['datosTablas']['comedatos_aiwizzards_accidentes'];

// Extraer los meses y contar los accidentes por mes
$accidentesPorMes = [];
foreach ($accidentes as $dato) {
    $mes = $dato['mes'];
    if (!isset($accidentesPorMes[$mes])) {
        $accidentesPorMes[$mes] = 0;
    }
    $accidentesPorMes[$mes]++;
}

// Convertir los datos a arrays para la regresión lineal
$meses = array_keys($accidentesPorMes);
$accidentesCount = array_values($accidentesPorMes);

// Convertir los nombres de los meses a números
$mesesNumericos = array_map(function($mes) {
    $meses = [
        "Enero" => 1,
        "Febrero" => 2,
        "Marzo" => 3,
        "Abril" => 4,
        "Mayo" => 5,
        "Junio" => 6,
        "Julio" => 7,
        "Agosto" => 8,
        "Septiembre" => 9,
        "Octubre" => 10,
        "Noviembre" => 11,
        "Diciembre" => 12
    ];
    return $meses[trim($mes)];
}, $meses);

// Calcular la regresión lineal
$n = count($mesesNumericos);
if ($n === 0) {
    echo json_encode([
        "error" => "No hay datos suficientes para realizar la regresión."
    ]);
    exit;
}

$x_mean = array_sum($mesesNumericos) / $n;
$y_mean = array_sum($accidentesCount) / $n;

$numerador = 0;
$denominador = 0;
for ($i = 0; $i < $n; $i++) {
    $numerador += ($mesesNumericos[$i] - $x_mean) * ($accidentesCount[$i] - $y_mean);
    $denominador += ($mesesNumericos[$i] - $x_mean) ** 2;
}

$slope = $numerador / $denominador;
$intercept = $y_mean - $slope * $x_mean;

// Predecir los accidentes para los próximos 12 meses
$predicciones = [];
for ($i = 1; $i <= 12; $i++) {
    $predicciones[] = $slope * ($n + $i) + $intercept;
}

// Devolver los datos y las predicciones en formato JSON
echo json_encode([
    "meses" => $meses,
    "accidentes" => $accidentesCount,
    "predicciones" => $predicciones
]);
?>
