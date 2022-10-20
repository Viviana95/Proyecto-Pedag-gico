<x-app-layout>
  <x-slot name="header">
<div class="home_admin_container">
    <x-nav_home_admin></x-nav_home_admin>
    <h1 class="masRecientes">MÁS RECIENTES</h1>
    {{-- @php
        dd($user)
    @endphp --}}
    <div class="card-content">
    @foreach ($means as $mean)
    <div class="card" style="width: 18rem;">
      <a href="{{url('/detail', $mean->id)}}">
      <h5 class="card-title">{{$mean->title}}</h5>
        @if ($mean->formats->contains($format->id = 1))
          <img src="{{ asset('./assets/enlace.png')}}" alt="enlace">
        @elseif ($mean->formats->contains($format->id = 2))
          <img src="{{ asset('./assets/archivo.png')}}" alt="archivo">
        @else
          <img src="{{ asset('./assets/play.png')}}" alt="video">
        @endif
      </a>
    </div>
    @endforeach
    </div>
    <div>{{ $means->links() }}</div>
    {{-- <x-footer></x-footer> --}}
  </div>
</x-slot></x-app-layout>
