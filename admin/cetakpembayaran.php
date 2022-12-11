<title>Cetak Laporan</title>
<link rel="shortcut icon" href="../template/images/printing.png" />
<?php
    include "koneksi.php";
        $Lapor = "SELECT id_pembayaran, id_petugas, nisn, nama, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, status FROM pembayaran ORDER by id_pembayaran";
        $Hasil = $mysqli->query($Lapor);
        $Data = array();
    while($data=mysqli_fetch_array($Hasil)){
        array_push($Data, $data);
    }
    
    $Judul = "Laporan Data Transaksi Pembayaran SPP - Sekolah Angkasa";
    $tgl= "Time : ".date("l, d F Y");
    $Header= array(
        array("label"=>"ID Bayar", "length"=>20, "align"=>"L"),
		array("label"=>"ID Petugas", "length"=>25, "align"=>"L"),
		array("label"=>"NISN", "length"=>15, "align"=>"L"),
        array("label"=>"Nama Siswa", "length"=>40, "align"=>"L"),
		array("label"=>"Tanggal", "length"=>20, "align"=>"L"),
		array("label"=>"Bulan", "length"=>20, "align"=>"L"),
		array("label"=>"Tahun", "length"=>15, "align"=>"L"),
		array("label"=>"ID SPP", "length"=>15, "align"=>"L"),
		array("label"=>"Jumlah Bayar", "length"=>28, "align"=>"L"),
    );
    ob_start();
    require ("../fpdf184/fpdf.php");
        $pdf = new FPDF();
        $pdf->AddPage('P','A4','C');
        $pdf->SetFont('arial','B','15');
        $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
        $pdf->SetFont('arial','i','9');
        $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
        $pdf->SetFont('arial','','12');
        $pdf->SetFillColor(190,190,0);
        $pdf->SetTextColor(255);
        $pdf->setDrawColor(128,0,0);
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
    }
        $pdf->Ln();
        $pdf->SetFillColor(244,235,255);
        $pdf->SettextColor(0);
        $pdf->SetFont('arial','','10');
        $fill =false;
    foreach ($Data as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            if (isset($Header[$i]['length'])) {
                $pdf->Cell ($Header[$i]['length'], 7, $Baris[$i], 2, '0', $Kolom['align'], $fill);
            }
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
    ob_end_flush();
?>
