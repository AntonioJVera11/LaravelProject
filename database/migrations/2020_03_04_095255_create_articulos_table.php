<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcion');
            $table->unsignedBigInteger('categoria_id');
            $table->integer('stock');
            $table->decimal('precio_coste',10,2);
            $table->decimal('precio_venta',10,2);
            $table->timestamps();
            
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
