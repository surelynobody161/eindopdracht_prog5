<h1>User Profile</h1>
<form action="{{ route('user.profile.update') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <label>
        <input type="text" name="name" value="{{ $user->name }}">
    </label>
    <label for="email">Email:</label>
    <label>
        <input type="email" name="email" value="{{ $user->email }}">
    </label>
    <button type="submit">Update Profile</button>
</form>
