<x-layout>
    <x-slot:heading>
        Welcome to DevPulse
    </x-slot:heading>

    <!-- Alert Announcement (Bonus Challenge #2) -->
    <div class="mb-8">
        <x-alert type="warning">
            <span class="font-bold">Important Notice:</span> The "Introduction to LLMs in PHP" workshop has been moved to <span class="font-semibold">September 10, 2026</span> due to popular demand! Seats are filling fast.
        </x-alert>
    </div>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 rounded-2xl shadow-xl text-white py-16 px-8 text-center mb-12 border border-indigo-900/50">
        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white via-indigo-200 to-white">
            Level Up Your Developer Craft
        </h2>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto mb-8">
            Access elite development workshops led by senior engineers. Learn real-world Laravel, modern frontend design systems, deployment orchestration, and cutting-edge PHP implementations.
        </p>
        <div class="flex justify-center space-x-4">
            <x-button href="/workshops">
                Browse All Workshops
            </x-button>
            <x-button href="/about" class="bg-slate-800 hover:bg-slate-700 border border-slate-700">
                Meet the Team
            </x-button>
        </div>
    </div>

    <!-- Featured Section Title -->
    <div class="border-b border-slate-200 pb-4 mb-8">
        <h3 class="text-2xl font-bold text-slate-900">Featured Workshops</h3>
        <p class="text-sm text-slate-500">Selected high-impact learning sessions starting this week.</p>
    </div>

    <!-- Workshops 3-Card Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($workshops as $workshop)
            <x-card class="flex flex-col justify-between">
                <div>
                    <!-- Badge and Price -->
                    <div class="flex justify-between items-center mb-4">
                        <x-badge :type="$workshop['category']">
                            {{ $workshop['category'] }}
                        </x-badge>
                        <span class="text-lg font-bold text-slate-900">
                            {{ $workshop['price'] }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h4 class="text-lg font-bold text-slate-900 mb-2 hover:text-indigo-600 transition duration-150">
                        {{ $workshop['title'] }}
                    </h4>

                    <!-- Date & Instructor -->
                    <div class="text-xs text-slate-500 space-y-1 mb-4">
                        <p class="flex items-center">
                            <span class="font-semibold text-slate-700">Date:</span>&nbsp;{{ $workshop['date'] }}
                        </p>
                        <p class="flex items-center">
                            <span class="font-semibold text-slate-700">Instructor:</span>&nbsp;{{ $workshop['instructor'] }}
                        </p>
                    </div>

                    <!-- Description excerpt -->
                    <p class="text-sm text-slate-600 mb-6 line-clamp-3">
                        {{ $workshop['description'] }}
                    </p>
                </div>

                <!-- Action CTA -->
                <div class="mt-auto">
                    <x-button href="/workshops/{{ $workshop['id'] }}" class="w-full">
                        View Details
                    </x-button>
                </div>
            </x-card>
        @endforeach
    </div>
</x-layout>