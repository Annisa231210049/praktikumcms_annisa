<!DOCTYPE html>
<html>
<head>
    <title>Detail Peserta</title>
</head>
<body>
    <h1>Detail Peserta: {{ $participant['name'] }}</h1>

    <p><strong>Program:</strong> {{ $participant['program'] }}</p>
    <p><strong>Pembayaran:</strong> {{ $participant['payment'] }}</p>
    <p><strong>Email:</strong> {{ $participant['email'] }}</p>
    <p><strong>Telepon:</strong> {{ $participant['phone'] }}</p>
    <p><strong>Alamat:</strong> {{ $participant['address'] }}</p>

    <a href="{{ route('participants.index') }}">← Kembali ke daftar peserta</a>
</body>
</html>
