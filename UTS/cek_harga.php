<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$total = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat = $_POST['berat'];
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $membership = $_POST['membership'];

    $prices = ["Cuci Kering" => 5000, "Cuci Setrika" => 8000, "Setrika" => 6000];
    $harga_per_kilo = $prices[$jenis];
    $ekspress_cost = $kecepatan == "Ekspress" ? 2000 * $berat : 0;

    $total = ($harga_per_kilo * $berat) + $ekspress_cost;

    if ($membership == "Member") {
        $total -= 0.1 * $total;
    }

    $total = "Total yang harus dibayar: Rp " . number_format($total, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Cek Harga Laundry</title>
</head>
<body>
    <div class="navbar navbar-expand-lg" style="background-color: #5b9bd5">
        <div class="collapse navbar-collapse px-4">
            <a class="navbar-brand text-white me-auto" href="index.php"
                >Laundry XYZ</a
            >
            <div class="navbar-nav">
                <a class="navbar-brand text-white" href="home.php">Home</a>
                <a class="navbar-brand text-white" href="cek_harga.php"
                    >Cek Harga</a
                >
                <a class="navbar-brand text-white" href="logout.php"
                    >Logout</a
                >
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2>Cek Harga Laundry</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="berat" class="form-label">Berat (kg)</label>
                <input type="number" class="form-control" id="berat" name="berat" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Layanan</label>
                <select class="form-control" id="jenis" name="jenis" required>
                    <option value="Cuci Kering">Cuci Kering</option>
                    <option value="Cuci Setrika">Cuci Setrika</option>
                    <option value="Setrika">Setrika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kecepatan" class="form-label">Kecepatan</label>
                <select class="form-control" id="kecepatan" name="kecepatan" required>
                    <option value="Reguler">Reguler</option>
                    <option value="Ekspress">Ekspress</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="membership" class="form-label">Membership</label>
                <select class="form-control" id="membership" name="membership" required>
                    <option value="Non Member">Non Member</option>
                    <option value="Member">Member</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">CHECK</button>
        </form>
        <?php if ($total): ?>
            <p class="mt-3 alert alert-info"><?php echo $total; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
