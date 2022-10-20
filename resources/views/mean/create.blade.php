<x-app-layout>
    <x-slot name="header">
    <x-nav_home_admin :language="$language"></x-nav_home_admin>
    
     <x-form_create :format="$format" :image="$image" :language="$language"></x-form_create>
       
    <x-footer></x-footer>
</x-slot>
</x-app-layout>
