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
                <div class="flex flex-col bg-white/70 p-5 rounded-xl gap-5">

                    <h1 class="text-black text-3xl text-center font-bold mt-2">Nieuwe Project</h1>
<div class="flex flex-col items-left">
                    <label for="title" class="p-2 font-semibold text-l">Title: </label>
                    <input type="text" name="title" class="rounded-2xl">
                    </div>
                    <div class="flex flex-col items-left">
                    <label for="description" class="p-2 font-semibold text-l">Description: </label>
                    <textarea name="description" rows="4" class="rounded-2xl"></textarea>
                    </div>
                    <div class="flex flex-col items-left">
                    <label for="image" class="p-2 font-semibold text-l">Image: </label>
                    <input type="file" name="image">
                    </div>
                    <div class="flex flex-col items-left">
                    <label for="category" class="p-2 font-semibold text-l">Category:</label>
                    <select name="category" class="rounded-2xl">
                        <option value="web"
                            {{ old('category', $project->category ?? '') == 'web' ? 'selected' : '' }}>
                            Web development</option>
                        <option value="app"
                            {{ old('category', $project->category ?? '') == 'app' ? 'selected' : '' }}>
                            Applications</option>
                        <option value="uiux"
                            {{ old('category', $project->category ?? '') == 'uiux' ? 'selected' : '' }}>
                            UI/UX</option>
                    </select>
                    </div>
                    <input type="submit" class="bg-black/90 text-white p-3 rounded-3xl" value="Save">
                </div>
            </form>

        </div>
    </div>
</x-layout>
