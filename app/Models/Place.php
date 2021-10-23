<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class Place extends Model
{
    use HasFactory, HasJsonRelationships;

    protected $table = "places";
    protected $guarded = [];

    //associated array => map => key-value pair
    protected $casts = [
        "category" => "json",
        "place_type" => "json",
        "amenities" => "json",
        "social" => "json",
        "gallery" => "json",
        "opening_hours" => "json",
    ];


    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function categories()
    {
        return $this->belongToJson(Category::class, 'category');
    }

    public function amenities()
    {
        return $this->belongsToJson(Amenity::class, 'amenties');
    }

    public function place_type() {
        return $this->belongsToJson(PlaceType::class, 'place_type');
    }

}
