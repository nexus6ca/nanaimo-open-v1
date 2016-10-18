<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('players', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('firstName', 64);
            $table->string('lastname', 64);
            $table->integer('rating')->unsigned();
            $table->string('altEmail')->nullable();
            $table->string('prov');
            $table->string('city');
            $table->enum('age', array('Adult', 'Junior'));
            $table->string('byeRounds');
            $table->string('membershipOption');
            $table->integer('CFCNumber')->nullable();
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
        Schema::drop('players');
    }
}
