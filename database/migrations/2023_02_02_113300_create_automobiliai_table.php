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
        Schema::create('automobiliai', function (Blueprint $table) {
            $table->id();
            $table->string("vardas", 64);
            $table->string("pavarde", 64);
            $table->string("marke1", 64);
            $table->string("modelis1", 64);
            $table->string("numeris1", 64);
            $table->string("marke2", 64);
            $table->string("modelis2", 64);
            $table->string("numeris2", 64);
            $table->string("marke3", 64);
            $table->string("modelis3", 64);
            $table->string("numeris3", 64);



           // $table->integer("year")->nullable()->default(null);


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
        Schema::dropIfExists('automobiliai');
    }
};
