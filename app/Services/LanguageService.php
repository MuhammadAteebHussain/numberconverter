<?php

namespace App\Services;

use App\Services\Contracts\LanguageServiceContract;
use Text_LanguageDetect;


class LanguageService implements LanguageServiceContract
{
    protected $languageDetector;

    CONST DEFAULT_LANGUAGE = 'english';

    public function __construct(Text_LanguageDetect $languageDetector) {
        $this->languageDetector = $languageDetector;
    }
    
    public function setLocale(string $locale) : void
    {
        app()->setLocale($locale);
    }

    public function detectLanguage(string $text): string
    {
        $result = $this->languageDetector->detectSimple($text);
        return !$result ? self::DEFAULT_LANGUAGE : $result;
    }
}
