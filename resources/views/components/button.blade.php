<div class="buttons-container">
   {{--  <button
        class='btn_orange'
        href="{{ url('/') }}">Cancel</button>
    </button> --}}

    <button
        class="btn_orange "
        {{ $attributes->merge(['type' => 'submit']) }}>
        {{ $slot }}
    </button>
</div>
