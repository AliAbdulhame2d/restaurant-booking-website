<x-admin-layout>
    <x-slot name="header">
        {{__('Edit Table')}}
    </x-slot>

    <form action="{{route('admin.tables.update', $table)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.table._form')
    </form>
</x-admin-layout>