
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1>Admin Dashboard</h1>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach($arts as $art)
                <tr>
                    <td>{{ $art->title }}</td>
                    <td>
                        <form action="{{ route('admin.art.delete', $art->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
