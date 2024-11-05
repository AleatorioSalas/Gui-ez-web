<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- recursos/views/usuarios/detalle.blade.php -->




    <h1>Detalles del Usuario</h1>

    <p><strong>ID Usuario:</strong> {{ $usuario->ID_Nombre }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
    <!-- Agrega otros campos del usuario según sea necesario -->

    <h2>BAMs Asociados</h2>
    @if ($usuario->bams->isEmpty())
        <p>Este usuario no tiene BAMs asociados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>IMEI</th>
                    <th>ID Usuario Asociado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuario->bams as $bam)
                    <tr>
                        <td>{{ $bam->id }}</td>
                        <td>{{ $bam->marca }}</td>
                        <td>{{ $bam->modelo }}</td>
                        <td>{{ $bam->imei }}</td>
                        <td>{{ $bam->id_usuario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
</body>
</html>