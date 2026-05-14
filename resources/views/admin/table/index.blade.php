<x-admin-layout>
    <x-slot name="header">
            {{ __('Table') }}
    </x-slot>

    <x-button href="{{route('admin.tables.create')}}" class="inline-block mb-5">
        Add Table
      </x-button>

        @php
            //Table Header
            $thead=['Table Number', 'Capacity', 'Location'];
            //Columns in Database
            $cols = ['id',	'table_number',	'capacity',	'location'];
            //Data from Database
            $rows = $tables;                
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="tables"/>
 
                            
</x-admin-layout>
