<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Actividades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        .calendar {
            border-collapse: collapse;
            width: 100%;
        }

        .calendar th {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        .calendar td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .calendar .highlight {
            background-color: #ffcc00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calendario de Actividades</h1>
        <table class="calendar">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Actividad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>Reunión de equipo</td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>Presentación de informe</td>
                </tr>
                <tr class="highlight">
                    <td>Miércoles</td>
                    <td>Conferencia importante</td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td>Entrenamiento</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>Revisión de proyectos</td>
                </tr>
            </tbody>
        </table>
        <a href="Dashboard.php">Volver al Dashboard</a>
    </div>
</body>
</html>
