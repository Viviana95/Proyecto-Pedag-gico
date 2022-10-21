<x-app-layout>
    <x-slot name="header">
        <x-nav_home_admin :language="$language"></x-nav_home_admin>
        <x-resources_admin_img :means="$means"></x-resources_admin_img>
        {{-- <a  class="btn btn_orange" href="{{route('means.index')}}">ENTRAR</a> --}}
        <x-footer></x-footer>
    </x-slot>
</x-app-layout>


