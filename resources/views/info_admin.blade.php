@include('layouts.layout')
<div class="info-admin">
<x-app-layout>
    <x-slot name="header">
        <x-nav_home_admin></x-nav_home_admin>

            <x-mine-resources></x-mine-resources>
            <a class="btn btn_orange" href="{{route('means.index')}}">ENTRAR</a>
        </x-slot>
    </div>
    <x-footer></x-footer>
</x-app-layout>
</div>

