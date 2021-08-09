<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogoDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('catadetalle', function(Blueprint $table){
            $table->id();
            $table->string('titleCatalogo');
            $table->text('descripcion');
            $table->string('detalleimg1');
            $table->string('detalleimg2');
            $table->string('detalleimg3');
            $table->string('detalleimg4');     
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
        // 
        Schema::dropIfExists('catalogoDetalle');
    }
}
