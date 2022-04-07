<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends("template")
    @section("contenu")
    @section("contenu")
    <table>
        <thead>
            <th>
                <td>Id</td>
                <td>Nom</td>
                <td>Population</td>
                <td>Region</td>
                <td>Action</td>
            </th>
        </thead>
        <tbody>
            @foreach ($pays as $unPays )
            <tr>
                <td>{{$unPays->id}}</td>
                <td>{{$unPays->nom}}</td>
                <td>{{$unPays->population}}</td>
                <td>{{$unPays->region}}</td>
                <td>aaa</td>
            </tr>
         @endforeach
        </tbody>
    </table>
    end@@section('contenu')

    @endsection
</body>
</html>
