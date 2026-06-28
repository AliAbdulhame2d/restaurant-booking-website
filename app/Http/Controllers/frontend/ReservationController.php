<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;

class ReservationController extends Controller
{
    public function store(StoreReservationRequest $request) {

        $data = $request->validated();
        Reservation::create($data);
       
        return redirect()->back()->with('success', 'Reservation Created Successfully');
    }
}
