<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageInfo extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('page_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_url');
            $table->string('page_title');
            $table->string('page_desc');
            $table->string('page_keyword');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('page_info');
    }

}
