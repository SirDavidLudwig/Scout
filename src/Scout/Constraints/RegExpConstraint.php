<?php

namespace Scout\Constraints;

use Scout\ScoutConstraint;

class RegExpConstraint extends ScoutConstraint
{
    public function test($value)
    {
        if (empty($value))

            return True;

        return @preg_match($value, Null) !== False;
    }
}
