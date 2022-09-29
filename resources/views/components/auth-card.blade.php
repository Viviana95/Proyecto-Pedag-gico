<x-app-layout>
    <x-slot name="header">
        <x-navbar_welcome></x-navbar_welcome>
        <div class="flex flex-col m-9 items-center">
            <div class="form-login">
                {{ $slot }}
            </div>
        </div>
        <x-footer></x-footer>
    </x-slot>
</x-app-layout>
