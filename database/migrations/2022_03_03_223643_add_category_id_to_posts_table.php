<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPostsTable extends Migration
{
    public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->integer('category_id')->unsigned();    //unsigned()型で定義
        //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
    });
}
}
