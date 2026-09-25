<x-layout>

    <!-- Order your soul. Reduce your wants. - Augustine -->
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col bg-white/70 p-5 rounded-xl gap-5">
                <h1 class="text-black text-3xl text-center font-bold mt-2">Project Bijwerken</h1>
                <div class="flex flex-col items-left">
                    <label for="title" class="p-2 font-semibold text-l">Titel: </label>
                    <input type="text" name="title" value="{{ $project->title }}" class="rounded-2xl" placeholder="Titel van het project...">
                </div>
                <div class="flex flex-col items-left">
                    <label for="description" class="p-2 font-semibold text-l">Beschrijving: </label>
                    <textarea name="description" rows="4" class="rounded-2xl"  placeholder="Description voor het project...">{{ $project->description }} </textarea>
                </div>
                <div class="flex flex-col items-left">
                    <label class="font-semibold text-l">Geselcteerde foto:</label>
                    <br>
                    @if ($project->image)
                        <img src="{{ asset('storage/images/' . $project->image) }}" width="150">
                    @endif
                </div>
                <div class="flex flex-col items-left">
                    <label for="image" class="p-2 font-semibold text-l">Nieuwe foto: </label>
                    <input type="file" name="image">
                </div>
                <div class="flex flex-col items-left">
                    <label for="category" class="p-2 font-semibold text-l">Categorie:</label>
                    <select name="category" class="rounded-2xl">
                        <option value="web"
                            {{ old('category', $project->category ?? '') == 'web' ? 'selected' : '' }}>
                            Web
                            development</option>
                        <option value="app"
                            {{ old('category', $project->category ?? '') == 'app' ? 'selected' : '' }}>
                            Applications</option>
                        <option value="uiux"
                            {{ old('category', $project->category ?? '') == 'uiux' ? 'selected' : '' }}>
                            UI/UX
                        </option>
                    </select>
                </div>
                <input type="submit" value="Opslaan" class="bg-black/90 text-white p-3 rounded-3xl">
            </div>
        </form>
    </div>
</x-layout>
