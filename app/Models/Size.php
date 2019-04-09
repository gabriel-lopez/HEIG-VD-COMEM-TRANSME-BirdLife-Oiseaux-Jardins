<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [

    ];

    public function birds()
    {
        return $this->belongsToMany(Bird::class);
    }
}
