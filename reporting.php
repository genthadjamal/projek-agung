<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/style.css">
    <title>Home</title>
</head>

<body>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inspection.php">Inspection</a>
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

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ms-4 mt-3">
                    <h3>Report</h3>
                </div>
                <form action="functions.php" method="POST" enctype="multipart/form-data">
                    <div class="ms-4">
                        <label for="datepicker" class="form-label">Tanggal:</label>
                        <input type="date" class="form-control" id="datepicker" name="datepicker" style="width: 50%;">
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                        <select class="form-select" id="inputGroupSelect01" name="categories" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="fod">FOD</option>
                            <option value="case">Case</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 mt-3 ms-4" style="width: 50%;">
                        <label class="input-group-text" for="inputGroupSelect01">Location</label>
                        <select class="form-select" id="inputGroupSelect01" name="loc" style="width: 50%;">
                            <option selected disabled></option>
                            <option value="runway">Runway </option>
                            <option value="taxiway_g">Taxiway G</option>
                            <option value="taxiway_f">Taxiway F</option>
                            <option value="apron">Apron</option>

                        </select>
                    </div>
                    <div class="ms-4">
                        <label for="">Report By</label>
                    </div>
                    <div class="ms-4 mt-3">
                        <input class="form-control" name="report_by" type="text" style="width: 50%;">
                    </div>
                    <div class="ms-4 mt-3">
                        <button type="submit" name="report" class="btn btn-secondary ms-4">
                            <h5>Report</h5>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>