<x-admin-layout>
    <x-slot name="header">
        {{__('Edit Category')}}
    </x-slot>
    
    <x-alert />

        <form action="{{route('admin.categories.update', $category)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.category._form') 
        </form>
 

</x-admin-layout>
