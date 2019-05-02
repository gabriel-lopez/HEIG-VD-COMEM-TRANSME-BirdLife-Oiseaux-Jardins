<?php

namespace App\Filters;

class BirdFilter extends AbstractFilter
{
    protected $filters = [
        'order' => OrderFilter::class,
        'family' => FamilyFilter::class,
        'habitat' => HabitatFilter::class,
        'plumageColor' => PlumageColorFilter::class,
        'legsColor' => LegsColorFilter::class,
        'beakColor' => BeakColorFilter::class,
        'beakShape' => BeakShapeFilter::class,
        'size' => SizeFilter::class,
        'garden' => GardenFilter::class,
        'name' => NameFilter::class,
    ];
}