<h2>Daftar Staff Admin</h2>

<a href="{{ route('admin.create') }}">Tambah Admin Baru</a>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Role</th>
    </tr>

    @foreach ($admins as $index => $admin)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $admin->nama }}</td>
        <td>{{ $admin->email }}</td>
        <td>{{ $admin->username }}</td>
        <td>{{ $admin->role }}</td>
    </tr>
    @endforeach
</table>
