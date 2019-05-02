<?php

namespace App\Filters;

class FamilyFilter
{
    public function filter($builder, $value)
    {
        $values = explode(",", $value);

        return $builder->whereIn('family_id', $values);
    }
}