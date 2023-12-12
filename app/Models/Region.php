<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;
    
    protected $guarded = [];



    public function sitios():HasMany
    {
        return $this->hasMany(Sitio::class);
    } //muchos

}
