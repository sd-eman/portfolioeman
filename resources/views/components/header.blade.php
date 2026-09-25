<header class="bg-white/70 m-10 p-5 rounded-3xl">
    {{-- <div class="flex flex-row justify-evenly font-serif items-center"> --}}
    <div class="grid grid-cols-2 grid-rows-1 gap-6 items-center">
        <img src="{{ asset('images/E.png') }}" alt="My Image" class="min-h-[50px] max-h-[80px] w-auto object-cover rounded-3xl border-amber-700 mix-blend-multiply">
        <div>
            <nav class="flex justify-evenly items-center text-xl text-center">
                <a href="{{ route('homepage') }}" class="bg-black/90 text-white p-3 rounded-3xl">About</a>
                <a href="{{ route('projects.index') }}" class="bg-black/90 text-white p-3 rounded-3xl">Projecten</a>
                <a href="{{ route('contact') }}" class="bg-black/90 text-white p-3 rounded-3xl">Contact</a>
            </nav>
        </div>
    </div>
</header>
{{ $slot }}
