@extends("template")

@section("titre")
Gestion des pays
@endsection

@section("contenu")
 <table class="table">
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
@endsection
