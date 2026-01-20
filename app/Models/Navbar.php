<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $table = 'navbar';

    protected $fillable = [
        'menu_label',
        'menu_slug',
        'menu_url',
        'menu_icon',
        'menu_location',
        'menu_order',
        'parent_id',
        'show_in_navbar',
        'show_in_sidebar',
        'show_in_footer',
        'is_external',
        'open_new_tab',
        'is_button',
        'button_style',
        'require_auth',
        'allowed_roles',
        'is_active',
    ];

    protected $casts = [
        'show_in_navbar' => 'boolean',
        'show_in_sidebar' => 'boolean',
        'show_in_footer' => 'boolean',
        'is_external' => 'boolean',
        'open_new_tab' => 'boolean',
        'is_button' => 'boolean',
        'require_auth' => 'boolean',
        'is_active' => 'boolean',
        'allowed_roles' => 'array',
    ];

    /**
     * Get the parent menu item.
     */
    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parent_id');
    }

    /**
     * Get the child menu items (submenu).
     */
    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id')->orderBy('menu_order');
    }
}
