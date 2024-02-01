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
        Schema::create('hp_preview_local', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('language');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->string('button');
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
        Schema::dropIfExists('hp_preview_local');
    }
};
