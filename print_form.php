<?php
    include __DIR__ . '/../../lib/koneksi.php';
    require_once __DIR__ . '/../../vendor/autoload.php';

    use \PhpOffice\PhpWord\TemplateProcessor,
        \PhpOffice\PhpWord\Shared\Html,
        \PhpOffice\PhpWord\PhpWord,
        \PhpOffice\PhpWord\Settings;

    Settings::setOutputEscapingEnabled(true);

    $doc = new TemplateProcessor('form jadi.doc');
    $sql = "SELECT * FROM form WHERE id = '$_GET[id]'";
    $result = mysqli_query($koneksi, $sql);
    // $diteruskanfix;
    // if ($row['diteruskan2'] == ""){
    //     $diteruskanfix = $diteruskan;
    // } else {
    //     $diteruskanfix = $row['diteruskan'] . ", " . $row['diteruskan2'];
    // }
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $tgl = $row['tglditerima'];
    //     $nosurat = $row['nosurat'];

    // do some variable magic
        $doc->setValue('namalengkap', $row['namalengkap']);
        $doc->setValue('namapanggilan', $row['namapanggilan']);
        // $doc->setValue('tglsurat', date("d-m-Y", strtotime($row['tglsurat'])));
        // $doc->setValue('diterimatgl', date("d-m-Y", strtotime($row['tglditerima'])));
        $doc->setValue('nomorindukasal', $row['nomorindukasal']);
        $doc->setValue('nisn', $row['nisn']);
        $doc->setValue('ttl', $row['ttl']);
        $doc->setValue('jeniskelamin', $row['jeniskelamin']);
        $doc->setValue('agama', $row['agama']);
        $doc->setValue('anakke', $row['anakke']);
        $doc->setValue('statusanakdalamkeluarga', $row['statusanakdalamkeluarga']);
        $doc->setValue('alamat', $row['alamat']);
        $doc->setValue('teleponhp', $row['teleponhp']);
        $doc->setValue('dikelas', $row['dikelas']);
        $doc->setValue('padatanggal', $row['padatanggal']);
        $doc->setValue('namasekolahasal', $row['namasekolahasal']);
        $doc->setValue('alamatsekolahasal', $row['alamatsekolahasal']);
        $doc->setValue('namalengkapayah', $row['namalengkapayah']);
        $doc->setValue('namalengkapibu', $row['namalengkapibu']);
        $doc->setValue('alamatayah', $row['alamatayah']);
        $doc->setValue('alamatibu', $row['alamatibu']);
        $doc->setValue('teleponhportu', $row['teleponhportu']);
        $doc->setValue('pekerjaanayah', $row['pekerjaanayah']);
        $doc->setValue('pekerjaanibu', $row['pekerjaanibu']);
        $doc->setValue('pendidikanterakhirayah', $row['pendidikanterakhirayah']);
        $doc->setValue('pendidikanterakhiribu', $row['pendidikanterakhiribu']);
        $doc->setValue('namaayahwali', $row['namaayahwali']);
        $doc->setValue('namaibuwali', $row['namaibuwali']);
        $doc->setValue('alamatayahwali', $row['alamatayahwali']);
        $doc->setValue('alamatibuwali', $row['alamatibuwali']);
        $doc->setValue('teleponwali', $row['teleponwali']);
        $doc->setValue('pekerjaanayahwali', $row['pekerjaanayahwali']);
        $doc->setValue('pekerjaanibuwali', $row['pekerjaanibuwali']);
        $doc->setValue('pendidikanterakhirayahwali', $row['pendidikanterakhirayahwali']);
        $doc->setValue('pendidikanterakhiribuwali', $row['pendidikanterakhiribuwali']);

        // $doc->setImageValue('ttd', array('path' => (__DIR__).'/../../pages/hasil/TTD Kh.png', 'width' => 200, 'height' => 200, 'ratio' => true));
        // $doc->setImageValue('ttd', 'TTD Kh.png');
        // $fileindocx = "word/media/image2.jpeg";
        // $newimage = file_get_contents('TTD Kh.png');
        // $templateProcessor = new TemplateProcessor($file_dir);
        // $doc->zipClass->AddFromString($fileindocx ,$newimage );
        // $doc->setImageValueAlt("fotottd", "TTD Kh.png");
    }

    // create temporary section
    $section = (new PhpWord())->addSection();

    // add html
    // Html::addHtml($section, $html, false, false);

    // get elements in section
    $containers = $section->getElements();

    // clone the html block in the template
    $doc->cloneBlock('htmlblock', count($containers), true, true);

    // replace the variables with the elements
    for($i = 0; $i < count($containers); $i++) {
        // be aware of using setComplexBlock
        // and the $i+1 as the cloned elements start with #1
        $doc->setComplexBlock('html#' . ($i+1), $containers[$i]);
    }

    // save final document
    // $pdf = Gears\Pdf::convert('test.docx');

    $doc->saveAs("Form azzahra.docx");
    // $pdfWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordPdf , 'PDF');    
    // $pdfWriter->save($filename.".pdf");
    // unlink($wordPdf);

    // $rendererName = Settings::PDF_RENDERER_DOMPDF;
    // $rendererLibraryPath = realpath('/../../vendor/dompdf/dompdf');
    // Settings::setPdfRenderer($rendererName, $rendererLibraryPath);
    // $wordPdf = \PhpOffice\PhpWord\IOFactory::load("test".".docx");

    // \PhpOffice\PhpWord\Settings::setPdfRendererPath(dirname(__FILE__)."/../../Office/tcpdf");
    // \PhpOffice\PhpWord\Settings::setPdfRendererName('TCPDF');

    // $pdfWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordPdf , 'PDF');
    // if (file_exists($filename.".pdf")) unlink($filename.".pdf");
    // $pdfWriter->save($filename.".pdf");  

    header( "/pages/hasil/Form azzahra.docx" );
    $fileurl = (__DIR__).'/../../pages/hasil/form azzahra.docx';
    header("Content-type:application/docx");
    header('Content-Disposition: attachment; filename=' . $nosurat . '_' . $tgl . '.docx');
    readfile( $fileurl );
?>