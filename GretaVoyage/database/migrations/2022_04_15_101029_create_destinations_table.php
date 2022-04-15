<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string("nom",150);
            $table->string("description");
            $table->date("dateDebut");
            $table->date("dateFin")->nullable();
            $table->float("prix");
            $table->boolean("estDisponible");
            $table->integer("duree");
            $table->foreignId("pays_id")->constrained("Pays","id")->onDelete("cascade");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};
