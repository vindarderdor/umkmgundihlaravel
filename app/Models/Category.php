<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function umkms()
    {
        return $this->hasMany(Umkm::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
