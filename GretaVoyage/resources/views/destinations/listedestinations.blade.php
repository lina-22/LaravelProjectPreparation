@extends("template")

@section("titre")
Gestion des pays
@endsection

@section("contenu")
<h1 class="my-2">Les pays</h1>
<a class="btn btn-primary mb-2" href="/admin/pays/create">Ajouter un nouveau pays</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>Nom</td>
            <th>Population</td>
            <th>Region</td>
            <th>Action</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($pays as $unPays )
            <tr>
                <td>{{$unPays->id}}</td>
                <td>{{$unPays->nom}}</td>
                <td>{{$unPays->population}}</td>
                <td>{{$unPays->region}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="/admin/pays/{{$unPays->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="/admin/pays/{{$unPays->id}}" method="post">

                        @csrf
                        @method("delete")
                        <input type="hidden" name="id">
                        <button class="btn btn-primary">Supprimer</button>
                    </form>
                </div>
                </td>
            </tr>
         @endforeach

     </tbody>
 </table>
@endsection

