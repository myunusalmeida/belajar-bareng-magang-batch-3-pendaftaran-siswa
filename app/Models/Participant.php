<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn', 'name', 'gender', 'birth_date',
        'birth_location', 'address', 'photo'
    ];
}
