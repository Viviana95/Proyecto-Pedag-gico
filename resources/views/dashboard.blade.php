@Include('layouts.layout')
<x-app-layout>
    <x-slot name="header">
<x-nav_home_admin></x-nav_home_admin>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!

                <a  class="btn btn-warning" href="{{route('means.index')}}">ENTRAR</a>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    </x-slot>
</x-app-layout>
