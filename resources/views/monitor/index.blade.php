<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<div class="container">
    <h1>Lista de celulares</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Numero Serie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monitor as $monitores)
                <tr>
                    <td>{{ $monitores->id }}</td>
                    <td>{{ $monitores->marca }}</td>
                    <td>{{ $monitores->modelo }}</td>
                    <td>{{ $monitores->numero_serie }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
</body>
</html>