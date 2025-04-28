<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
</head>
<body>
    <h1>Edit Peserta</h1>
    <form action="{{ route('participants.update', $participant['id']) }}" method="POST">
        @csrf
        @method('POST') <!-- Laravel menggunakan POST untuk update -->
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" value="{{ $participant['name'] }}" required><br><br>

        <label for="program">Program:</label><br>
        <input type="text" id="program" name="program" value="{{ $participant['program'] }}" required><br><br>

        <label for="payment">Pembayaran:</label><br>
        <input type="text" id="payment" name="payment" value="{{ $participant['payment'] }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $participant['email'] }}" required><br><br>

        <label for="phone">Telepon:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $participant['phone'] }}" required><br><br>

        <label for="address">Alamat:</label><br>
        <input type="text" id="address" name="address" value="{{ $participant['address'] }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ url('/participants') }}">Kembali ke Daftar Peserta</a>
</body>
</html>
