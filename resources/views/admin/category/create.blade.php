<x-admin-layout>
    <x-slot name="header">
        {{__('Create Category')}}
    </x-slot>
    
    <x-alert />

        <form action="{{route('admin.categories.store')}}" method="POST">
            @csrf
            @include('admin.category._form') 
        </form>
 

</x-admin-layout>
