<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('nick');
            $table->string('avatar');
            $table->timestamps();
        });

         // Insert some records (inside up-function, after create method)
         DB::table('people')->insert(
            [
                [
                    'name' => 'Wojciech',
                    'surname' => 'Mazur',
                    'nick' => 'mazi',
                    'avatar' => 'mazi_av'
                ],
                [
                    'name' => 'Michael',
                    'surname' => 'Mazur',
                    'nick' => 'mazaczenko',
                    'avatar' => 'mazaczenko_av'
                ],
                [
                    'name' => 'Sofie',
                    'surname' => 'Mazur',
                    'nick' => 'zoska',
                    'avatar' => 'zoska_av'
                ],
                [
                    'name' => 'Klementine',
                    'surname' => 'Mazur',
                    'nick' => 'klema',
                    'avatar' => 'klema_av'
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
