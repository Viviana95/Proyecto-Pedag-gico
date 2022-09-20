@include('layouts.layout')

<x-navbar_welcome ></x-navbar_welcome>
<div class="flex flex-col m-9 items-center">
    <div class="form-login">
        {{ $slot }}
    </div>
</div>
<x-footer></x-footer>
