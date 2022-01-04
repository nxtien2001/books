<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('cate_id');
            $table->integer('price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->string('author');
            $table->dateTime('pulish_date');
            $table->string('dimension');
            $table->string('publisher');
            $table->unsignedDouble('page');
            $table->string('book_cover');
            $table->string('slug');
            $table->string('cover');
            $table->text('detail');
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
        Schema::dropIfExists('books');
    }
}
