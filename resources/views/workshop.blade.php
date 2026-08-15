<x-layout>
    <x-slot:heading>
        Workshop Details
    </x-slot:heading>

    <div class="mb-6">
        <a href="/workshops" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-700 transition">
            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to All Workshops
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-8">
            <x-card>
                <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                    <x-badge :type="$workshop['category']">
                        {{ $workshop['category'] }}
                    </x-badge>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-800 border border-slate-200">
                        {{ $workshop['level'] }}
                    </span>
                </div>

                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">
                    {{ $workshop['title'] }}
                </h2>

                <p class="text-slate-600 leading-relaxed mb-6">
                    {{ $workshop['description'] }}
                </p>

                <div class="border-t border-slate-100 pt-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Workshop Timeline</h3>
                    <div class="relative border-l border-indigo-200 ml-4 space-y-6">
                        <div class="relative pl-6">
                            <span class="absolute -left-1.5 top-1.5 h-3 w-3 rounded-full bg-indigo-600 ring-4 ring-indigo-50"></span>
                            <time class="text-xs text-slate-400 font-bold uppercase tracking-wider block">Session Date</time>
                            <p class="text-sm font-bold text-slate-800">{{ $workshop['date'] }}</p>
                        </div>
                        <div class="relative pl-6">
                            <span class="absolute -left-1.5 top-1.5 h-3 w-3 rounded-full bg-indigo-600 ring-4 ring-indigo-50"></span>
                            <time class="text-xs text-slate-400 font-bold uppercase tracking-wider block">Session Time</time>
                            <p class="text-sm font-bold text-slate-800">{{ $workshop['time'] }}</p>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card class="border-l-4 border-l-indigo-600">
                <h3 class="text-lg font-bold text-slate-900 mb-4">Meet Your Instructor</h3>
                <div class="flex items-start space-x-4">
                    <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-lg border border-indigo-200 shadow-sm shrink-0">
                        {{ collect(explode(' ', ''))->map(fn($n) => $n ?? '')->join('') }}
                    </div>
                    <div>
                        <h4 class="text-md font-bold text-slate-900">{{ $workshop['instructor'] }}</h4>
                        <p class="text-sm text-slate-500 mb-2">Senior Engineer & Active Mentor</p>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $workshop['instructor_bio'] }}
                        </p>
                    </div>
                </div>
            </x-card>
        </div>

        <div class="space-y-6">
            <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm sticky top-6 space-y-6">
                <div>
                    <span class="text-xs text-slate-400 font-bold uppercase tracking-wider block mb-1">Registration Fee</span>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-extrabold text-slate-900">{{ $workshop['price'] }}</span>
                        <span class="text-slate-500 text-sm ml-2">/ seat</span>
                    </div>
                </div>

                <div class="space-y-3 border-t border-b border-slate-100 py-4 text-sm text-slate-600">
                    <div class="flex justify-between">
                        <span>Enrollment Status:</span>
                        <span class="font-semibold text-emerald-600">Active</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Availability:</span>
                        <span class="font-semibold text-slate-900">Only 5 seats left!</span>
                    </div>
                </div>

                <x-button class="w-full text-center py-3">
                    Register for Workshop
                </x-button>

                <p class="text-xs text-center text-slate-400 leading-relaxed">
                    By registering, you agree to our active platform Terms of Service. Sessions are recorded for student review.
                </p>
            </div>
        </div>
    </div>
</x-layout>