<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('precio',15,2);
            $table->time('duracion');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('product_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('servicios');
    }
}
