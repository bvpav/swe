<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = [
        'name',
        'nationality'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
