<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [

    ];

    public function birds()
    {
        return $this->hasMany(Bird::class);
    }
}
