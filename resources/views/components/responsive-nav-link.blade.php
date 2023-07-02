@props(['active'])

@php
$classes = ($active  ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium  hover:text-white hover:bg-green-500 hover:border-indigo-500 focus:outline-none focus:text-white  focus:border-gray-200 cursor-pointer transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} {{ $attributes }}>
    {{ $slot }}
</a>
