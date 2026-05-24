<x-admin-layout>

    <x-slot name="header">
        {{__('Edit Menu')}}
    </x-slot>

<x-alert/>

<form action="{{route('admin.menus.update', $menu)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.menu._form')
</form>

</x-admin-layout>