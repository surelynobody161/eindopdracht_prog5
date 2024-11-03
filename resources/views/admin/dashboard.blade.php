<h1>Admin Dashboard</h1>
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
