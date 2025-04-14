<h2>Masuk Sebagai Admin</h2>

<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Email: <input type="email" name="email"><br>
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Admin Role: 
    <select name="role">
    <option value="" disabled selected>Pilih Role</option>
        <option value="pendaftaran">Pendaftaran</option>
        <option value="keuangan">Keuangan</option>
        <option value="akademik">Akademik</option>
    </select><br>
    <button type="submit">Masuk</button>
</form>
