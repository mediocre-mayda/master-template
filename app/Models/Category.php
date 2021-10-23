<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name', 'title', 'slug', 'is_featured', 'priority', 'icon_map_marker', 'type', 'status'
    ];


    public function place_type()
    {
        return $this->hasMany(PlaceType::class);
    }
}
