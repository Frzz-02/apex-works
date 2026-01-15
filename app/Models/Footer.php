<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footer';

    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'description_1',
        'description_2',
        'phone',
        'email',
        'address',
        'linkname1',
        'linkname2',
        'linkname3',
        'linkname4',
        'linkname5',
        'link1',
        'link2',
        'link3',
        'link4',
        'link5',
        'background_color',
        'title_color',
        'text_color',
        'linkname6',
        'linkname7',
        'linkname8',
        'linkname9',
        'linkname10',
        'link6',
        'link7',
        'link8',
        'link9',
        'link10',
        'linkaddress',
        'attributes1',
        'attributes2',
        'attributes3',
        'attributes4',
        'attributes5',
        'attributes6',
        'attributes7',
        'attributes8',
        'attributes9',
        'attributes10',
    ];
}
