<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/style.css">
    <title>Inspection</title>
    <style>
        .mt-3 {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #00BF63;
            color: #fff;
        }

        .active-button {
            background-color: #007BFF;
            color: #fff;
        }

        .content {
            display: none;
            margin-top: 10px;
        }

        .active-content {
            display: block;
        }

        .form-table {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .form-table label {
            margin-bottom: 0;
        }

        .form-table input {
            width: 150px;
            padding: 8px;
            margin-right: 10px;
        }

        input[type="checkbox"] {
            margin: 0;
            display: block;
            margin: auto;
            /* Menempatkan checkbox di tengah */
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#"><b>
                    <h2>Inspection</h2>
                </b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inspection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sustainability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data availability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Regulation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content operasional standars-->

    <div class="container mt-3 ms-5 rounded" style="background-color: #A7E58D; height: auto; width: auto; display: inline-block">
        <h5 class="p-2">Operational Standards</h5>
    </div>

    <!-- end content operasional standars-->

    <!-- content airside area -->

    <div class="mt-3" style="background-color: #A7E58D; width: 100%; text-align: center; padding: 20px 0;  display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; margin: auto;">Airside Area</h2>
        <a href="reporting.php" class="btn btn-primary me-3">Reporting</a>
    </div>

    <!-- end content airside area -->

    <!-- button content -->
    <div class="mt-3" style="width: 100%; display: flex; justify-content: space-between;">
        <button class="btn btn-primary ms-4" onclick="toggleContent('runwayContent', this)">
            <h4>Runway</h4>
        </button>
        <button class="btn btn-primary" onclick="toggleContent('taxiwayContent', this)">
            <h4>Taxiway</h4>
        </button>
        <button class="btn btn-primary me-4" onclick="toggleContent('apronContent', this)">
            <h4>Apron</h4>
        </button>
    </div>
    <!-- end button content -->

    <!-- content runway-->
    <div id="runwayContent" class="content active-content mt-4">
        <form action="functions.php" id="runwayForm" method="POST" enctype="multipart/form-data">
            <h5 class="ms-5">Runway</h5>
            <div class="form-table">
                <div class="ms-5">
                    <label for="datepicker" class="form-label mb-3">Tanggal:</label>
                    <input type="date" id="datepicker" name="datepicker" class="form-control">
                </div>
                <div class="me-5">
                    <label for="timepicker" class="form-label mb-3">Waktu:</label>
                    <input type="time" id="timepicker" name="timepicker" class="form-control">
                </div>
            </div>
            <div class="row m-4">
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <h5 class="me-3">Area Runway</h5>
                        <select class="form-select" id="kondisipermukaan" name="area" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="13">13</option>
                            <option value="31">31</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="kondisipermukaan">Kondisi Permukaan</label>
                        <select class="form-select" id="kondisipermukaan" name="kondisipermukaan" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="marka">Marka</label>
                        <select class="form-select" id="marka" name="marka" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="fod">FOD</label>
                        <select class="form-select" id="fod" name="fod" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="rubberdeposit">Rubber Deposit</label>
                        <select class="form-select" id="marka" name="rubber" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Tipis">Tipis</option>
                            <option value="Tebal">Tebal</option>
                        </select>
                    </div>

                </div>
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="obstacle">Obstacle</label>
                        <select class="form-select" id="marka" name="obstacle" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="birdstrike">Bird Strike / Wild Animal</label>
                        <select class="form-select" id="marka" name="bird" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="pagar">Pagar Perimeter</label>
                        <select class="form-select" id="marka" name="pagar" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- bagian upload -->
            <div class="ms-4">
                <label class="mb-2"><b>Upload Foto</b></label>
                <input type="file" class="form-control" name="gambar" id="inputGroupFile01" style="width: 50%;">
            </div>
            <!-- akhir bagian upload -->

            <!-- awal textarea -->
            <div class="form-floating mt-3 ms-4">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="catatan" style="height: 100px; width: 50%;"></textarea>
                <label for="floatingTextarea2">Catatan</label>
            </div>
            <!-- akhir textarea -->

            <!-- hasil inpeksi -->
            <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                <label class="input-group-text" for="inputGroupSelect01">Runway</label>
                <select class="form-select" id="inputGroupSelect01" name="runway" style="width: 50%;">
                    <option selected disabled>Choose...</option>
                    <option value="1">Serviceable</option>
                    <option value="2">Unserviceable</option>
                </select>
            </div>

            <table class="table table-bordered m-4" style="width: 50%;">
                <tr>
                    <td></td>
                    <td>INSPEKTOR</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input class="form-control" type="text" name="inspektor"></td>
                </tr>
            </table>


            <button type="submit" name="tambah_runway" class="btn btn-secondary ms-4">
                <h5>Submit</h5>
            </button>
        </form>
    </div>
    <!-- end content runway -->

    <!-- taxiway -->
    <div id="taxiwayContent" class="content">
        <form action="functions.php" id="taxiwayForm" method="POST" enctype="multipart/form-data">
            <h5 class="ms-5">Taxiway</h5>
            <div class="form-table">
                <div class="ms-5">
                    <label for="datepicker" class="form-label mb-3">Tanggal:</label>
                    <input type="date" id="datepicker" name="datepicker" class="form-control">
                </div>
                <div class="me-5">
                    <label for="timepicker" class="form-label mb-3">Waktu:</label>
                    <input type="time" id="timepicker" name="timepicker" class="form-control">
                </div>
            </div>
            <div class="row m-4">
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <h5 class="me-3">Area Taxiway</h5>
                        <select class="form-select" id="kondisipermukaan" name="area" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="13">F</option>
                            <option value="31">G</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="kondisipermukaan">Kondisi Permukaan</label>
                        <select class="form-select" id="kondisipermukaan" name="kondisipermukaan" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="marka">Marka</label>
                        <select class="form-select" id="marka" name="marka" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="fod">FOD</label>
                        <select class="form-select" id="fod" name="fod" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="rubberdeposit">Rubber Deposit</label>
                        <select class="form-select" id="marka" name="rubber" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Tipis">Tipis</option>
                            <option value="Tebal">Tebal</option>
                        </select>
                    </div>

                </div>
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="obstacle">Obstacle</label>
                        <select class="form-select" id="marka" name="obstacle" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="birdstrike">Bird Strike / Wild Animal</label>
                        <select class="form-select" id="marka" name="bird" style="width: 50%;">
                            <option selected></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="pagar">Pagar Perimeter</label>
                        <select class="form-select" id="marka" name="pagar" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- upload foto -->
            <div class="ms-4">
                <label class="mb-2"><b>Upload Foto Taxiway G</b></label>
                <input type="file" class="form-control" name="gambar1" id="inputGroupFile01" style="width: 50%;">
            </div>
            <div class="ms-4">
                <label class="mb-2"><b>Upload Foto Taxiway F</b></label>
                <input type="file" class="form-control" name="gambar2" id="inputGroupFile01" style="width: 50%;">
            </div>
            <!-- end upload -->

            <!-- start catatan -->
            <div class="form-floating mt-3 ms-4 mb-3">
                <textarea class="form-control" name="catatan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width: 50%;"></textarea>
                <label for="floatingTextarea2">Catatan</label>
            </div>
            <!-- end catatan -->

            <!-- hasil inpeksi taxiway -->
            <div class="ms-4">
                <label class="mb-2"><b>Hasil Inpeksi Taxiway</b></label>
            </div>
            <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                <label class="input-group-text" for="inputGroupSelect01">Taxiway</label>
                <select class="form-select" name="taxiway" id="inputGroupSelect01" style="width: 50%;">
                    <option selected disabled>Choose...</option>
                    <option value="1">Serviceable</option>
                    <option value="2">Unserviceable</option>
                </select>
            </div>
            <!-- end inpeksi taxiway -->

            <table class="table table-bordered m-4" style="width: 50%;">
                <tr>
                    <td></td>
                    <td>INSPEKTOR</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="inspector"></td>
                </tr>
            </table>


            <button type="submit" name="tambah_taxiway" class="btn btn-secondary ms-4">
                <h5>Submit</h5>
            </button>
        </form>
    </div>

    <div id="apronContent" class="content">
        <form action="functions.php" id="apronForm" method="POST" enctype="multipart/form-data">
            <h5 class="ms-5">Apron</h5>
            <div class="form-table">
                <div class="ms-5">
                    <label for="datepicker" class="form-label mb-3">Tanggal:</label>
                    <input type="date" id="datepicker" name="datepicker" class="form-control">
                </div>
                <div class="me-5">
                    <label for="timepicker" class="form-label mb-3">Waktu:</label>
                    <input type="time" id="timepicker" name="timepicker" class="form-control">
                </div>
            </div>
            <div class="row m-4">
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <h5 class="me-3">Area Apron</h5>
                        <select class="form-select" id="kondisipermukaan" name="area" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="13">F</option>
                            <option value="31">G</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="kondisipermukaan">Kondisi Permukaan</label>
                        <select class="form-select" id="kondisipermukaan" name="kondisipermukaan" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="marka">Marka</label>
                        <select class="form-select" id="marka" name="marka" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="fod">FOD</label>
                        <select class="form-select" id="fod" name="fod" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="rubberdeposit">Rubber Deposit</label>
                        <select class="form-select" id="marka" name="rubber" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Tipis">Tipis</option>
                            <option value="Tebal">Tebal</option>
                        </select>
                    </div>

                </div>
                <div class="col-6">
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="obstacle">Obstacle</label>
                        <select class="form-select" id="marka" name="obstacle" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="birdstrike">Bird Strike / Wild Animal</label>
                        <select class="form-select" id="marka" name="bird" style="width: 50%;">
                            <option selected></option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="pagar">Pagar Perimeter</label>
                        <select class="form-select" id="marka" name="pagar" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- upload foto -->
            <div class="ms-4">
                <label class="mb-2"><b>Upload Foto</b></label>
                <input type="file" class="form-control" name="gambar4" id="inputGroupFile01" style="width: 50%;">
            </div>
            <!-- end upload -->

            <!-- start catatan -->
            <div class="form-floating mt-3 ms-4 mb-3">
                <textarea class="form-control" name="catatan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width: 50%;"></textarea>
                <label for="floatingTextarea2">Catatan</label>
            </div>
            <!-- end catatan -->

            <!-- hasil inpeksi taxiway -->
            <div class="ms-4">
                <label class="mb-2"><b>Hasil Inpeksi</b></label>
            </div>
            <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                <label class="input-group-text" for="inputGroupSelect01">Apron</label>
                <select class="form-select" id="inputGroupSelect01" name="apron" style="width: 50%;">
                    <option selected disabled>Choose...</option>
                    <option value="1">Serviceable</option>
                    <option value="2">Unserviceable</option>
                </select>
            </div>
            <!-- end inpeksi taxiway -->

            <table class="table table-bordered m-4" style="width: 50%;">
                <tr>
                    <td></td>
                    <td>INSPEKTOR</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="inspektor"></td>
                </tr>
            </table>


            <button type="submit" name="tambah_apron" class="btn btn-secondary ms-4">
                <h5>Submit</h5>
            </button>
        </form>
    </div>
    </div>
    <!-- end content -->

    <script>
        // Menetapkan konten Runway sebagai konten default
        document.getElementById('runwayContent').classList.add('active-content');
        document.querySelector('.btn.ms-4').classList.add('active-button');

        function toggleContent(contentId, button) {
            // Menyembunyikan semua konten
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.classList.remove('active-content');
            });

            // Menampilkan hanya konten yang sesuai dengan tombol yang diklik
            var activeContent = document.getElementById(contentId);
            activeContent.classList.add('active-content');

            // Menghapus kelas active-button dari semua tombol
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function(btn) {
                btn.classList.remove('active-button');
            });

            // Menambahkan kelas active-button hanya pada tombol yang diklik
            button.classList.add('active-button');
        }
    </script>
</body>

</html>