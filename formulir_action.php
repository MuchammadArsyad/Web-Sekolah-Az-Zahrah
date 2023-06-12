<?php
    include 'lib/koneksi.php';
    $conn = new PDO("mysql:host=localhost;dbname=azzahra", "root", "");
 
    if (isset($_POST["type"])) {
        if ($_POST["type"] == "bpkadData") {
            $query = "SELECT * FROM opd ORDER BY nama ASC";
            $statement = $koneksi->prepare($query);
            $statement->execute();
            $data = $statement->fetchAll();
            foreach ($data as $row) {
                $output[] = [
                    'id' => $row["id"],
                    'name' => $row["nama"],
                ];
            }
            echo json_encode($output);
        }
    }

    $surat_dari = $_POST['suratdari'];
    $no_surat = $_POST['nosurat'];
    $tanggal_surat = $_POST['tanggalsurat'];
    $diterima_tanggal = $_POST['diterimatanggal'];
    $no_agenda = $_POST['noagenda'];
    $sifat = $_POST['sifat'];
    $sifat2 = $_POST['sifat2'];
    $sifatfix = "";
    $hal = $_POST['hal'];
    $sifat_hal2c = $_POST['sifathal2c'];
    $sifat_hal2 = $_POST['sifathal2'];
    $sifat_hal_fix = "";

    if(!empty($_POST['sifathal'])) {
        foreach($_POST['sifathal'] as $check) {
            if ($sifat_hal_fix == ""){
                $sifat_hal_fix = $check;
            } else {
                $sifat_hal_fix = $sifat_hal_fix . ", " . $check;
            }
        }
    }

    if($sifat == "lain"){
        $sifatfix = $sifat2;
    } else {
        $sifatfix = $sifat;
    }

    if($sifat_hal2c == "lain"){
        if ($sifat_hal_fix == ""){
            $sifat_hal_fix = $sifat_hal2;    
        } else {
            $sifat_hal_fix = $sifat_hal_fix . ", " . $sifat_hal2;
        }
    }

    // echo $surat_dari."<br>";
    // echo $no_surat."<br>";
    // echo $tanggal_surat."<br>";
    // echo $diterima_tanggal."<br>";
    // echo $no_agenda."<br>";
    // echo $sifatfix."<br>";
    // echo $hal."<br>";
    // echo $sifat_hal_fix."<br>";
    
    $sql = "INSERT INTO disposisi (id, suratdari, nosurat, tglsurat, tglditerima, noagenda, sifat, perihal, sifathal, diteruskan, harapan, catatan, status) VALUES ('', '$surat_dari', '$no_surat', '$tanggal_surat', '$diterima_tanggal', '$no_agenda', '$sifatfix', '$hal', '$sifat_hal_fix', '', '', '', 'Di Kabid')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Input berhasil');window.location = '../../index.php?module=surat_masuk';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
?>