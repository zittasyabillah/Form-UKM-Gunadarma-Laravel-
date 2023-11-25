<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
</head>
<body>
    <h1>Data Mahasiswa </h1>

    <?php
include 'connection.php';

    // Query untuk mengambil data mahasiswa
    $query = "SELECT * FROM data_mahasiswa ORDER BY nama ASC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Tampilkan data dalam bentuk tabel
        echo "<table border='1'>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No WhatsApp</th>
                    <th>Alamat</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Region</th>
                    <th>Tingkat</th>
                    <th>UK</th>
                    <th>KRS</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['npm']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jenis_kelamin']}</td>
                    <td>{$row['no_hp']}</td>
                    <td>{$row['alamat']}</td>
                    <td>{$row['fakultas']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>{$row['region']}</td>
                    <td>{$row['tingkat']}</td>
                    <td>{$row['uk']}</td>
                    <td><a href='{$row['file_krs']}' target='_blank'>Lihat KRS</a></td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data mahasiswa.";
    }

    // Tutup koneksi database
    $conn->close();
    ?>
</body>
</html>
