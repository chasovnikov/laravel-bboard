<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'price', 'user_id', 'rubric_id'
    ];
    protected $dates = ['published_at'];
    protected $casts = ['price' => 'integer'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
}