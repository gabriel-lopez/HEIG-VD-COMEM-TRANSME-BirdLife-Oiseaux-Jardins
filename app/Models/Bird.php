<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bird extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [

    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function habitats()
    {
        return $this->belongsToMany(Habitat::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function plumageColors()
    {
        return $this->belongsToMany(Color::class,'color_plumage', 'bird_id', 'color_id');
    }

    public function legsColors()
    {
        return $this->belongsToMany(Color::class,'color_leg', 'bird_id', 'color_id');
    }

    public function beakColors()
    {
        return $this->belongsToMany(Color::class,'color_beak', 'bird_id', 'color_id');
    }

    public function beakShapes()
    {
        return $this->belongsToMany(BeakShape::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function singing()
    {
        return $this->hasOne(Family::class);
    }
}
