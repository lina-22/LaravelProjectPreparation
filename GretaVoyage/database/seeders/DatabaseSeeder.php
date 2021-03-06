<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Pays;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $pays1=Pays::create(["nom"=>"france","population"=>"70000000","region"=>"europe"]);
        // $pays2=Pays::create(["nom"=>"egypt","population"=>"102334403","region"=>"afrique"]);
        // $destination1=Destination::create(["nom"=>"egypt","description"=>"some description","dateDebut"=>"080422","dateFin"=>"080522", "prix" => "10","estDisponible" =>"1", "duree" =>"10", "pays_id"=>"1"]);

        $admin= Role::create(["name"=>"admin"]);
        $client= Role::create(["name"=>"client"]);

        $moi=User::create([
            "name"=>"Lina ",
            "firstname"=>"haque",
            "email"=>"mustfahinur@gmail.com",
            "password"=>bcrypt("mustfahinur@gmail.com1"),
            "roles_id" => $admin->id]);
    }
}
