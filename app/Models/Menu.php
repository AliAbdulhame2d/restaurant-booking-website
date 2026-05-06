<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Menu extends Model
{
    public function categories() {
        return $this->belongsTo(Category::Class);
    }
}
