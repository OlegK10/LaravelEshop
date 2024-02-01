<?php
namespace App\Models\Admin\Homepage;


use Illuminate\Database\Eloquent\Concerns\HasUuids;

class HPReviewsLocal
{
    use HasUuids;
    protected $fillable = [
        'title'
    ];
}
