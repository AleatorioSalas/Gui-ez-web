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
    <h1>Lista de simcards</h1>
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
            @foreach ($simcard as $simcards)
                <tr>
                    <td>{{ $simcards->id }}</td>
                    <td>{{ $simcards->tipo_celular }}</td>
                    <td>{{ $simcards->tipo_bam }}</td>
                    <td>{{ $simcards->compañia }}</td>
                    <td>{{ $simcards->numero_de_serie }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
</body>
</html>