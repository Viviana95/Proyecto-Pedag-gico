@include('layouts.layout')
<x-app-layout>
    <x-slot name="header">
<x-nav_home_admin></x-nav_home_admin>
<div class="home_admin_container">
    <h1 class="masRecientes">MAS RECIENTES</h1>
    <div class="cards-container">
    <x-card></x-card>
    <x-footer></x-footer>
</div>
</div>
    </x-slot>
</x-app-layout>
