<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ColisID');
            $table->decimal('MontantPaiement', 10, 2);
            $table->date('DatePaiement');
            $table->string('ModePaiement', 255);
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
        Schema::table('paiements', function (Blueprint $table){
            $table->dropForeign(["ColisID"]);
        });
        Schema::dropIfExists('paiements');
    }
}
