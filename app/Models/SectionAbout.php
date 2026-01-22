<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionAbout extends Model
{
    use HasFactory;

    protected $table = 'section_about';

    protected $fillable = [
        'section_label',
        'section_title',
        'section_description',
        'image_1_type',
        'image_1_source',
        'image_1_alt',
        'image_2_type',
        'image_2_source',
        'image_2_alt',
        'image_3_type',
        'image_3_source',
        'image_3_alt',
        'benefit_title',
        'benefit_1_text',
        'benefit_1_icon',
        'benefit_1_enabled',
        'benefit_2_text',
        'benefit_2_icon',
        'benefit_2_enabled',
        'benefit_3_text',
        'benefit_3_icon',
        'benefit_3_enabled',
        'benefit_4_text',
        'benefit_4_icon',
        'benefit_4_enabled',
        'benefit_5_text',
        'benefit_5_icon',
        'benefit_5_enabled',
        'benefit_6_text',
        'benefit_6_icon',
        'benefit_6_enabled',
        'section_background',
        'label_color',
        'title_color',
        'description_color',
        'benefit_icon_color',
        'is_active',
    ];

    protected $casts = [
        'benefit_1_enabled' => 'boolean',
        'benefit_2_enabled' => 'boolean',
        'benefit_3_enabled' => 'boolean',
        'benefit_4_enabled' => 'boolean',
        'benefit_5_enabled' => 'boolean',
        'benefit_6_enabled' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Get the shortcodes for the about section.
     */
    public function shortcodes()
    {
        return $this->hasMany(PageShortcode::class, 'section_about_id');
    }
}
