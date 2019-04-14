<?php

namespace App\Filters;

class NameFilter
{
    public function filter($builder, $value)
    {
        return $builder
            ->where('name', 'like' , '%' . $value .'%')
            ->orwhere('name_de', 'like' , '%' . $value .'%')
            ->orwhere('name_fr', 'like' , '%' . $value .'%')
            ->orwhere('name_it', 'like' , '%' . $value .'%');
    }
}