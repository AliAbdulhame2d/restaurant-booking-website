<x-admin-layout>
    <x-slot name="header">
            {{ __('Category') }}
    </x-slot>
    
      <x-button href="{{route('admin.categories.create')}}" class="inline-block mb-5">
        Add Category
      </x-button>


        @php
            //Table Header
            $thead = ['Name', 'Image', 'Description'];
            //Columns in Database
            $cols = ['id',	'name',	'image',	'description'];
            //Data from Database
            $rows = $categories;
                             
        @endphp

        <x-table :headers="$thead" :columns="$cols" :rows="$rows" baseRoute="categories" />
                       
</x-admin-layout>
