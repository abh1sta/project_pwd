<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            // Tambahkan kolom 'price' jika belum ada
            if (!Schema::hasColumn('recipes', 'price')) {
                $table->decimal('price', 10, 2)->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            if (Schema::hasColumn('recipes', 'price')) {
                $table->dropColumn('price');
            }
        });
    }
};