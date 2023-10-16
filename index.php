<!DOCTYPE html>
<html>
<head>
    <title>Excel Uploading PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Excel Upload</h1>
        <form method="POST" action="import.php" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center align-items-center">
                <div class="col-9">
                    <input type="file" name="file" class="form-control">
                </div>
            </div>
            <div class="form-group mt-2 text-center">
                <button type="submit" name="submit_urusan" class="btn btn-primary">Upload Urusan</button>
                <button type="submit" name="submit_bidang_urusan" class="btn btn-secondary">Upload Bidang Urusan</button>
                <button type="submit" name="submit_program" class="btn btn-success">Upload Program</button>
                <button type="submit" name="submit_kegiatan" class="btn btn-danger">Upload Kegiatan</button>
                <button type="submit" name="submit" class="btn btn-warning">Upload Sub Kegiatan</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>