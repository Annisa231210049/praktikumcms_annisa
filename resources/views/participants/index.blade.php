<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .search-form {
            margin-bottom: 20px;
        }
        .search-form input {
            padding: 8px;
        }
        .search-form button {
            padding: 8px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Daftar Peserta</h1>

        <!-- Form Pencarian Peserta (menggunakan data dummy) -->
        <form action="{{ route('findParticipant') }}" method="POST" class="search-form">
            @csrf
            <input type="text" name="name" placeholder="Masukkan nama peserta" required>
            <button type="submit">Cari Peserta</button>
        </form>

        <!-- Tabel Daftar Peserta -->
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Program</th>
                    <th>Pembayaran</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participants as $participant)
                <tr>
                    <td>{{ $participant['name'] }}</td>
                    <td>{{ $participant['program'] }}</td>
                    <td>{{ $participant['payment'] }}</td>
                    <td>{{ $participant['email'] }}</td>
                    <td>{{ $participant['phone'] }}</td>
                    <td>{{ $participant['address'] }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('participants.edit', $participant['id']) }}">Edit</a>
                        
                        <!-- Tombol Delete -->
                        <form action="{{ route('participants.destroy', $participant['id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peserta ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
