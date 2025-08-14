<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
    ];

    /**
     * Get the admin's full name.
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) =>
                "{$attributes['name']} {$attributes['lastname']}"
        );
    }
}
