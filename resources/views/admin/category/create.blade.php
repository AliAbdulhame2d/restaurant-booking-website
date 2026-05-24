<x-admin-layout>
    <x-slot name="header">
        {{__('Create Category')}}
    </x-slot>
    

        <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.category._form') 
        </form>
 

</x-admin-layout>
