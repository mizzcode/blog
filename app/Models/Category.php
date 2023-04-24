<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the route key for the model.
     * Agar menggunakan slug, tidak id untuk get data route model binding
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
