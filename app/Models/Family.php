<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function birds()
    {
        return $this->hasMany(Bird::class);
    }
}
