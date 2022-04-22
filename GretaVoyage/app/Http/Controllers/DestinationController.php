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
            // return redirect("/admin/alldestination");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }

}
