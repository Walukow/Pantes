@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-b-2 flex items-center font-medium leading-5'
            : 'border-b-2 flex items-center border-transparent hover:text-gray-500 hover:border-gray-500 transition ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
