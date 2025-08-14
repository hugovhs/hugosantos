<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Models\Admin;
use Dom\Attr;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'type', // 1 post, 2 project
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

    /**
     * Get the admin associated with the post.
     */
    public function adminRelation()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }

    /**
     * Get the user's name (admin's name).
     */
    public function userName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) =>
                $this->adminRelation->fullName ?? 'Autor anónimo'
        );
    }
}
