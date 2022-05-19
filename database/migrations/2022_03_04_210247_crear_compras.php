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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha');
            $table->foreignid('id_producto')
            ->constrained('productos')
            ->cascadeOnDelete();
            $table->integer('cantidad');
            $table->foreignid('id_cliente')
            ->constrained('clientes')
            ->cascadeOnDelete();
            $table->integer('factura');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
