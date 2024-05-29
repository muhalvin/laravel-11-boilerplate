<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-md btn-primary']) }}>
    {{ $slot }}
</button>
