<x-layout>
    <x-slot:heading>
        Workshop Not Found
    </x-slot:heading>

    <div class="max-w-md mx-auto my-12">
        <x-card class="text-center py-12 space-y-6 border-t-4 border-t-rose-500">
            <div class="mx-auto h-16 w-16 bg-rose-50 rounded-full flex items-center justify-center text-rose-500 border border-rose-100 shadow-sm animate-pulse">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="text-2xl font-bold text-slate-900">404 - Not Found</h2>
                <p class="text-sm text-slate-500 leading-relaxed">
                    We've searched high and low, but that workshop ID does not exist on our portal. It may have been relocated or cancelled.
                </p>
            </div>

            <div class="pt-4">
                <x-button href="/workshops" class="bg-indigo-600 hover:bg-indigo-700 text-white w-full">
                    Return to All Workshops
                </x-button>
            </div>
        </x-card>
    </div>
</x-layout>
