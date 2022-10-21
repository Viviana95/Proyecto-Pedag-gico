<x-app-layout>
    <x-slot name="header">
<div class="">
    <x-nav_home_admin></x-nav_home_admin>
    <x-form_edit :mean="$mean" :format="$format"></x-form_edit>
    <x-footer></x-footer>
</div>
    </x-slot>
</x-app-layout>
