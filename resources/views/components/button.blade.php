@props(['href' => null])

@php
    $baseStyles = "inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 cursor-pointer";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $baseStyles]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $baseStyles]) }}>
        {{ $slot }}
    </button>
@endif

