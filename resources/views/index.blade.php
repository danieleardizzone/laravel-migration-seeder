<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    @dump($trains)

    <table class="table">
        <thead>
          <tr>
            <th scope="col">azienda</th>
            <th scope="col">stazione di partenza</th>
            <th scope="col">stazioe di arrivo</th>
            <th scope="col">orario di partenza</th>
            <th scope="col">orario di arrivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
        
            <tr>
                <td scope="row">{{ $train->azienda }}</td>
                <td>{{ $train->stazione_di_partenza }}</td>
                <td>{{ $train->stazione_di_arrivo }}</td>
                <td>{{ $train->orario_di_partenza }}</td>
                <td>{{ $train->orario_di_arrivo }}</td>
            </tr>

            @endforeach
        </tbody>
</body>
</html>