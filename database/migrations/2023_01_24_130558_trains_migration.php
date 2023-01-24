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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->text('Stazione_di_partenza');
            $table->text('Stazione_di_arrivo');
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo');
            $table->string('Codice_treno');
            $table->integer('Numero_carrozze');
            $table->string('In_orario');
            $table->boolean('cancellato');
            $table->timestamp('added_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
