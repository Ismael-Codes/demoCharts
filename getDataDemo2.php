<?php
header('Content-Type: application/json');

$datos = [
    "nombreEquipo" => "AI WIZZARDS",
    "datosTablas" => [
        "comedatos_aiwizzards_accidentes" => [
            ["id" => "1", "mes" => "Enero", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Masculino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
            ["id" => "2", "mes" => "Enero", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Femenino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "3", "mes" => "Febrero", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "4", "mes" => "Febrero", "anio" => 2023, "tipo_vehiculo" => "Carro", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "Si"],
            ["id" => "5", "mes" => "Marzo", "anio" => 2023, "tipo_vehiculo" => "Moto", "genero_conductor" => "Masculino", "tiene_licencia" => "No", "licencia_vigente" => "No"],
            ["id" => "6", "mes" => "Marzo", "anio" => 2023, "tipo_vehiculo" => "Bicicleta", "genero_conductor" => "Femenino", "tiene_licencia" => "Si", "licencia_vigente" => "No"],
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

echo json_encode($datos);
?>


echo json_encode($datos);
?>
