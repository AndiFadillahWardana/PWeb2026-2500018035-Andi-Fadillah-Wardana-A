<?php

/* ==========================================
   DATA MAHASASISWA (ARRAY ASOSIATIF)
========================================== */

$mahasiswa = [

    "Nama" => "Andi Fadillah Wardana",

    "NIM" => "2300012345",

    "Program Studi" => "Informatika"

];


/* ==========================================
   ARRAY NILAI
========================================== */

$nilai = [90, 85, 78, 95, 88];


/* ==========================================
   FUNCTION
========================================== */

function hitungRata($data)
{
    return array_sum($data) / count($data);
}

function nilaiTertinggi($data)
{
    return max($data);
}

function nilaiTerendah($data)
{
    return min($data);
}

function jumlahData($data)
{
    return count($data);
}

function grade($rata)
{
    if ($rata >= 80)
        return "A";
    elseif ($rata >= 70)
        return "B";
    elseif ($rata >= 60)
        return "C";
    elseif ($rata >= 50)
        return "D";
    else
        return "E";
}

function statusKelulusan($rata)
{
    if ($rata >= 60)
        return "LULUS";
    else
        return "TIDAK LULUS";
}


/* ==========================================
   PROSES
========================================== */

$rata = hitungRata($nilai);

$tertinggi = nilaiTertinggi($nilai);

$terendah = nilaiTerendah($nilai);

$jumlah = jumlahData($nilai);

$grade = grade($rata);

$status = statusKelulusan($rata);


/* ==========================================
   SORTING
========================================== */

$nilaiUrut = $nilai;

rsort($nilaiUrut);


/* ==========================================
   SEARCH
========================================== */

$cari = 95;

$ada = in_array($cari, $nilai);

$index = array_search($cari, $nilai);

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Sistem Nilai Mahasiswa</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>SISTEM PENILAIAN MAHASISWA</h1>

<div class="card">

<h2>Data Mahasiswa</h2>

<table>

<?php foreach($mahasiswa as $key=>$value){ ?>

<tr>

<th><?= $key ?></th>

<td><?= $value ?></td>

</tr>

<?php } ?>

</table>

</div>

<div class="card">

<h2>Daftar Nilai</h2>

<ul>

<?php

foreach($nilai as $n){

echo "<li>$n</li>";

}

?>

</ul>

</div>

<div class="card">

<h2>Hasil Perhitungan</h2>

<table>

<tr>

<th>Jumlah Data</th>

<td><?= $jumlah ?></td>

</tr>

<tr>

<th>Rata-rata</th>

<td><?= number_format($rata,2) ?></td>

</tr>

<tr>

<th>Nilai Tertinggi</th>

<td><?= $tertinggi ?></td>

</tr>

<tr>

<th>Nilai Terendah</th>

<td><?= $terendah ?></td>

</tr>

<tr>

<th>Grade</th>

<td><?= $grade ?></td>

</tr>

<tr>

<th>Status</th>

<td><?= $status ?></td>

</tr>

</table>

</div>

<div class="card">

<h2>Nilai Setelah Diurutkan</h2>

<ul>

<?php

foreach($nilaiUrut as $n){

echo "<li>$n</li>";

}

?>

</ul>

</div>

<div class="card">

<h2>Pencarian Nilai</h2>

<?php

if($ada){

echo "<p>Nilai <b>$cari</b> ditemukan pada index <b>$index</b>.</p>";

}else{

echo "<p>Nilai tidak ditemukan.</p>";

}

?>

</div>

</div>

</body>

</html>