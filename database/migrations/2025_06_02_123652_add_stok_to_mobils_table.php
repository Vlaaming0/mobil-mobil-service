<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStokToMobilsTable extends Migration
{
    public function up()
    {
        Schema::table('mobils', function (Blueprint $table) {
            // Tambahkan kolom stok dengan default 0
            $table->integer('stok')->default(0)->after('harga');
        });
    }

    public function down()
    {
        Schema::table('mobils', function (Blueprint $table) {
            $table->dropColumn('stok');
        });
    }
}
