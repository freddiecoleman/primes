<?php

class prime
{
    public function generate($num)
    {
        if ($num == 1)
        {
            $return = [];
        }

        for ($calc = 2; $calc <= $num; $calc++)
        {
            for (;$num % $calc == 0;)
            {
                $return[] = $calc;
                $num /= $calc;
            }
        }

        return $return;
    }
}
