<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekredensialing extends Model
{
    protected $guarded = [];

    public function prasyarats()
    {
        return $this->belongsToMany(Persyaratan::class, 'persyaratan_rekredensialing');
    }
}
