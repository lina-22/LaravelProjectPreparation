<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesDestinations = Destination::all();
        return view("destinations.listedestinations", ["destinations" =>  $lesDestinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("destinations.ajoutdestinations");
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
              $destinations = $request->validate(

                    [
                          "nom" => "required|min:2|max:100|string|unique:Destinations,nom",
                          "description" => "string|min:10",
                          "dateDebut" => "date|required",
                          "dateFin" => "date",
                          "prix" => "numeric|required",
                          "estDisponible"=>"boolean|required|",
                          "duree"=>"integer|required|",
                          'pays_id' => 'required|integer'
                      ]
                    );
                    Destination::create($destinations);
                    // dd("$destinations");
            //redirection vers le dashboard
            // session()->flash("success","Le destination a bien été ajouter !");
            return redirect("/admin/alldestination");
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $destination=Destination::findorfail($id);

        //Afficher un formulaire modification pré-rempli
        return view("destinations.modifdestinations",["leDestination"=>$destination]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $destination=Destination::find($request->id);

        $attributs = $request->validate(
          [
              "nom" => "required|min:2|max:100|string",
              "population" => "numeric|required|min:0",
              "region" => "required|string|min:4",
              "drapeau"=>"image"
          ]
      );

      //Mettre a jour le pays avec de nouveau attributs
      $destination->update($attributs);
      //Le message flash
      session()->flash("success","$destination->nom a bien était modifier ! ");
      return redirect("/admin/alldestination");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination=Destination::findOrFail($id);
        $destination->delete();
        session()->flash("success","$destination->nom a bien était effacer ! ");
        return redirect("/admin/alldestination");
    }

}
