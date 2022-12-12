<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger w-24 mr-1 mb-2']) }}>
    {{ $slot }}
</button>
