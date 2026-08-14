@props(['type' => 'Frontend'])

@php
    // Assign clean, tinted background and text colors based on the category type
    $colors = match($type) {
        'Frontend' => 'bg-blue-50 text-blue-700 border-blue-150',
        'Backend'  => 'bg-emerald-50 text-green-700 border-green-150',
        'DevOps'   => 'bg-purple-50 text-purple-700 border-purple-150',
        'AI'       => 'bg-rose-50 text-rose-700 border-rose-150',
        default    => 'bg-slate-50 text-slate-700 border-slate-150'
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {$colors}"]) }}>
    {{ $slot }}
</span>