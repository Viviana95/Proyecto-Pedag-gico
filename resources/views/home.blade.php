<x-app-layout>
  <x-slot name="header">

<div class="home_admin_container">
    <x-nav_home_admin></x-nav_home_admin>
    <h1 class="masRecientes">MAS RECIENTES</h1>
    {{-- <x-card :mean="$mean"></x-card> --}}
    <div class="card-content">
    @foreach ($means as $mean)
    <div class="card" style="width: 18rem;">
        <h5 class="card-title">{{$mean->title}}</h5>
        <img src="{{ asset('./assets/fondo.png')}}" alt="...">
      </div>
      @endforeach
    </div>
    <x-footer></x-footer>
  </div>
</x-slot></x-app-layout>
