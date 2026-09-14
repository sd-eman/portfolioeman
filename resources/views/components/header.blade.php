<header class="bg-white/70 m-10 p-5 rounded-xl">
    <div class="flex flex-row justify-evenly font-serif items-center">
        <h1 class="flex flex-start text-6xl text-left pr-50px">Eman Irfan</h1>
        <div>
            <nav class="flex gap-16 item-s-center text-xl text-center">
                <a href="#" class="bg-black/90 text-white p-3 rounded-3xl">About</a>
                <a href="{{ route('projects.index') }}" class="bg-black/90 text-white p-3 rounded-3xl">Projects</a>
                <a href="#" class="bg-black/90 text-white p-3 rounded-3xl">Contact</a>
            </nav>
        </div>
    </div>
</header>
{{ $slot }}
