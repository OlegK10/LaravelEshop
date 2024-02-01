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
        Schema::create('hp_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('header_image')->nullable();
            $table->string('logo')->nullable();
            $table->string('btn_contact')->nullable();
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
        if (app()->environment(['local'])) {
            Schema::dropIfExists('hp_settings');
        }
    }
};
