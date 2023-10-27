<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->char('isbn', 13)->primary();
            $table->string('judul');
            $table->integer('halaman')->default(0);
            $table->string('kategori')->default('uncategorized');
            $table->string('penerbit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
