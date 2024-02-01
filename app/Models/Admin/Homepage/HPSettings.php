<?php

namespace App\Models\Admin\Homepage;


use App\Models\Admin\AdminModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class HPSettings extends AdminModel
{
    use HasUuids;
    protected $table = 'hp_settings';
    protected $primaryKey = 'id';
    protected $fillable = ['header_image', 'logo', 'btn_contact'];
}