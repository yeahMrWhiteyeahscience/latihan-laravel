<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/students/store') }}" method="post">
        @csrf
        <label for="nis">Nis </label><br>
        <input type="text" name="nis" id="nis"><br>
        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="gender" id="laki-laki" value="laki-laki">
        <label for="laki-laki">Laki-Laki</label>
        <input type="radio" name="gender" id="prm" value="prm">
        <label for="prm">Perempuan</label><br>
        <label for="religion">Agama</label><br>
        <input type="text" name="religion" id="religion"><br>
        <label for="birth_day">Tanggal Lahir</label><br>
        <input type="date" name="birth_day" id="birth_day"><br>
        <label for="class">Nama Kelas</label><br>
        <input type="text" name="class" id="class"><br>
        <label for="address">Alamat</label><br>
        <textarea name="address" class="address" cols="30" row="6"></textarea><br>
        <button type="submit">Simpan</button>
        <br>
    </form>
</body>
</html>
