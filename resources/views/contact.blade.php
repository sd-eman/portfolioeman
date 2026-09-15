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
            <div class="flex flex-col bg-white/70 p-5 rounded-3xl gap-5">
                <div class="flex items-center justify-around">
                    <label class="" for="name">Naam:</label>
                    <input class="rounded-2xl" type="text" name="name" required>
                </div>
                <div class="flex items-center gap-5">
                    <label for="email">Email:</label>
                    <input class="rounded-2xl" type="email" name="email" required>
                </div>
                <div class="flex items-center gap-5">
                    <label for="content">Bericht:</label>
                    <textarea class="rounded-2xl" name="content" rows="5" cols="40" placeholder="Typ hier je tekst..." required></textarea>
                </div>
                <button type="submit">Opslaan</button>

            </div>
        </form>

    </div>
</x-layout>
