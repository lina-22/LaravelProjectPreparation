<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesPays = Pays::all();
        return view("pays.listepays", ["pays" => $lesPays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pays.ajoutpays");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des champs/attributs
        $attributs = $request->validate(
            [
                "nom" => "required|min:2|max:100|string|unique:Pays,nom",
                "population" => "numeric|required|min:0",
                "region" => "required|string|min:4",
                "drapeau"=>"required|image"
            ]
        );
        //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("drapeau")->store("pays");
        //Remplace le chemin de l'image dans les attributs
        $attributs["drapeau"]=$cheminImage;

        //Enregistrement du pays dans la table
        Pays::create($attributs);
        //redirection vers le dashboard
        session()->flash("success","Le pays a bien été ajouter !");
        return redirect("/admin/pays");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pays=Pays::find($id);

        //Afficher un formulaire modification pré-rempli
        return view("pays.modifpays",["lePays"=>$pays]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $pays=Pays::find($request->id);

      $attributs = $request->validate(
        [
            "nom" => "required|min:2|max:100|string",
            "population" => "numeric|required|min:0",
            "region" => "required|string|min:4",
            "drapeau"=>"image"
        ]
    );
    if($request->drapeau){
    //Enregistre sur le serveur le drapeau
    $cheminImage=$request->file("drapeau")->store("pays");
    //Remplace le chemin de l'image dans les attributs
    $attributs["drapeau"]=$cheminImage;
    }
    //Mettre a jour le pays avec de nouveau attributs
    $pays->update($attributs);
    //Le message flash
    session()->flash("success","$pays->nom a bien était modifier ! ");
    return redirect("/admin/pays");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pays=Pays::findOrFail($id);
       $pays->delete();
       session()->flash("success","$pays->nom a bien était effacer ! ");
       return redirect("/admin/pays");
    }


}
