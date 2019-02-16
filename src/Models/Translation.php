<?php

namespace BRamalho\LaravelTranslations\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $casts = ['content' => 'array'];

    protected $fillable = ['content', 'language'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function translatable()
    {
        return $this->morphTo();
    }
}
