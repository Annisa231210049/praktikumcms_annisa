<!DOCTYPE html>
<html>
<head>
    <title>Detail Program</title>
</head>
<body>
    <h1>Detail Program: {{ $program }}</h1>

    <p><strong>Jadwal:</strong></p>
    <ul>
        @foreach ($program['schedule'] as $schedule)
            <li>{{ $schedule['day'] }} - {{ $schedule['time'] }} (Kelas: {{ $schedule['class'] }})</li>
        @endforeach
    </ul>

    <p><strong>Biaya:</strong> Rp {{ number_format($program['cost'], 0, ',', '.') }}</p>
    <p><strong>Kapasitas:</strong> {{ $program['capacity'] }} peserta</p>

    <a href="{{ route('programs.index') }}">← Kembali ke daftar program</a>
</body>
</html>
