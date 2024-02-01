<?php

namespace App\Models\Admin\Homepage;


use Illuminate\Database\Eloquent\Concerns\HasUuids;

class HPPreviewLocal
{
    use HasUuids;
    protected $fillable = [
        'language',
        'image',
        'title',
        'description',
        'button'
    ];
}
