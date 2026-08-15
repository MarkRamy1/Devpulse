<x-layout>
    <x-slot:heading>
        About DevPulse
    </x-slot:heading>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
        <div class="space-y-6">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                Empowering the Next Generation of Developers
            </h2>
            <p class="text-lg text-slate-600 leading-relaxed">
                At DevPulse, our mission is simple: to bridge the gap between academic theory and real-world production engineering. We provide highly practical, hands-on workshops designed and led by industry-active seniors. [3, 4]
            </p>
            <p class="text-slate-600 leading-relaxed">
                Whether you are starting your journey with Laravel fundamentals, designing intricate frontend component libraries, or learning how to automate Docker deployments, our immersive curriculums are designed to deliver actionable insights that you can apply immediately to your production environments. [1]
            </p>
            <div class="pt-4">
                <x-button href="/workshops">
                    Explore Our Syllabus
                </x-button>
            </div>
        </div>

        <div class="bg-gradient-to-br from-indigo-50 to-slate-100 rounded-2xl p-8 border border-slate-200/60 shadow-inner flex flex-col justify-between h-full min-h-[320px]">
            <div class="space-y-4">
                <span class="text-xs font-bold text-indigo-600 tracking-widest uppercase">Our Core Values</span>
                <ul class="space-y-3 text-slate-700 text-sm">
                    <li class="flex items-center">
                        <span class="h-2 w-2 rounded-full bg-indigo-600 mr-3 shrink-0"></span>
                        <span class="font-semibold text-slate-900">Active Engineering:</span> We only teach production-tested code designs. [4]
                    </li>
                    <li class="flex items-center">
                        <span class="h-2 w-2 rounded-full bg-indigo-600 mr-3 shrink-0"></span>
                        <span class="font-semibold text-slate-900">Bite-sized Execution:</span> Highly actionable modules over heavy lectures. [3]
                    </li>
                    <li class="flex items-center">
                        <span class="h-2 w-2 rounded-full bg-indigo-600 mr-3 shrink-0"></span>
                        <span class="font-semibold text-slate-900">Open Community:</span> Continuous peer-review and active mentoring. [4]
                    </li>
                </ul>
            </div>
            <div class="border-t border-slate-200 pt-6 mt-8">
                <p class="text-xs text-slate-400 leading-relaxed italic">
                    "DevPulse isn't just an academy; it is an active collaborative launchpad for serious software craftspeople."
                </p>
                <p class="text-xs font-semibold text-slate-700 mt-2">
                    — The DevPulse Faculty Team
                </p>
            </div>
        </div>
    </div>

    <div class="border-t border-slate-200 pt-12">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h3 class="text-2xl font-bold text-slate-900">DevPulse by the Numbers</h3>
            <p class="text-sm text-slate-500 mt-1">
                Our active global metrics reflect the pulse of our growing developer ecosystem. [2]
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            @foreach($stats as $stat)
                <x-card class="text-center py-8 hover:border-indigo-300 hover:shadow-md transition-all">
                    <div class="text-4xl font-extrabold text-indigo-600 mb-2">
                        {{ $stat['value'] }}
                    </div>
                    <div class="text-sm font-semibold text-slate-500 tracking-wide uppercase">
                        {{ $stat['label'] }}
                    </div>
                </x-card>
            @endforeach
        </div>
    </div>
</x-layout>
