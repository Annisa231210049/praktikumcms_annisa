<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program List</title>
    <style> table {
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
    <h1>Daftar Program</h1>
    <table>
        <thead>
            <tr>
                <th>Program</th>
                <th>Jadwal</th>
                <th>Biaya</th>
                <th>Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $programName => $programDetails)
            <tr>
                <td>{{ $programName }}</td>
                <td>
                    @foreach ($programDetails['schedule'] as $schedule)
                        {{ $schedule['day'] }}: {{ $schedule['time'] }} (Kelas {{ $schedule['class'] }})<br>
                    @endforeach
                </td>
                <td>Rp {{ number_format($programDetails['cost'], 0, ',', '.') }}</td>
                <td>{{ $programDetails['capacity'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
