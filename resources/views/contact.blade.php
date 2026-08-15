<x-layout>
    <x-slot:heading>
        Contact Our Support Team
    </x-slot:heading>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1 space-y-6">
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-slate-900">Get in Touch</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Have questions about our syllabus, registration process, or custom team packages? Reach out through any of our channels.
                </p>
            </div>

            <div class="space-y-4">
                @foreach($contacts as $contact)
                    <x-card class="border-l-4 border-l-indigo-600">
                        <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block mb-1">
                            {{ $contact['method'] }}
                        </span>
                        <p class="text-base font-bold text-slate-900 mb-1">
                            {{ $contact['detail'] }}
                        </p>
                        <span class="text-xs text-slate-500">
                            {{ $contact['availability'] }}
                        </span>
                    </x-card>
                @endforeach
            </div>
        </div>

        <div class="lg:col-span-2">
            <x-card class="p-8">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Send an Inquiry</h3>
                
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Mentorship Note: Excellent job! This front-end form layout is fully interactive and ready to connect to a backend Controller later in your Laravel journey.');" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                            <input type="text" name="name" id="name" required placeholder="e.g. Jane Doe"
                                   class="w-full rounded-md border border-slate-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition duration-150">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                            <input type="email" name="email" id="email" required placeholder="you@example.com"
                                   class="w-full rounded-md border border-slate-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition duration-150">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Inquiry Subject</label>
                        <select name="subject" id="subject" class="w-full rounded-md border border-slate-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none bg-white transition duration-150">
                            <option value="general">General Support</option>
                            <option value="enrollment">Workshop Registration</option>
                            <option value="corporate">Enterprise Training</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Your Message</label>
                        <textarea name="message" id="message" rows="5" required placeholder="Tell us how we can help you build better..."
                                  class="w-full rounded-md border border-slate-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition duration-150"></textarea>
                    </div>

                    <div class="flex justify-end pt-2">
                        <x-button type="submit" class="w-full md:w-auto">
                            Submit Message
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-layout>
