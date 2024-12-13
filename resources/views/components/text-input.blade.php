@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-pantes focus:ring-pantes rounded-md shadow-sm']) }}>
