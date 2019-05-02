<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Submission extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [
        'birds' => 'required',

        'name' => 'string|required',
        'surname' => 'string|required',
        'email' => 'email|required',
        'birthday' => 'date|required',

        'newsletter' => 'boolean|required',
        'newmember' => 'boolean|required',
        'order' => 'boolean|required',

        'observation_day' => 'date|required',
        'observation_time' => 'date_format:H:i|required',
        'observation_npa' => 'digits:4|required',
        'observation_city' => 'string|required',
        'observation_features' => 'required',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function getValidation(Array $inputs)
    {
        $validator = Validator::make($inputs, self::$rules);
        $validator->after(function ($validator) use ($inputs)
        {
            // contraintes supplémentaires
        });
        return $validator;
    }

    public static function createOne(array $values)
    {
        $new = new self();
        //->title = $values['title'];
        //$new->message = $values['message'];
        //$new->user_id = $values['user_id'];
        $new->save();
        return $new;
    }

    public function birds()
    {
        return $this->belongsToMany(Bird::class,'bird_submission', 'bird_id', 'submission_id')->withPivot('quantity');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
