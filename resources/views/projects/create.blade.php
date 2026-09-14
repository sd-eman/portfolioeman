<x-layout>
    <div>
        <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title">Title: </label>
                <input type="text" name="title">
                <br>
                <label for="description">Description: </label>
                <textarea name="description" rows="4"></textarea>
                <br>
                <label for="image">Image: </label>
                <input type="file" name="image">
                <br>
                <input type="submit" value="Save">

            </form>
        </div>
    </div>
</x-layout>
