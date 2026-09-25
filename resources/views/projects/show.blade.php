<x-layout>

    <div class="bg-white/70 rounded-2xl p-4 w-[%90]">

        <img src="{{ asset('storage/images/' . $project->image) }}" class="rounded-lg mb-2">
        <h3 class="font-bold">{{ $project->title }}</h3>

        <p class="text-sm text-gray-500">{{ ucfirst($project->category) }}</p>
        <p>{{ $project->description }}</p>

        <div class="flex flex-row justify-evenly">
            <a href="{{ route('projects.edit', $project->id) }}"
                class="bg-black/90 text-white pr-5 pl-5 pt-2 pb-2 rounded-xl">Bijwerken</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" id="form-{{ $project->id }}">
                @csrf
                @method('delete')
                <button type="button" onclick="checkDelete({{ $project->id }}, '{{ $project->title }}')"
                    class="bg-rose-950 text-white pr-5 pl-5 pt-2 pb-2 rounded-xl">Verwijderen</button>
            </form>
        </div>

</x-layout>
