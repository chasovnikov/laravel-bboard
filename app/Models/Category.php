<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id'
    ];

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function categories()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    // Перед выдачей преобразуем первую букву названия рубрики
    public function getNameAttribute($value)
    {
        return Str::ucfirst($value);
        // return Str::of($value)->ucfirst();
    }

    // Перед сохранением в базе преобразуем название рубрики
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::lower($value);
    }
}
