<?php

namespace App\Services\Contracts;

interface NumberConverterContract
{
    public function convertToInteger(string $input): int;
}
