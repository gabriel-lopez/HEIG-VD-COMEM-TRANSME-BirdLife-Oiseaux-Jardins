<?php

namespace App\Filters;

class LegsColorFilter
{
    public function filter($builder, $value)
    {
        $values = explode(",", $value);

        return $builder->whereHas('legsColors', function($query) use ($values) {
            /**
             * now querying the Habitats relation. So anything in this closure will query the Habitats
             * relation, but outside of the closure, you're back to querying the Birds.
             */
            $query->whereIn('id', $values);
        });
    }
}