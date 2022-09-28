@include('layouts.layout')
<x-app-layout>
    <x-slot name="header">
<div class="">
    <x-nav_home_admin></x-nav_home_admin>
    <x-form_edit_user :user="$user"></x-form_edit_user>
    <x-footer></x-footer>
</div>
    </x-slot>
</x-app-layout>