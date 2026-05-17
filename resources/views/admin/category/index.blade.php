<x-admin-layout>
    <x-slot name="header">
            {{ __('Category') }}
    </x-slot>

    <x-alert />
    
    <x-button href="{{route('admin.categories.create')}}" class="inline-block mb-5">
        Add Category
      </x-button>


        @php
            //Table Header
            $thead = ['Name', 'Description', 'Image'];
            //Columns in Database
            $cols = ['name', 'description',	'image'];
            //Data from Database
            $rows = $categories;
                             
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="categories" />
                       
</x-admin-layout>
