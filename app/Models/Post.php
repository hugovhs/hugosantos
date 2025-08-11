<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'type',
        'user_id',
        'views',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array<string, mixed>
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
