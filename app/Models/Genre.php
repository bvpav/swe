<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
