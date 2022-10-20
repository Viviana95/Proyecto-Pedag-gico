<x-app-layout>
    <x-slot name="header">
    <x-nav_home_admin></x-nav_home_admin>
    
     <x-form_create :format="$format" :image="$image" :lenguage="$lenguage"></x-form_create>
       
    <x-footer></x-footer>
</x-slot>
</x-app-layout>
