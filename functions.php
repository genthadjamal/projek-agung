<?php

// Database Connection
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_agung"

) or die("Database connection failed" . mysqli_connect_error());

mysqli_set_charset($conn, "utf8");

// Add Inspection
// if (isset($_POST['add_inspect'])) {
//     $id = $year . rand();
//     $tgl = $_POST["datepicker"];
//     $waktu = $_POST["timepicker"];
//     $area = $_POST["kondisipermukaan"];
//     $kondisi = $_POST["kondisipermukaan"];
//     $marka = $_POST["marka"];
//     $fod = $_POST["fod"];
//     $rubber = $_POST["marka"];
//     $obstacle = $_POST["marka"];
//     $bird = $_POST["marka"];
//     $pagar = $_POST["marka"];
//     $foto = "path_to_uploaded_file"; // Replace with the path to the uploaded file
//     $catatan = $_POST["floatingTextarea2"];
//     $runway = $_POST["inputGroupSelect01"];
//     $inspektor = $_POST["inspektor"];

//     $query = mysqli_query(
//         $conn,
//         "INSERT INTO inspection (id_inspect, tgl, waktu, area, kondisi, marka, fod, rubber, obstacle, bird, pagar, foto, catatan, runway, inspektor) 
//                 VALUES ('$id', '$tgl', '$waktu', '$area', '$kondisi', '$marka', '$fod', '$rubber', '$obstacle', '$bird', '$pagar', '$foto', '$catatan', '$runway', '$inspektor')"
//     );

//     if ($query > 0) {
//         echo "<script>alert('Berhasil menambahkan data')</script>";
//         echo "<script>window.location.href='inspection.php'</script>";
//     } else {
//         echo "<script>alert('Gagal menambahkan data')</script>";
//         echo "<script>window.location.href='inspection.php'</script>";
//     }

//     mysqli_close($conn);
// }

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

if (isset($_POST['report'])) {
    $id = rand(1000000, 9999999);
    $tgl = htmlspecialchars($_POST["datepicker"]);
    $categories = htmlspecialchars($_POST["categories"]);
    $loc = htmlspecialchars($_POST["loc"]);
    $report_by = htmlspecialchars($_POST["report_by"]);

    $query = "INSERT INTO report
			    VALUES
                (
                    '$id', 
                    '$tgl', 
                    '$categories', 
                    '$loc', 
                    '$report_by'
                )
			";
    mysqli_query($conn, $query);

    if ($query > 0) {
        echo " <script> alert('data berhasil ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    } else {
        echo " <script> alert('data gagal ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    }
}

if (isset($_POST['tambah_runway'])) {
    $id_inspect = rand(1000000, 9999999);
    $tgl = htmlspecialchars($_POST["datepicker"]);
    $waktu = htmlspecialchars($_POST["timepicker"]);
    $area = htmlspecialchars($_POST["area"]);
    $kondisi = htmlspecialchars($_POST["kondisipermukaan"]);
    $marka = htmlspecialchars($_POST["marka"]);
    $fod = htmlspecialchars($_POST["fod"]);
    $rubber = htmlspecialchars($_POST["rubber"]);
    $obstacle = htmlspecialchars($_POST["obstacle"]);
    $bird = htmlspecialchars($_POST["bird"]);
    $pagar = htmlspecialchars($_POST["pagar"]);
    $gambar = htmlspecialchars($_POST["gambar"]);
    $catatan = htmlspecialchars($_POST["catatan"]);
    $runway = htmlspecialchars($_POST["runway"]);
    $inspektor = htmlspecialchars($_POST["inspektor"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO inspection
				VALUES
			  ('$id_inspect', '$tgl', '$waktu', '$area', '$kondisi', '$marka', '$fod', '$rubber', '$obstacle', '$bird', '$pagar', '$gambar', '$catatan', '$runway', '$inspektor')
			";
    mysqli_query($conn, $query);

    if ($query > 0) {
        echo " <script> alert('data berhasil ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    } else {
        echo " <script> alert('data gagal ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    }
}

if (isset($_POST['tambah_taxiway'])) {
    $id_tax = rand(1000000, 9999999);
    $tgl = htmlspecialchars($_POST["datepicker"]);
    $waktu = htmlspecialchars($_POST["timepicker"]);
    $area = htmlspecialchars($_POST["area"]);
    $kondisi = htmlspecialchars($_POST["kondisipermukaan"]);
    $marka = htmlspecialchars($_POST["marka"]);
    $fod = htmlspecialchars($_POST["fod"]);
    $rubber = htmlspecialchars($_POST["rubber"]);
    $obstacle = htmlspecialchars($_POST["obstacle"]);
    $bird = htmlspecialchars($_POST["bird"]);
    $pagar = htmlspecialchars($_POST["pagar"]);
    $gambar1 = htmlspecialchars($_POST["gambar1"]);
    $gambar2 = htmlspecialchars($_POST["gambar2"]);
    $catatan = htmlspecialchars($_POST["catatan"]);
    $taxiway = htmlspecialchars($_POST["taxiway"]);
    $inspektor = htmlspecialchars($_POST["inspektor"]);

    $gambar1 = upload1();
    if (!$gambar1) {
        return false;
    }

    $gambar2 = upload2();
    if (!$gambar2) {
        return false;
    }

    $query = "INSERT INTO taxiway
				VALUES
			  (
                '$id_tax', 
                '$tgl', 
                '$waktu', 
                '$area', 
                '$kondisi', 
                '$marka', 
                '$fod', 
                '$rubber', 
                '$obstacle', 
                '$bird', 
                '$pagar', 
                '$gambar1', 
                '$gambar2', 
                '$catatan', 
                '$taxiway', 
                '$inspektor')
			";
    mysqli_query($conn, $query);

    if ($query > 0) {
        echo " <script> alert('data berhasil ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    } else {
        echo " <script> alert('data gagal ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    }
}

if (isset($_POST['tambah_apron'])) {
    $id_apron = rand(1000000, 9999999);
    $tgl = htmlspecialchars($_POST["datepicker"]);
    $waktu = htmlspecialchars($_POST["timepicker"]);
    $area = htmlspecialchars($_POST["area"]);
    $kondisi = htmlspecialchars($_POST["kondisipermukaan"]);
    $marka = htmlspecialchars($_POST["marka"]);
    $fod = htmlspecialchars($_POST["fod"]);
    $rubber = htmlspecialchars($_POST["rubber"]);
    $obstacle = htmlspecialchars($_POST["obstacle"]);
    $bird = htmlspecialchars($_POST["bird"]);
    $pagar = htmlspecialchars($_POST["pagar"]);
    $gambar4 = htmlspecialchars($_POST["gambar4"]);
    $catatan = htmlspecialchars($_POST["catatan"]);
    $apron = htmlspecialchars($_POST["apron"]);
    $inspektor = htmlspecialchars($_POST["inspektor"]);

    $gambar4 = upload4();
    if (!$gambar4) {
        return false;
    }

    $query = "INSERT INTO apron
				VALUES
			  (
                '$id_apron', 
                '$tgl', 
                '$waktu', 
                '$area', 
                '$kondisi', 
                '$marka', 
                '$fod', 
                '$rubber', 
                '$obstacle', 
                '$bird', 
                '$pagar', 
                '$gambar4', 
                '$catatan', 
                '$apron', 
                '$inspektor'
                )
			";
    mysqli_query($conn, $query);

    if ($query > 0) {
        echo " <script> alert('data berhasil ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    } else {
        echo " <script> alert('data gagal ditambahkan!'); </script> ";
        echo "<script> location='inspection.php'; </script>";
    }
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";

        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function upload1()
{

    $namaFile = $_FILES['gambar1']['name'];
    $ukuranFile = $_FILES['gambar1']['size'];
    $error = $_FILES['gambar1']['error'];
    $tmpName = $_FILES['gambar1']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img_run/' . $namaFileBaru);

    return $namaFileBaru;
}

function upload2()
{

    $namaFile = $_FILES['gambar2']['name'];
    $ukuranFile = $_FILES['gambar2']['size'];
    $error = $_FILES['gambar2']['error'];
    $tmpName = $_FILES['gambar2']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img_tax/' . $namaFileBaru);

    return $namaFileBaru;
}

function upload4()
{

    $namaFile = $_FILES['gambar4']['name'];
    $ukuranFile = $_FILES['gambar4']['size'];
    $error = $_FILES['gambar4']['error'];
    $tmpName = $_FILES['gambar4']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";

        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        echo "<script> location='inspection.php'; </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img_apr/' . $namaFileBaru);

    return $namaFileBaru;
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE mahasiswa SET
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
