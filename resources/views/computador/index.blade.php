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
    <h1>Lista de computadores</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Modelo</th>
                <th>tag</th>
                <th>numero de serie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computador as $computadores)
                <tr>
                    <td>{{ $computadores->id }}</td>
                    <td>{{ $computadores->modelo }}</td>
                    <td>{{ $computadores->tag }}</td>
                    <td>{{ $computadores->numero_serie }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
</body>
</html>