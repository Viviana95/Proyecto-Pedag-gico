@include('layouts.layout')
<x-app-layout>
    <x-slot name="header">
        <x-nav_home_admin></x-nav_home_admin>
        <x-resources_admin_img></x-resources_admin_img>
        <a  class="btn btn-warning" href="{{route('means.index')}}">ENTRAR</a>
    </x-slot>
</x-app-layout>


