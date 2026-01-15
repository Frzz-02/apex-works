<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionBrand extends Model
{
    use HasFactory;

    protected $table = 'section_brand';

    protected $fillable = [
        'name',
        'logo',
        'url',
        'status',
    ];
}
