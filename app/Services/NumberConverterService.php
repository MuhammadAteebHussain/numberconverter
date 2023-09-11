<?php

namespace App\Services;

use App\Services\Contracts\NumberConverterContract;
use NumberFormatter;

class NumberConverterService implements NumberConverterContract
{


    public function convertToInteger(string $input): int
    {
        //NOTE:  Here we can use any locale so it will translate as per locale
        $formatter = new NumberFormatter(app()->getLocale(), NumberFormatter::SPELLOUT);
        
        return $formatter->parse(strtolower($input));
    
    }
}
