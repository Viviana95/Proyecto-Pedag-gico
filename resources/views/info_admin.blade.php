@include('layouts.layout')
<x-app-layout>
    <x-slot name="header">
        <x-nav_home_admin></x-nav_home_admin>
        <div class="container-img-admin">
            <x-resources_admin_img></x-resources_admin_img>
            <h1>FACTORIA F5</h1>
    </div>
        <x-mine-resources></x-mine-resources>
        <a  class="btn btn-warning" href="{{route('means.index')}}">ENTRAR</a>
    </x-slot>
</x-app-layout>


