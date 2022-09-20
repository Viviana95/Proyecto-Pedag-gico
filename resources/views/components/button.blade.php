<div class="flex items-center justify-evenly">
    <button
        class='btn inline-flex items-center px-4 rounded-md font-semibold text-xs text-white uppercase tracking-widest  transition ease-in-out duration-150'><a
            href="{{ url('/') }}">Cancel</a>
    </button>


    <button
        class="btn inline-flex items-center px-4 py-2   rounded-md font-semibold text-xs text-white uppercase tracking-widest   focus:ring disabled:opacity-25 transition ease-in-out duration-150"
        {{ $attributes->merge(['type' => 'submit']) }}>
        {{ $slot }}
    </button>
</div>
