<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai yang lulus: " . implode(", ", $nilaiLulus);
echo "<br>";

$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);
echo "<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$matakuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $matakuliah: <br>";
foreach ($daftarNilai [$matakuliah] as $nilai) {
    echo "Nama: ($nilai[0]), Nilai: ($nilai[1]) <br>";
}
echo "<br>";

$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ["David", 64],
    ["Eva", 90],
];
$rataRata = 0;
foreach ($daftarNilai as $nilai) {
    $rataRata += $nilai[1];
}
$rataRata /= count($daftarNilai);
echo "Rata-rata nilai kelas: $rataRata <br>";
echo "Daftar nilai yang di atas rata-rata kelas: <br>";
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: $nilai[0], Nilai: $nilai[1] <br>";
    }
}
?>