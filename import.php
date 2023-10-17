<?php
require_once 'vendor/autoload.php';

$conn = mysqli_connect("localhost","root","","emonev");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if (isset($_POST['submit_urusan'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                if (!empty($sheetData[$i][0]) && empty($sheetData[$i][1])) {
                    $urusan = $sheetData[$i][0];
                    $nomenklatur = $sheetData[$i][5];
                    $sql = "INSERT INTO urusan VALUES('', '$urusan', '$nomenklatur')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}

if (isset($_POST['submit_bidang_urusan'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                if (!empty($sheetData[$i][0]) && !empty($sheetData[$i][1]) && empty($sheetData[$i][2])) {
                    $bidang_urusan = $sheetData[$i][1];
                    $nomenklatur = $sheetData[$i][5];
                    $sql = "INSERT INTO bidang_urusan VALUES('', '$bidang_urusan', '$nomenklatur')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}

if (isset($_POST['submit_program'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                if (!empty($sheetData[$i][0]) && !empty($sheetData[$i][1]) && !empty($sheetData[$i][2]) && empty($sheetData[$i][3])) {
                    $program = $sheetData[$i][2];
                    $nomenklatur = $sheetData[$i][5];
                    $sql = "INSERT INTO program VALUES('', '$program', '$nomenklatur')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}

if (isset($_POST['submit_kegiatan'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                if (!empty($sheetData[$i][0]) && !empty($sheetData[$i][1]) && !empty($sheetData[$i][2]) && !empty($sheetData[$i][3]) && empty($sheetData[$i][4])) {
                    $kegiatan = $sheetData[$i][3];
                    $nomenklatur = $sheetData[$i][5];
                    $sql = "INSERT INTO kegiatan VALUES('', '$kegiatan', '$nomenklatur')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}

if (isset($_POST['submit'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                if (!empty($sheetData[$i][0])) {
                    $urusan = $sheetData[$i][0];
                    $bidang_urusan = $sheetData[$i][1];
                    $program = $sheetData[$i][2];
                    $kegiatan = $sheetData[$i][3];
                    $sub_kegiatan = $sheetData[$i][4];
                    $nomenklatur = $sheetData[$i][5];
                    $kinerja = $sheetData[$i][6];
                    $indikator = $sheetData[$i][7];
                    $satuan = $sheetData[$i][8];
                    $sql = "INSERT INTO kepmendagri VALUES('', '$urusan', '$bidang_urusan', '$program', '$kegiatan', '$sub_kegiatan', '$nomenklatur', '$kinerja', '$indikator', '$satuan')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}
?>