<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Lista de Personas</h1>
    <nav>
        <a href="/">Inicio</a> -
        <a href="{{ route('personas.index') }}">Personas</a> -
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>
    <table>
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <!-- <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad</th>
                <th>Sueldo</th>
                <th>RND</th>
                <th>Estado</th>
                <th>Sexo</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->cPerApellido }}</td>
                <td>{{ $persona->cPerNombre }}</td>
                <!-- <td>{{ $persona->cPerDireccion }}</td>
                <td>{{ $persona->dPerFecNac }}</td>
                <td>{{ $persona->nPerEdad }}</td>
                <td>{{ $persona->nPerSueldo }}</td>
                <td>{{ $persona->cPerRnd }}</td>
                <td>{{ $persona->nPerEstado ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $persona->cPerSexo }}</td>
            </tr> -->
            @endforeach
        </tbody>
    </table>
</body>
</html>
