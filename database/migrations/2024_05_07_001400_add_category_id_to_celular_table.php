<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::table('celulares', function (Blueprint $table) {
            $table->foreignId('category_id') 
                ->constrained('categories') 
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('celular', function (Blueprint $table) {
        //     //
        // });

        Schema::table('celulares', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Eliminar la clave foránea
            $table->dropColumn('category_id'); // Eliminar la columna
        });

    }
};
