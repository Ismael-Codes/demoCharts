<?php

// Configurar el encabezado para que el navegador sepa que la respuesta es JSON
header('Content-Type: application/json');

// Crear los datos (con todos los registros generados)
$data = [
  "nombreEquipo" => "AI WIZZARDS",
  "datosTablas" => [
    "comedatos_aiwizzards_accidentes" => [
      [
        "id" => "1",
        "mes" => "Enero",
        "anio" => 2024,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "2",
        "mes" => "Febrero",
        "anio" => 2024,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ],
      [
        "id" => "3",
        "mes" => "Marzo",
        "anio" => 2024,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "No",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "4",
        "mes" => "Abril",
        "anio" => 2024,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "5",
        "mes" => "Mayo",
        "anio" => 2024,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "No",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "6",
        "mes" => "Junio",
        "anio" => 2024,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ],
      [
        "id" => "7",
        "mes" => "Julio",
        "anio" => 2024,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "8",
        "mes" => "Agosto",
        "anio" => 2024,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "No",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "9",
        "mes" => "Septiembre",
        "anio" => 2024,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "10",
        "mes" => "Octubre",
        "anio" => 2024,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ],
      [
        "id" => "11",
        "mes" => "Noviembre",
        "anio" => 2024,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "12",
        "mes" => "Diciembre",
        "anio" => 2024,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "13",
        "mes" => "Enero",
        "anio" => 2025,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "14",
        "mes" => "Febrero",
        "anio" => 2025,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ],
      [
        "id" => "15",
        "mes" => "Marzo",
        "anio" => 2025,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "16",
        "mes" => "Abril",
        "anio" => 2025,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "17",
        "mes" => "Mayo",
        "anio" => 2025,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "No",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "18",
        "mes" => "Junio",
        "anio" => 2025,
        "tipo_vehiculo" => "Camión",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ],
      [
        "id" => "19",
        "mes" => "Julio",
        "anio" => 2025,
        "tipo_vehiculo" => "Carro",
        "genero_conductor" => "Masculino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "Sí"
      ],
      [
        "id" => "20",
        "mes" => "Agosto",
        "anio" => 2025,
        "tipo_vehiculo" => "Motocicleta",
        "genero_conductor" => "Femenino",
        "tiene_licencia" => "Sí",
        "licencia_vigente" => "No"
      ]
    ],
    "comedatos_aiwizzards_licencias" => [
      [
        "id" => "1",
        "mes" => "Enero",
        "anio" => 2024,
        "tipo_licencia" => "A1 - Automovilista",
        "descripcion" => "Para la conducción de vehículos particulares",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1200
      ],
      [
        "id" => "2",
        "mes" => "Febrero",
        "anio" => 2024,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista, Curso teórico-práctico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 850
      ],
      [
        "id" => "3",
        "mes" => "Marzo",
        "anio" => 2024,
        "tipo_licencia" => "B1 - Chofer",
        "descripcion" => "Para la conducción de vehículos de carga ligera",
        "requisitos" => "CURP, INE, Examen médico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 600
      ],
      [
        "id" => "4",
        "mes" => "Abril",
        "anio" => 2024,
        "tipo_licencia" => "C1 - Chofer de carga pesada",
        "descripcion" => "Para la conducción de vehículos de carga pesada",
        "requisitos" => "CURP, INE, Examen médico, Curso de manejo de carga",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 300
      ],
      [
        "id" => "5",
        "mes" => "Mayo",
        "anio" => 2024,
        "tipo_licencia" => "A1 - Automovilista",
        "descripcion" => "Para la conducción de vehículos particulares",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1300
      ],
      [
        "id" => "6",
        "mes" => "Junio",
        "anio" => 2024,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista, Curso teórico-práctico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 950
      ],
      [
        "id" => "7",
        "mes" => "Julio",
        "anio" => 2024,
        "tipo_licencia" => "B1 - Chofer",
        "descripcion" => "Para la conducción de vehículos de carga ligera",
        "requisitos" => "CURP, INE, Examen médico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 720
      ],
      [
        "id" => "8",
        "mes" => "Agosto",
        "anio" => 2024,
        "tipo_licencia" => "C1 - Chofer de carga pesada",
        "descripcion" => "Para la conducción de vehículos de carga pesada",
        "requisitos" => "CURP, INE, Examen médico, Curso de manejo de carga",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 450
      ],
      [
        "id" => "9",
        "mes" => "Septiembre",
        "anio" => 2024,
        "tipo_licencia" => "A1 - Automovilista",
        "descripcion" => "Para la conducción de vehículos particulares",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1150
      ],
      [
        "id" => "10",
        "mes" => "Octubre",
        "anio" => 2024,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista, Curso teórico-práctico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 890
      ],
      [
        "id" => "11",
        "mes" => "Noviembre",
        "anio" => 2024,
        "tipo_licencia" => "B1 - Chofer",
        "descripcion" => "Para la conducción de vehículos de carga ligera",
        "requisitos" => "CURP, INE, Examen médico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 550
      ],
      [
        "id" => "12",
        "mes" => "Diciembre",
        "anio" => 2024,
        "tipo_licencia" => "C1 - Chofer de carga pesada",
        "descripcion" => "Para la conducción de vehículos de carga pesada",
        "requisitos" => "CURP, INE, Examen médico, Curso de manejo de carga",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 330
      ],
      [
        "id" => "13",
        "mes" => "Enero",
        "anio" => 2025,
        "tipo_licencia" => "A1 - Automovilista",
        "descripcion" => "Para la conducción de vehículos particulares",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1100
      ],
      [
        "id" => "13",
        "mes" => "Enero",
        "anio" => 2025,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 800
      ],
      [
        "id" => "14",
        "mes" => "Febrero",
        "anio" => 2025,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista, Curso teórico-práctico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1000
      ],
      [
        "id" => "15",
        "mes" => "Marzo",
        "anio" => 2025,
        "tipo_licencia" => "B1 - Chofer",
        "descripcion" => "Para la conducción de vehículos de carga ligera",
        "requisitos" => "CURP, INE, Examen médico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 600
      ],
      [
        "id" => "16",
        "mes" => "Abril",
        "anio" => 2025,
        "tipo_licencia" => "C1 - Chofer de carga pesada",
        "descripcion" => "Para la conducción de vehículos de carga pesada",
        "requisitos" => "CURP, INE, Examen médico, Curso de manejo de carga",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 400
      ],
      [
        "id" => "17",
        "mes" => "Mayo",
        "anio" => 2025,
        "tipo_licencia" => "A1 - Automovilista",
        "descripcion" => "Para la conducción de vehículos particulares",
        "requisitos" => "CURP, INE, Examen de la vista",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1250
      ],
      [
        "id" => "18",
        "mes" => "Junio",
        "anio" => 2025,
        "tipo_licencia" => "A2 - Motociclista",
        "descripcion" => "Para la conducción de motocicletas",
        "requisitos" => "CURP, INE, Examen de la vista, Curso teórico-práctico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 1050
      ],
      [
        "id" => "19",
        "mes" => "Julio",
        "anio" => 2025,
        "tipo_licencia" => "B1 - Chofer",
        "descripcion" => "Para la conducción de vehículos de carga ligera",
        "requisitos" => "CURP, INE, Examen médico",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 800
      ],
      [
        "id" => "20",
        "mes" => "Agosto",
        "anio" => 2025,
        "tipo_licencia" => "C1 - Chofer de carga pesada",
        "descripcion" => "Para la conducción de vehículos de carga pesada",
        "requisitos" => "CURP, INE, Examen médico, Curso de manejo de carga",
        "capacitacion_requerida" => "Sí",
        "licencias_emitidas" => 500
      ]
    ],
    "comedatos_aiwizzards_matriculados" => [
      [
        "id" => "1",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 1800
      ],
      [
        "id" => "2",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1200
      ],
      [
        "id" => "3",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 850
      ],
      [
        "id" => "4",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 2100
      ],
      [
        "id" => "5",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1300
      ],
      [
        "id" => "6",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 600
      ],
      [
        "id" => "7",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 1250
      ],
      [
        "id" => "8",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 900
      ],
      [
        "id" => "9",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 750
      ],
      [
        "id" => "10",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 2150
      ],
      [
        "id" => "11",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1100
      ],
      [
        "id" => "12",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 800
      ],
      [
        "id" => "13",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 2200
      ],
      [
        "id" => "14",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1500
      ],
      [
        "id" => "15",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 900
      ],
      [
        "id" => "16",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 2300
      ],
      [
        "id" => "17",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1700
      ],
      [
        "id" => "18",
        "tipo_vehiculo" => "Camión",
        "cantidad" => 1000
      ],
      [
        "id" => "19",
        "tipo_vehiculo" => "Carro",
        "cantidad" => 2400
      ],
      [
        "id" => "20",
        "tipo_vehiculo" => "Motocicleta",
        "cantidad" => 1800
      ]
    ]
  ]
];

// Devolver los datos como JSON
echo json_encode($data, JSON_PRETTY_PRINT);

?>