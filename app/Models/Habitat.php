<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habitat extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [
        'name_de' => 'string|required',
        'name_fr' => 'string|nullable',
        'name_it' => 'string|nullable',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'pivot',
    ];

    public function birds()
    {
        return $this->belongsToMany(Bird::class);
    }
}