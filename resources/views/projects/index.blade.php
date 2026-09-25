<x-layout title="Projects">
    <div class="mr-12 ml-12">
        <div class="flex flex-row justify-between mb-5">
            <h2 class="text-white/80 text-4xl text-center font-bold mt-2 mb-4">Projecten</h2>
            <a href="{{ route('projects.create') }}"
                class="self-center text-black/100 font-semibold text-l bg-white/80 text-rose-950 p-3 rounded-3xl">+
                Project
                toevoegen</a>
        </div>

        <div class="flex gap-4 mb-6">
            <a href="{{ route('projects.index') }}" class="{{ !$category ? 'text-white/60' : '' }} text-white">All</a>
            <a href="{{ route('projects.index', ['category' => 'app']) }}"
                class="{{ $category == 'app' ? 'text-white/60' : '' }} text-white">Applications</a>
            <a href="{{ route('projects.index', ['category' => 'web']) }}"
                class="{{ $category == 'web' ? 'text-white/60' : '' }} text-white">Web development</a>
            <a href="{{ route('projects.index', ['category' => 'uiux']) }}"
                class="{{ $category == 'uiux' ? 'text-white/60' : '' }} text-white">UI/UX</a>
        </div>

        <div class="grid grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="bg-white/70 rounded-2xl p-4">

                    <img src="{{ asset('storage/images/' . $project->image) }}" class="rounded-lg mb-2">
                    <a href="{{ route('projects.show' , $project->id)}}">show </a>
                        <h3 class="font-bold">{{ $project->title }}</h3>

                    <p class="text-sm text-gray-500">{{ ucfirst($project->category) }}</p>

                    <div class="flex flex-row justify-evenly">
                        <a href="{{ route('projects.edit', $project->id) }}"
                            class="bg-black/90 text-white pr-5 pl-5 pt-2 pb-2 rounded-xl">Bijwerken</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                            id="form-{{ $project->id }}">
                            @csrf
                            @method('delete')
                            <button type="button" onclick="checkDelete({{ $project->id }}, '{{ $project->title }}')"
                                class="bg-rose-950 text-white pr-5 pl-5 pt-2 pb-2 rounded-xl">Verwijderen</button>
                    </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function checkDelete(projectId, projectName) {
            var answer = prompt('Typ de naam van het project om te bevestigen:');

            if (answer == projectName) {
                document.getElementById('form-' + projectId).submit();
            } else {
                alert('Naam klopt niet, project is niet verwijderd.');
            }
        }
    </script>
</x-layout>
