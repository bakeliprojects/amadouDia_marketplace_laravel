<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChariotsTable extends Migration
{
    /**
     /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chariots', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('montant');
      $table->integer('produit_id');
      $table->integer('user_id');
      $table->decimal('total', 10, 2);
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     /* @return void
     */

    public function down()
    {
        Schema::drop('chariots');
    }
    
}
