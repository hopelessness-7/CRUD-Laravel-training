<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialties_and_professions extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'number',
    ];
}
