<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id'
    ];

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
