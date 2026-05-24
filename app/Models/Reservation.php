<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class Reservation extends Model
{
    public function table() {
        return $this->belongsTo(Table::Class);
    }
}
