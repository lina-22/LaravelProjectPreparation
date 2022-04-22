@extends("template")

@section("titre")
Gestion des destination
@endsection

@section("contenu")
<h1 class="my-2">Les destinations</h1>
<a class="btn btn-primary mb-2" href="/admin/pays/create">Ajouter un nouveau Destination</a>
 <table class="table">
     <thead>
         <tr>
            <th>Nom</td>
            <th>Description</td>
            <th>StartingDate</td>
            <th>StartingDate</td>
            <th>EndDate</td>
            <th>Price</td>
            <th>is available</td>
            <th>duration</td>
            <th>Pays_id</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($destinations as $unDestination )
            <tr>
                <td>{{$unDestination->nom}}</td>
                <td>{{$unDestination->description}}</td>
                <td>{{$unDestination->dateDebut}}</td>
                <td>{{$unDestination->dateFin}}</td>
                <td>{{$unDestination->prix}}</td>
                <td>{{$unDestination->estDisponible}}</td>
                <td>{{$unDestination->duree}}</td>
                <td>{{$unDestination->pays_id}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="/admin/destination/{{$unDestination->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="/admin/destinatin/{{$unDestination->id}}" method="post">

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

