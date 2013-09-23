# Laravel-Database

Provides extra / missing functionality to Laravels database layer.

## Installation

Add `rcrowe\laravel-database` as a requirement to composer.json:

```javascript
{
    "require": {
        "rcrowe/laravel-sentry": "0.1.*"
    }
}
```

Update your packages with `composer update` or install with `composer install`.

Once Composer has installed or updated your packages you need to register with Laravel itself. Open up app/config/app.php and the existing database service provider `'Illuminate\Database\DatabaseServiceProvider'` and replace it with the following:

```php
'rcrowe\Database\DatabaseServiceProvider'
```

## Functionality

This library provides the following extra functionality:

### Schema builder

- `character` has been added to the schema builder (MySql / Postgre). Use like `$table->character('field', 6)`. Taken from http://forums.laravel.io/viewtopic.php?id=7320
