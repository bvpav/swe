<?php

declare(strict_types=1);

namespace App;

class StringUtils
{
    /**
     * Reverses a string. Returns "ERROR" if the string is numeric.
     *
     * @param string $input
     * @return string
     */
    public static function reverseString(string $input): string
    {
        if (is_numeric($input)) {
            return 'ERROR';
        }

        return strrev($input);
    }
}
