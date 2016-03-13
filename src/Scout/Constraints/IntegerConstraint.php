<?php

namespace Scout\Constraints;

use Scout\ScoutConstraint;

class IntegerConstraint extends ScoutConstraint
{
    public function test($value)
    {
        if (empty($value))

            return True;
            
        return ctype_digit($value);
    }
}
