<?php

use App\Helpers\Database\DatabaseHelper;
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
        Schema::create('hp_features_local', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('button');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hp_features_local');
    }
};
