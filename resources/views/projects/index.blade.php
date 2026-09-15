<x-layout title="Projects">
    <h1>Projects</h1>
    <div>
        <a href="{{ route('projects.create') }}"> + Project toevoegen</a>
        <div>
            @foreach ($projects as $project)
                <div>
                    <img src="{{ asset('storage/images/' . $project->image) }}" width="200">
                    <a href="{{ route('projects.show', $project->id) }}">
                        <h3>{{ $project->title }}</h3>
                    </a>
                    <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
