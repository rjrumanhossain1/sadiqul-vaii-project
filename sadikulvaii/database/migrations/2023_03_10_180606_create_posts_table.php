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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->longText("content");
            $table->text("images");
            $table->string("mobile_number");
            $table->string("email")->nullable();
            $table->integer("age");
            $table->integer("user_id");
            $table->integer("category_id");
            $table->integer("sub_category_id");
            $table->text("country_id");
            $table->text("state_id");
            $table->text("city_id");
            $table->tinyInteger("premium");
            $table->tinyInteger("sponsor");
            $table->string("expire_date");
            $table->integer("status")->default(1)->comment('1 active 0 is inactive');
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
        Schema::dropIfExists('posts');
    }
};
