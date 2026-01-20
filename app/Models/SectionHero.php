<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionHero extends Model
{
    use HasFactory;

    protected $table = 'section_hero';

    protected $fillable = [
        'mood_tag',
        'title',
        'description',
        'cta_text',
        'cta_url',
        'image_path',
        'image_alt',
        'fallback_image_url',
        'panel_order',
        'background_overlay_opacity',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'panel_order' => 'integer',
        'background_overlay_opacity' => 'decimal:2',
    ];

    /**
     * Get the shortcodes for the hero section.
     */
    public function shortcodes()
    {
        return $this->hasMany(PageShortcode::class, 'section_hero_id');
    }
}
