<x-admin-layout>

    <x-slot name="header">
        {{__('Create Table')}}
    </x-slot>

    <form action="{{route('admin.tables.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.table._form')
    </form>

</x-admin-layout>