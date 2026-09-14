<x-layout>
    <div>
        <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
        <div>
            <a href="{{ route('projects.create') }}"> + Project toevoegen</a>
            <div>
                @foreach ($projects as $project)
                    <div>
                        <img src="{{ asset('storage/images/' . $project->image) }}" width="200">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>

                        <a href="{{ route('projects.edit', $project->id) }}" class="text-black">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
