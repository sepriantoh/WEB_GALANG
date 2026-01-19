<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
                <form method="POST" class="border rounded bg-light p-2">
                    <label class="form-label">Harga Barang (Rp)</label>
      <input type="number" name="harga" class="form-control"step="0,1"placeholder="masukan harga barang" min="0" required onkeypress="return
      event.charCode >= 48 && event.charCode <= 57" 
       <label class="form-lable">Diskon (%)</label> 
      <input type="text" maxlength="4" name="diskon" class="form-control"step="0,1"placeholder="masukan diskon (0-1000)" min="0" required onkeypress="return
      event.charCode >= 48 && event.charCode <= 57">
      <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung">Hitung
        
      </button>
    </form>

     <?php 
                if(isset($_POST['hitung'])){
                    $harga =  $_POST['harga '];
                    $diskon = $_POST['diskon'];

                    if ($harga < 0){
                        echo "<script>alert('Harga tidak boleh negatif');</script>";
                    } elseif ($diskon < 0 || $diskon > 100){
                        echo "<script>alert('Diskon harus di antara angka 0-100!');</script>";
                    } else {
                        $nilai_diskon = $harga * ($diskon / 100);
                        $total_harga = $harga - $nilai_diskon;
                ?>
                <div class="border rounded p-2 bg-light mt-2">
                    <p>Harga Barang: Rp. <b><?php echo number_format($harga, 2, ',', '.'); ?></b></p>
                    <p>Diskon <?php echo $diskon; ?>%: Rp. <b><?php echo number_format($nilai_diskon, 2, ',', '.'); ?></b></p>
                    <p>Total harga setelah diskon: Rp. <b><?php echo number_format($total_harga, 2, ',', '.'); ?></b></p>
                </div>
                <?php }
                }
                ?>
    </div>
    </div>
    </div>

    <p class="text-center">&copy; UKK RPL 2026 | SEPRIANTO HERLANGGA 23 | Kelas 12</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</body>
</html>