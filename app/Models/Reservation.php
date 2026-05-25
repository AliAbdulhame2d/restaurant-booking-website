<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class Reservation extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'reservation_time', 'status', 'guest_count', 'table_id'];
    public function table() {
        return $this->belongsTo(Table::Class);
    }
}
