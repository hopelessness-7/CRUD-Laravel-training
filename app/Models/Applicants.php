<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;
    protected $fillable = [
        'Registration_number',
        'Date_of_receipt_of_the_application',
        'School_Number',
        'Full_Name',
        'Date_of_birth',
        'balls',
        'Passport',
        'Registration',
        'Telephone',
        'Certificate/Diploma',
        'Conscript_ID',
        'MC',
        'INN',
        'SS',
        'status_doc'
    ];
}
