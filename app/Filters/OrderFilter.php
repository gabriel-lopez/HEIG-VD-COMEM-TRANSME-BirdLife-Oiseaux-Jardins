<?php

namespace App\Filters;

class OrderFilter
{
    public function filter($builder, $value)
    {
        $values = explode(",", $value);

        return $builder->whereIn('order_id', $values);
    }
}