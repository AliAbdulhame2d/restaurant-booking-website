<x-admin-layout>

    <x-slot name="header">
        {{__('Create Menu')}}
    </x-slot>


<form action="{{route('admin.menus.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('admin.menu._form')
</form>

</x-admin-layout>