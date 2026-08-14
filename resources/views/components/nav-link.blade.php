@props(['active' => false])
<a {{ $attributes }} 
   class="{{ $active ? 'bg-indigo-700 text-white font-semibold' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-150"
   aria-current="{{ $active ? 'page' : 'false' }}">
   {{ $slot }}
</a>
