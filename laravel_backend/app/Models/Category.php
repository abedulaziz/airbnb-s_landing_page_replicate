<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function stays() {
        return $this->hasMany(Stay::class);
    }

    public function getStaysGalleries() {
        return $this->hasManyThrough(Gallery::class, Stay::class);
    }
}
