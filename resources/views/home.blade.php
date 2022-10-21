<x-app-layout>
  <x-slot name="header">
<div class="home_admin_container">
    <x-nav_home_admin></x-nav_home_admin>
    <h1 class="masRecientes">MÁS RECIENTES</h1>    

    @if (session('sucess'))
    <div class="alert alert-success alert-dismissible fade show m-4 w-50 center" role="alert">
      <strong>Genial!</strong> {{session('sucess')}}
      <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>               
    @endif
   
    <div class="card-content">
    @foreach ($means as $mean)
    <div class="card" style="width: 16rem;">
      
      <h5 class="card-title">{{$mean->title}}</h5>

      
        @if ($mean->formats->contains($format->id = 1))
        <a href="{{url($mean->file)}}" target="_blank">
          <img src="{{ asset('./assets/enlace.png')}}" alt="enlace"></a>
        @elseif ($mean->formats->contains($format->id = 2))
        <a href="{{url('/detail', $mean->id)}}">
          <img src="{{ asset('./assets/archivo.png')}}" alt="archivo">
        @else
          <img src="{{ asset('./assets/play.png')}}" alt="video">
        @endif
      </a>

    </div>
    @endforeach
    </div>
    <div>{{ $means->appends(['search'=> $search]) }}</div>
    {{-- <x-footer></x-footer> --}}
  </div>
</x-slot></x-app-layout>
