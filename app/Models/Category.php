<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Category extends Model
{

    protected $fillable =['name', 'image', 'description'];

    public function menus() {
        return $this->hasMany(Menu::Class);
    }
}
