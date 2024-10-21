<x-app-layout title="create category">
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="title">Titel
            <input type="text" id="title" name="title"></label>
            <button type="submit">Opslaan</button>
    </form>

</x-app-layout>
