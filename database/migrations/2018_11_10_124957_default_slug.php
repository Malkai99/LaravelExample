<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefaultSlug extends Migration
{

    

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->string('slug')->default('nombre')->unique()->after('email');   
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('slug')->unique();  
        });
    }

    
}
