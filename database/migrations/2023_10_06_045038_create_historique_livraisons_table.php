<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_livraisons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ColisID');
            $table->datetime('DateHeureLivraison');
            $table->string('SignatureDestinataire', 255);
            $table->text('CommentairesLivraison')->nullable();
            $table->timestamps();

            $table->foreign('ColisID')->references('id')->on('colis');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historique_livraisons', function (Blueprint $table){
            $table->dropForeign(["ColisID"]);
        });
        Schema::dropIfExists('historique_livraisons');
    }
}
