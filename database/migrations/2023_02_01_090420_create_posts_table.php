<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');  //foreign ke tabel categori
            $table->string('title');  //judul
            $table->string('slug')->unique();  //link
            $table->text('exceprt');  //untuk read more atau paragram yg di limit
            $table->text('body');    //untuk detail read more berita/blog
            $table->timestamp('published_at')->nullable();        //untuk tanggal publish
            $table->timestamps(); //postingan di buat/draft
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
