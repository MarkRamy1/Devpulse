@props(['type' => 'info'])

@php
    $styles = match($type) {
        'info' => 'bg-blue-50 text-blue-800 border-blue-200',
        'warning' => 'bg-amber-50 text-amber-800 border-amber-200',
        'success' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
        default => 'bg-slate-50 text-slate-800 border-slate-200'
    };
@endphp

<div {{ $attributes->merge(['class' => "p-4 border rounded-md shadow-sm {$styles}"]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            @if($type === 'warning')
                <!-- Warning icon -->
                <svg class="h-5 w-5 text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            @else
                <!-- Info icon -->
                <svg class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            @endif
        </div>
        <div class="ml-3">
            <div class="text-sm">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>