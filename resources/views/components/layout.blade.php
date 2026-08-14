<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevPulse Developer Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex flex-col justify-between">
    <nav class="bg-slate-900 p-5 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div>
                    DevPulse
                </div>
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <span class="text-xl font-bold bg-indigo-600 text-white px-3 py-1 rounded shadow-sm">DevPulse</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="/" class="hover:bg-slate-800 px-3 py-2 rounded text-sm font-medium transition">Home</a>
                    <a href="/workshops" class="hover:bg-slate-800 px-3 py-2 rounded text-sm font-medium transition">Workshops</a>
                    <a href="/about" class="hover:bg-slate-800 px-3 py-2 rounded text-sm font-medium transition">About</a>
                    <a href="/contact" class="hover:bg-slate-800 px-3 py-2 rounded text-sm font-medium transition">Contact</a>
                </div>
                <div>
                    <a href="/workshops" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium shadow-sm transition">
                        Explore Workshops
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-white border-b border-slate-200 py-6 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                {{ $heading ?? 'DevPulse Portal' }}
            </h1>
        </div>
    </header>
     <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{ $slot }}
    </main>
    <footer class="bg-slate-900 text-slate-400 py-6 mt-12 border-t border-slate-800 text-center text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p>&copy; {{ date('Y') }} DevPulse Developer Portal. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>