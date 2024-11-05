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
                <th>IMEI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($celular as $celulars)
                <tr>
                    <td>{{ $celulars->id }}</td>
                    <td>{{ $celulars->marca }}</td>
                    <td>{{ $celulars->modelo }}</td>
                    <td>{{ $celulars->imei }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
</body>
</html>