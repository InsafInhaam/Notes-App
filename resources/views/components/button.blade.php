<button {{ $attributes->merge(['class' => 'bg-primary text-white hover:bg-primary-700 focus:ring-primary-500']) }}>
    {{ $slot }}
</button>
