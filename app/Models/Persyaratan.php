<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    protected $guarded = [];

    public function rekredensialings()
    {
        return $this->belongsToMany(Rekredensialing::class, 'persyaratan_rekredensialing');
    }
}
