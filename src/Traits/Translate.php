<?php

namespace BRamalho\LaravelTranslations\Traits;

use BRamalho\LaravelTranslations\Models\Translation;
use Illuminate\Support\Facades\App;

trait Translate
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translation');
    }

    /**
     * @return Translation
     */
    public function getTranslationAttribute()
    {
        return $this->translations->firstWhere('language', App::getLocale());
    }
}
