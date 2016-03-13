<?php

namespace Scout\Constraints;

use Scout\ScoutConstraint;

class URLConstraint extends ScoutConstraint
{
    public function test($value)
    {
        if (empty($value))

            return True;

        return !filter_var($value, FILTER_VALIDATE_URL) === False;
    }
}
