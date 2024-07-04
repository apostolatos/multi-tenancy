<?php
// app/Traits/HasUlid.php
namespace App\Traits;

use Illuminate\Support\Str;

trait HasUlid
{
    protected static function bootHasUlid()
    {
        static::creating(function ($model) {
            $model->incrementing = false;
            $model->id = (string) Str::ulid();
        });
    }

    public function getKeyType()
    {
        return 'string';
    }
}