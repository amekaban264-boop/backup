<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data siswa</title>
</head>
<body>
    <h1>--- Form Data Siswa ---</h1>

    <table>
        <form action="dataSiswa.php" method="post">
            <tr>
                <th><label for="nama">Nama</label></th>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>

             <tr>
                <th><label for="jurusan">jurusan</label></th>
                <td><input type="text" id="jurusan" name="jurusan"></td>
            </tr>

             <tr>
                <th><label for="sekolah">sekolah</label></th>
                <td><input type="text" id="sekolah" name="sekolah"></td>
            </tr>

            <tr>
                <th><label for="cita-cita">cita-cita</label></th>
                <td><input type="text" id="cita-cita" name="cita-cita"></td>
            </tr>

                <td><button>save</button></td>
            </tr>
        </form>
    </table>
</body>
</html>