<x-app-layout>
    <x-slot name="header">
        <div class="home_admin_container">
            <x-nav_home_admin></x-nav_home_admin>
            <h1 class="title">MAS RECIENTES</h1>
            {{-- <x-card :mean="$mean"></x-card> --}}
            @foreach ($means as $mean)
            <div class="card" style="width: 18rem;">
                <h5 class="card-title">{{$mean->title}}</h5>
                <img src="{{ asset('storage/'.$mean->image)}}" alt="...">
                <div class="card-content">
                </div>
            </div>
            @endforeach
            <x-footer></x-footer>
        </div>
    </x-slot>
</x-app-layout>
