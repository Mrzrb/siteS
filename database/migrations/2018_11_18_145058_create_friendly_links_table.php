<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendlyLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendly_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->default('');
            $table->string('fkey')->default('');
            $table->tinyInteger('weight')->default(0);
            $table->string('anti_url')->default('');
            $table->string('anti_fkey')->default('');
            $table->tinyInteger('anti_weight')->default(0);
            $table->string('extra')->default('');
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
        Schema::dropIfExists('friendly_links');
    }
}
