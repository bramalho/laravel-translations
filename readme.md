# Laravel Translations Package

[![Latest Stable Version](https://poser.pugx.org/bramalho/laravel-translations/v/stable)](https://packagist.org/packages/bramalho/laravel-translations)
[![Total Downloads](https://poser.pugx.org/bramalho/laravel-translations/downloads)](https://packagist.org/packages/bramalho/laravel-translations)
[![License](https://poser.pugx.org/bramalho/laravel-translations/license)](https://packagist.org/packages/bramalho/laravel-translations)

Laravel Translations is a Laravel package that provide translations for your models.

## Installation
Install the package
```sh
composer require bramalho/laravel-translations
```

Add the service provider in `app/config/app.php`

```php
BRamalho\LaravelTranslations\LaravelTranslationsServiceProvider::class,
```

Publish the configs
```sh
php artisan vendor:publish --provider 'BRamalho\LaravelTranslations\LaravelTranslationsServiceProvider'
```

Run migrations

```sh
php artisan migrate
```

## Usage

Add the trait to your model
```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BRamalho\LaravelTranslations\Translate;

class Page extends Model
{
    use Translate;

    protected $fillable = ['title', 'body'];
}
```

Add to your new table `translations` data according to your model
```php
<?php

use Illuminate\Database\Seeder;
use App\Page;
use BRamalho\LaravelTranslations\Translation;

class PageTableSeeder extends Seeder
{
    public function run()
    {
        Page::create([
            'id' => 1,
            'title' => 'Hello World!',
            'body' => 'This is my page'
        ]);

        Translation::create([
            'id' => 1,
            'laravel-translations_id' => 1,
            'laravel-translations_type' => App\Page::class,
            'language' => 'pt',
            'content' => [
                'title' => 'Olá Mundo!',
                'body' => 'Esta é a minha página'
            ]
        ]);
    }
}
```

## License
The **Laravel Translations** is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
