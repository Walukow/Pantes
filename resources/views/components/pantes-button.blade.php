<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-pantes rounded-md font-semibold text-xs text-pantes uppercase tracking-widest shadow-sm hover:text-white hover:border-white focus:text-slate-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
