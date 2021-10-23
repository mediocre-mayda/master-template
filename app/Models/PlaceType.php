<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceType extends Model
{
    use HasFactory;
    protected $table = 'place_types';

    protected $fillable = ['name', 'category_id'];

    protected $casts = ['category_id' => 'integer'];


    //relation method
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
