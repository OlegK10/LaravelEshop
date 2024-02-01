<?php

use App\Helpers\Database\DatabaseHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hp_accommodation_local', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('language');
            $table->string('title');
            $table->string('description');
            $table->json('icons_values');
            $table->string('button');
            $table->string('gallery');
            DatabaseHelper::UpdatedByUser($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hp_accommodation_local');
    }
};
