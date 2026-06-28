<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:reservations,email',
            'phone' => 'required|string|max:20',
            'reservation_time' => 'required|date|after:now',
            'status' => 'sometimes|in:pending,confirmed,cancelled',
            'guest_count' => 'required|integer|min:1',
            'table_id' => 'required|exists:tables,id'

        ];
    }
}
