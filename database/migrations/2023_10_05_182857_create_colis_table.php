<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('NomColis');
            $table->text('DescriptionContenu')->nullable();
            $table->decimal('Poids', 10, 2);
            $table->date('DateEnvoi');
            $table->foreignId('Statut_ColisID');
            $table->foreignId('ExpediteurID')->constrained('expediteurs');
            $table->foreignId('DestinataireID')->constrained('destinataires');
            $table->foreignId('TransporteurID')->constrained('transporteurs');
            $table->foreignId('EmployeID')->constrained('employes');
            $table->timestamps();
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
        Schema::table('colis', function (Blueprint $table){
            $table->dropForeign(["Statut_ColisID", "ExpediteurID", "DestinataireID", "TransporteurID", "EmployeID"]);
        });
        Schema::dropIfExists('colis');
    }
}
            