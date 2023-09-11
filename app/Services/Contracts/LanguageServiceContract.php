<?php

namespace App\Services\Contracts;

interface LanguageServiceContract
{
    public function setlocale(string $locale) : void;
    public function detectLanguage(string $text): string;
}
