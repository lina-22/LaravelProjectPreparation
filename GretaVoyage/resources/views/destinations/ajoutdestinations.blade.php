@extends("template")
@section("titre")
Ajout Destination
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Please add destintion</h1>
        <form action="/admin/destination" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="nom">Nom</label>
                <input name="nom" minlength="2" maxlength="100" required type="text" class="form-control" id="nom"
                    placeholder="le nom du pays">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="description">Description</label>
                <input name="description" min="4" required type="text" class="form-control" id="description"
                    placeholder="indiquer la description">
                @error("description")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="dateDebut">DateDebut</label>
                <input name="dateDebut" minlength="4" required type="date" class="form-control" id="dateDebut"
                    placeholder="indiquer la dateDebut">
                @error("dateDebut")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="dateFin">DateFin</label>
                <input name="dateFin" minlength="4" required type="date" class="form-control" id="dateFin"
                    placeholder="indiquer la dateFin">
                @error("dateFin")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="prix">Prix</label>
                <input name="prix" minlength="4" required type="price" class="form-control" id="prix"
                    placeholder="indiquer la prix">
                @error("prix")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="estDisponible">EstDisponible</label>
                <input name="estDisponible" minlength="" required type="boolean" class="form-control" id="estDisponible"
                    placeholder="indiquer la estDisponible">
                @error("estDisponible")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="duree">Duree</label>
                <input name="duree" minlength="" required type="" class="form-control" id="duree"
                    placeholder="indiquer la duree">
                @error("duree")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="pays_id">pays_id</label>
                <input name="pays_id" required type="" class="form-control" id="pays_id"
                    placeholder="indiquer la pays_id">
                @error("pays_id")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
