<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 89) {
        echo "Nilai huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 79) {
        echo "Nilai huruf: C";
    } elseif ($nilaiNumerik >= 60 && $nilaiNumerik <= 69) {
        echo "Nilai huruf: D";
    }

    echo "<br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget.";

    echo "<br>";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang diperlukan: $jumlahBuah";
    echo "<br>";
    
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }
    
    echo "Total skor ujian: $totalSkor";
    echo "<br>";    

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 89, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai: $nilai tidak lulus <br>";
            continue;
        }
        echo "Nilai: $nilai lulus <br>";
    }

    sort($nilaiSiswa);
    $total_nilai = 0;
    for($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
        $total_nilai += $nilaiSiswa[$i];
    }
    $rata_rata = $total_nilai / (count($nilaiSiswa) - 4);

    echo "Rata-rata nilai siswa: $rata_rata";
    echo "<br>";


    $harga_produk = 120_000;
    if ($harga_produk > 100_000) {
        $harga_produk *= 0.8;
    }
    echo "Harga produk setelah diskon: $harga_produk";
    echo "<br>";

    // Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
    $skor = 600;
    echo "Total skor pemain adalah: $skor <br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . ($skor > 500 ? "Ya" : "Tidak") . "<br>";
?>