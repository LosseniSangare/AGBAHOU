<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom',25);
            $table->string('prenom',100);
            $table->string('profession',100);
            $table->string('contact1',15);
            $table->string('contact2',15)->nullable();
            $table->string('filiere',50)->nullable();
            $table->string('niveau',50)->nullable();
            $table->string('email',255)->nullable();
            $table->date('date_naissance',15);
            $table->char('sexe',1);
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membres');
    }
}
