<!DOCTYPE html>
<html>
<head>
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>

    <ul>
        @foreach ($staffs as $staff)
            <li>
                <a href="{{ route('staff.show', $staff['id']) }}">
                    {{ $staff['nama'] }} - {{ $staff['role'] }} ({{ $staff['status'] }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
