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

    public function birds()
    {
        return $this->hasMany(Bird::class);
    }
}
