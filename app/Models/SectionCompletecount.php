<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionCompletecount extends Model
{
    use HasFactory;

    protected $table = 'section_completecount';

    protected $fillable = [
        'title',
        'icon',
        'amount',
        'status',
    ];
}
