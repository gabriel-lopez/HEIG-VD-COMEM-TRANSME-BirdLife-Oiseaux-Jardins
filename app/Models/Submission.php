<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submission extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [
        'name' => 'string|required',
        'surname' => 'string|required',
        'email' => 'string|required',
        'birthday' => 'string|required',

        'newsletter' => 'string|required',
        'newmember' => 'string|required',
        'order' => 'string|required',

        'observation_day' => 'string|required',
        'observation_time' => 'string|required',
        'observation_npa' => 'string|required',
        'observation_city' => 'string|required',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function birds()
    {
        return $this->belongsToMany(Bird::class,'bird_submission', 'bird_id', 'submission_id')->withPivot('quantity');
    }
}
