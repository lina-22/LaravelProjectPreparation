@extends("template")
@section("titre")
Ajout Pays
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'un pays</h1>
        <form action="/admin/pays" method="post" enctype="multipart/form-data">
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
                <label for="population">Population</label>
                <input name="population" min="0" required type="number" class="form-control" id="population"
                    placeholder="indiquer la population">
                @error("population")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="region">Region</label>
                <input name="region" minlength="4" required type="" class="form-control" id="region"
                    placeholder="indiquer la region">
                @error("region")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="image">Image</label>
                <input name="drapeau" required type="file" accept="image" class="form-control" id="image" placeholder="Rechercher une image">
                @error("image")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
