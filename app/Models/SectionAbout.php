<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionAbout extends Model
{
    use HasFactory;

    protected $table = 'section_about';

    protected $fillable = [
        'title',
        'subtitle',
        'blockquote',
        'description',
        'checklist_1',
        'checklist_2',
        'checklist_3',
        'image',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'image_9',
        'image_10',
        'image_11',
        'image_12',
        'image_13',
        'image_14',
        'image_15',
        'image_16',
        'image_17',
        'image_18',
        'video_url',
    ];

    /**
     * Get the shortcodes for the about section.
     */
    public function shortcodes()
    {
        return $this->hasMany(PageShortcode::class, 'section_about_id');
    }
}
