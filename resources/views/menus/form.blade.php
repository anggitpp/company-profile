<html>
<head>

</head>
<body>
<form id="form" method="POST" action="">
    @csrf
    <label for="parent_id">
        Induk
    </label>
    <select name="parent_id">
    </select>
    <br>
    <label for="name">
        Nama
    </label>
    <input type="text" id="name" name="name">
    <br>
    <label for="description">
        Deskripsi
    </label>
    <textarea name="description">

    </textarea>
    <br/>
    <label for="status">Status</label>
    <input type="radio" name="status" value="0">Tidak Aktif
    <input type="radio" name="status" value="1">Aktif
    <br/>
    <input type="submit" value="Simpan">
</form>
</body>
</html>
