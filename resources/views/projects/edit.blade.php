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
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{ $project->title }}">
            <br>
            <label for="description">Description: </label>
            <textarea name="description" rows="4">{{ $project->description }}</textarea>
            <br>
            <label>Current image:</label>
            <br>
            @if ($project->image)
                <img src="{{ asset('storage/images/' . $project->image) }}" width="150">
            @endif
            <br>

            <label for="image">Change image: </label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Save">

        </form>
    </div>
</x-layout>
