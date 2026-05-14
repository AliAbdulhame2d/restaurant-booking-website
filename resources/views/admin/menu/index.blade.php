<x-admin-layout>
    <x-slot name="header">
            {{ __('Menu') }}
    </x-slot>

    <x-button href="{{route('admin.menus.create')}}" class="inline-block mb-5">
        Add Menu
      </x-button>

        @php
            //Table Header
            $thead = ['Name', 'Price', 'Image', 'Description'];
            //Columns in Database
            $cols = [	'id',	'name',	'price',	'image',	'description',	'category_id'	];	
            //Data from Database
            $rows = $menus;                 
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="menus"/>

                            
</x-admin-layout>
