<x-admin-layout>
    <x-slot name="header">
        {{__('Update Reservation')}}
    </x-slot>
<form action="{{route('admin.reservations.update', $reservation)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.reservation._form')

</form>

</x-admin-layout>    