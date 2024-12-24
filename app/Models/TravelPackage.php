<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_package_id', 'id');
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
