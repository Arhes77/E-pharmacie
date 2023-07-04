<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-auto py-2 bg-green-500 border border-blue-300 rounded-md font-semibold text-xs text-white tracking-widest hover:bg-orange-500 focus:bg-black uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500']) }}>
    {{ $slot }}
</button>
