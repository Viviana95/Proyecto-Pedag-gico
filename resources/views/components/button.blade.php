<div class="flex items-center justify-evenly buttons">
    <button
        class='btn inline-flex items-center px-4 rounded-md font-semibold text-xs uppercase tracking-widest  transition ease-in-out duratio btn-cancel'><a
            href="{{ url('/') }}" class="btn-cancel">Cancel</a>
    </button>


    <button
        class="btn inline-flex items-center px-4 py-2   rounded-md font-semibold text-xs text-white uppercase tracking-widest   focus:ring disabled:opacity-25 transition ease-in-out duration-150"
        {{ $attributes->merge(['type' => 'submit']) }}>
        {{ $slot }}
    </button>
</div>
