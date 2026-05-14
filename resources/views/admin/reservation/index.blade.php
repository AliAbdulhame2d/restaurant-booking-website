<x-admin-layout>
    <x-slot name="header">
            {{ __('Reservation') }}
    </x-slot>

    <x-button href="{{route('admin.reservations.create')}}" class="inline-block mb-5">
        Add Reservation
      </x-button>


        @php
            //Table Header
            $thead = ['First Name', 'Last Name', 'Email', 'Phone', 'Reservation Time', 'Status', 'Guest Count'];
            //Columns in Database
            $cols = ['id',	'first_name',	'last_name',	'email',	'phone',	'reservation_time',	'status',	'guest_count',	'table_id', 'created_at	'];
            //Data from Database
            $rows = $reservations;
                            
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="reservations"/>
                
</x-admin-layout>
