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

    $nama_lengkap = $_POST['namalengkap'];
    $nama_panggilan = $_POST['namapanggilan'];
    $nomor_induk_asal = $_POST['nomorindukasal'];
    $nisn = $_POST['nisn'];
    $ttl = $_POST['ttl'];
    $jenis_kelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $anak_ke = $_POST['anakke'];
    $status_anak_dalam_keluarga = $_POST['statusanakdalamkeluarga'];
    $alamat = $_POST['alamat'];
    $telepon_hp = $_POST['teleponhp'];
    $di_kelas = $_POST['dikelas'];
    $pada_tanggal = $_POST['padatanggal'];
    $nama_sd_mi_asal = $_POST['namasdmiasal'];
    $alamat_sekolah_asal = $_POST['alamatsekolahasal'];
    $nama_lengkap_ayah = $_POST['namalengkapayah'];
    $nama_lengkap_ibu = $_POST['namalengkapibu'];
    $alamat_ayah = $_POST['alamatayah'];
    $alamat_ibu = $_POST['alamatibu'];
    $telepon_hp_ortu = $_POST['teleponhportu'];
    $pekerjaan_ayah = $_POST['pekerjaanayah'];
    $pekerjaan_ibu = $_POST['pekerjaanibu'];
    $pendidikan_terakhir_ayah = $_POST['pendidikanterakhirayah'];
    $pendidikan_terakhir_ibu = $_POST['pendidikanterakhiribu'];
    $nama_ayah_wali = $_POST['namayahwali'];
    $nama_ibu_wali = $_POST['namaibuwali'];
    $alamat_ayah_wali = $_POST['alamatayahwali'];
    $alamat_ibu_wali = $_POST['alamatibuwali'];
    $telepon_wali = $_POST['teleponwali'];
    $pekerjaan_ayah_wali = $_POST['pekerjaanayahwali'];
    $pekerjaan_ibu_wali = $_POST['pekerjaanibuwali'];
    $pendidikan_terakhir_ayah_wali = $_POST['pendidikanterakhirayahwali'];
    $pendidikan_terakhir_ibu_wali = $_POST['pendidikanterakhiribuwali'];

    // if(!empty($_POST['sifathal'])) {
    //     foreach($_POST['sifathal'] as $check) {
    //         if ($sifat_hal_fix == ""){
    //             $sifat_hal_fix = $check;
    //         } else {
    //             $sifat_hal_fix = $sifat_hal_fix . ", " . $check;
    //         }
    //     }
    // }

    // if($sifat == "lain"){
    //     $sifatfix = $sifat2;
    // } else {
    //     $sifatfix = $sifat;
    // }

    // if($sifat_hal2c == "lain"){
    //     if ($sifat_hal_fix == ""){
    //         $sifat_hal_fix = $sifat_hal2;    
    //     } else {
    //         $sifat_hal_fix = $sifat_hal_fix . ", " . $sifat_hal2;
    //     }
    // }

    // echo $surat_dari."<br>";
    // echo $no_surat."<br>";
    // echo $tanggal_surat."<br>";
    // echo $diterima_tanggal."<br>";
    // echo $no_agenda."<br>";
    // echo $sifatfix."<br>";
    // echo $hal."<br>";
    // echo $sifat_hal_fix."<br>";
    
    // $sql = "INSERT INTO disposisi (id, suratdari, nosurat, tglsurat, tglditerima, noagenda, sifat, perihal, sifathal, diteruskan, harapan, catatan, status) VALUES ('', '$surat_dari', '$no_surat', '$tanggal_surat', '$diterima_tanggal', '$no_agenda', '$sifatfix', '$hal', '$sifat_hal_fix', '', '', '', 'Di Kabid')";
    $sql = "INSERT INTO form(id, namalengkap, namapanggilan, nomorindukasal, nisn, ttl, jeniskelamin, agama, anakke, statusanakdlmkeluarga, alamat, teleponhp, dikelas, padatanggal, namasdmiasal, alamatsekolahasal, 
                            namalengkapayah, namalengkapibu, alamatayah, alamatibu, teleponhportu, pekerjaanayah, pekerjaanibu, pendidikanterakhirayah, pendidikanterakhiribu,
                            namaayahwali, namaibuwali, alamatayahwali, alamatibuwali, teleponwali, pekerjaanayahwali, pekerjaanibuwali, pendidikanterakhirayahwali, pendidikanterakhiribuwali) VALUES 
                            ('','$nama_lengkap','$nama_panggilan','$nomor_induk_asal','$nisn','$ttl','$jenis_kelamin','$agama','$anak_ke','$status_anak_dalam_keluarga','$alamat','$telepon_hp','$di_kelas','$pada_tanggal','$nama_sd_mi_asal','$alamat_sekolah_asal',
                            '$nama_lengkap_ayah','$nama_lengkap_ibu','$alamat_ayah','$alamat_ibu','$telepon_hp_ortu','$pekerjaan_ayah','$pekerjaan_ibu','$pendidikan_terakhir_ayah','$pendidikan_terakhir_ibu',
                            '$nama_ayah_wali','$nama_ibu_wali','$alamat_ayah_wali','$alamat_ibu_wali','$telepon_wali','$pekerjaan_ayah_wali','$pekerjaan_ibu_wali','$pendidikan_terakhir_ayah_wali','$pendidikan_terakhir_ibu_wali')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Input berhasil');window.location = '/Web-Sekolah-Az-Zahrah/formulir.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
?>