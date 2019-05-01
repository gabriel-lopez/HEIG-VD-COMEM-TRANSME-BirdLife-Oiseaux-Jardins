<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Filters\BirdFilter;

class Bird extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public static $rules = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'family_id',
        'order_id'
    ];

    public function scopeFilter(Builder $builder, $request)
    {
        return (new BirdFilter($request))->filter($builder);
    }

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
}
