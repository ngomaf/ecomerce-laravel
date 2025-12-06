<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    use HasFactory;

    // public bool $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'city_user');
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
