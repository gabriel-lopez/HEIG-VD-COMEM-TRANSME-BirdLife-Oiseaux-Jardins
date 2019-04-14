<?php

namespace App\Filters;

class GardenFilter
{
    public function filter($builder, $value)
    {
        $values = explode(",", $value);

        return $builder->whereIn('garden', $values);
    }
}