<!DOCTYPE html>
<html>
<head>
    <title>Detail Staff</title>
</head>
<body>
    <h1>Detail Staff</h1>

    <p><strong>Nama:</strong> {{ $staff['nama'] }}</p>
    <p><strong>Role:</strong> {{ $staff['role'] }}</p>
    <p><strong>Status:</strong> {{ $staff['status'] }}</p>

    <a href="{{ route('staff.index') }}">← Kembali ke daftar staff</a>
</body>
</html>
