<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruited_applicants extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'specialties_and_profession_id',
    ];
}
