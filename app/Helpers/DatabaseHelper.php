<?php
namespace App\Helpers\Database;

use Illuminate\Database\Schema\Blueprint;

class DatabaseHelper
{
    public static function UpdatedByUser(Blueprint $table)
    {
        $table->uuid('updated_by')->nullable();
        $table->timestamp('updated_at')->nullable()->useCurrent();
    }
}
