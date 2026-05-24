<x-admin-layout>
    <x-slot name="header">
            {{ __('Menu') }}
    </x-slot>

    <x-button href="{{route('admin.menus.create')}}" class="inline-block mb-5">
        Add Menu
      </x-button>

        @php
            //Table Header
            $thead = ['Name', 'Price', 'Category', 'Image', 'Description'];
            //Columns in Database
            $cols = ['name',	'price',	'category_id', 'image',	'description'	];	
            //Data from Database
            $rows = $menus;                 
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="menus"/>

                            
</x-admin-layout>
