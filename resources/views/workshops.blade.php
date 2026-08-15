<x-layout>
    <x-slot:heading>
        Available Workshops
    </x-slot:heading>

    <div class="mb-8 flex flex-wrap gap-2 items-center bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
        <span class="text-sm font-semibold text-slate-700 mr-2">Filter by Category:</span>
        <a href="/workshops" 
           class="px-4 py-1.5 rounded-full text-xs font-semibold border transition duration-150 {{ !$selectedCategory ? 'bg-indigo-600 text-white border-indigo-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-50' }}">
            All
        </a>
        <a href="/workshops?category=Frontend" 
           class="px-4 py-1.5 rounded-full text-xs font-semibold border transition duration-150 {{ $selectedCategory === 'Frontend' ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-50' }}">
            Frontend
        </a>
        <a href="/workshops?category=Backend" 
           class="px-4 py-1.5 rounded-full text-xs font-semibold border transition duration-150 {{ $selectedCategory === 'Backend' ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-50' }}">
            Backend
        </a>
        <a href="/workshops?category=DevOps" 
           class="px-4 py-1.5 rounded-full text-xs font-semibold border transition duration-150 {{ $selectedCategory === 'DevOps' ? 'bg-purple-600 text-white border-purple-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-50' }}">
            DevOps
        </a>
        <a href="/workshops?category=AI" 
           class="px-4 py-1.5 rounded-full text-xs font-semibold border transition duration-150 {{ $selectedCategory === 'AI' ? 'bg-rose-600 text-white border-rose-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-50' }}">
            AI
        </a>
    </div>

    @if(count($workshops) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($workshops as $workshop)
                <x-card class="flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <x-badge :type="$workshop['category']">
                                {{ $workshop['category'] }}
                            </x-badge>
                            <span class="text-lg font-bold text-slate-900">
                                {{ $workshop['price'] }}
                            </span>
                        </div>

                        <h4 class="text-xl font-bold text-slate-900 mb-2">
                            {{ $workshop['title'] }}
                        </h4>

                        <div class="text-xs text-slate-500 space-y-1 mb-4">
                            <p class="flex items-center">
                                <span class="font-semibold text-slate-700">Instructor:</span>&nbsp;{{ $workshop['instructor'] }}
                            </p>
                            <p class="flex items-center">
                                <span class="font-semibold text-slate-700">Date:</span>&nbsp;{{ $workshop['date'] }}
                            </p>
                            <p class="flex items-center">
                                <span class="font-semibold text-slate-700">Time:</span>&nbsp;{{ $workshop['time'] }}
                            </p>
                        </div>

                        <p class="text-sm text-slate-600 mb-6">
                            {{ $workshop['description'] }}
                        </p>
                    </div>

                    <div class="mt-auto">
                        <x-button href="/workshops/{{ $workshop['id'] }}" class="w-full">
                            View Details
                        </x-button>
                    </div>
                </x-card>
            @endforeach
        </div>
    @else
        <div class="bg-white border border-slate-200 rounded-xl p-12 text-center shadow-sm">
            <p class="text-lg text-slate-500">No workshops found in this category.</p>
            <a href="/workshops" class="mt-4 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-700">
                Clear Category Filters
            </a>
        </div>
    @endif
</x-layout>