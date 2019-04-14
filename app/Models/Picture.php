<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [
        'filename' => 'string|required',
        'caption' => 'string|nullable',
        'author' => 'string|required',
        'website' => 'string|nullable',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'bird_id'
    ];

    public function bird()
    {
        return $this->belongsTo(Bird::class);
    }
}
