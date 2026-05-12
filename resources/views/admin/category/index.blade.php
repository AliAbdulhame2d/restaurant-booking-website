<x-admin-layout>
    <x-slot name="header">
            {{ __('Category') }}
    </x-slot>


        @php
            $thead=['Name', 'Category', 'Price'];
            $cols = ['id', 'customer_name', 'booking_date'];
            $rows = ['id', 'customer_name', 'booking_date'];                 
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows"/>
                       
</x-admin-layout>
