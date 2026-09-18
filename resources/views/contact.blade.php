<x-layout title="Contact">
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <div class="flex flex-col bg-white/70 p-5 rounded-xl gap-5">
                <h1 class="text-black text-3xl text-center font-bold mt-2">Contact Formulier</h1>
                <div class="flex flex-col items-left">
                    <label for="name" class="p-2 font-semibold text-l">Naam:</label>
                    <input class="rounded-2xl" type="text" name="name" required>
                </div>
                <div class="flex flex-col items-left">
                    <label for="email" class="p-2 font-semibold text-l">Email:</label>
                    <input class="rounded-2xl" type="email" name="email" required>
                </div>
                <div class="flex items-left flex-col">
                    <label for="content" class="p-2 font-semibold text-l">Bericht:</label>
                    <textarea class="rounded-2xl" name="content" rows="5" cols="40" placeholder="Typ hier je tekst..." required></textarea>
                </div>
                <button type="submit" class="bg-black/90 text-white p-3 rounded-3xl">Opslaan</button>

            </div>
        </form>

    </div>
</x-layout>
