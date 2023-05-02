<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
       
         Schema::table('savininkai', function (Blueprint $table) {
            $table->unsignedBigInteger("automobilio_id")->nullable()->default(null);
 
            $table->foreign('id')->references('automobilio_id')->on('automobiliais');
         });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::table('savininkai', function (Blueprint $table) {
            $table->dropConstrainedForeignId("automobilio_id");
        });
    }
};
