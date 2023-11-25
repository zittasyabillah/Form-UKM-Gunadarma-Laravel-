<?php

include 'connection.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];
    $fakultas = $_POST["fakultas"];
    $jurusan = $_POST["jurusan"];
    $region = $_POST["region"];
    $tingkat = $_POST["tingkat"];
    $uk = $_POST["uk"];



    // memindahkan file ke folder upload
    $target_dir = './krs';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // cek NPM harus berbeda dengan yang lain
    $cek_npm = "SELECT * FROM data_mahasiswa WHERE npm = '$npm'";
    $hasil_ceknpm = $conn->query($cek_npm);
    if ($hasil_ceknpm->num_rows > 0) {
        echo '<script>alert("NPM yang Anda masukkan sudah ada");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika NPM sudah ada
    }

    // cek nama hanya huruf
    if (!preg_match("/^[a-zA-Z .]*$/",$nama)) {
        echo '<script>alert("Nama hanya boleh mengandung huruf");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika nama tidak hanya huruf
    }

    // cek nomor HP hanya angka
    if (!ctype_digit($no_hp)) {
        echo '<script>alert("Nomor HP hanya boleh berisi angka");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika nomor HP tidak hanya angka
    }


    // cek format pdf
    if ($imageFileType != "pdf") {
        echo '<script>alert("Maaf, hanya file PDF yang diperbolehkan");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika bukan file PDF
    }

    //cek file yang ada di database
    if (file_exists($target_file)) {
        echo '<script>alert("Maaf, file sudah ada");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika file sudah ada
    }

    // cek ukuran file
    if ($_FILES["fileToUpload"]["size"] > 7000000) {
        echo '<script>alert("Maaf, file terlalu besar");window.location="index.php"</script>';
        exit; // Hentikan eksekusi jika file terlalu besar
    }



    // Upload file if everything is OK
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $sql = "INSERT INTO data_mahasiswa (npm, nama, jenis_kelamin, no_hp, alamat, fakultas, jurusan, region, tingkat, uk, file_krs)
        VALUES ('$npm', '$nama', '$jenis_kelamin','$no_hp', '$alamat', '$fakultas', '$jurusan', '$region', '$tingkat', '$uk','$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Tambah Data Berhasil");window.location="index.php"</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        var_dump($target_file); }

    // Insert data into the database
}

// Close connection
$conn->close();
?>
