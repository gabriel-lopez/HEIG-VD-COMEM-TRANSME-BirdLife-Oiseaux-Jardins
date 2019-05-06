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

        $new->name =  $values['name'];
        $new->surname = $values['surname'];
        $new->email = $values['email'];
        $new->birthday = $values['birthday'];

        $new->newsletter = $values['newsletter'];
        $new->newmember = $values['newmember'];
        $new->order = $values['order'];

        $new->observation_day = $values['observation_day'];
        $new->observation_time = $values['observation_time'];
        $new->observation_npa = $values['observation_npa'];
        $new->observation_city = $values['observation_city'];

        $new->save();

        $birds = $values['birds'];

        foreach($birds as &$bird)
        {
            $oBird = Bird::find($bird["id"]);

            $new->birds()->attach($oBird, ['quantity' => $bird["counter"]]);
        }

        $features = $values['observation_features'];

        foreach($features as &$feature)
        {
            $oFeature = Feature::find($feature["id"]);

            if(array_key_exists('checked', $feature))
            {
                if($feature["checked"])
                {
                    $new->features()->attach($oFeature);
                }
            }
        }

        return $new;
    }

    public function delete()
    {
        $this->birds()->detach();
        $this->features()->detach();

        return parent::delete();
    }

    public function birds()
    {
        return $this->belongsToMany(Bird::class,'bird_submission', 'submission_id', 'bird_id')->withPivot('quantity');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
