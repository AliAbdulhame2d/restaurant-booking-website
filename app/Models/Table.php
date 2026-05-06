<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Table extends Model
{
    public function reservations() {
        return $this->hasMany(Reservation::Class);
    }
}
