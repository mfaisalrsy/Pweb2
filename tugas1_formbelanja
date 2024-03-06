<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h3>Belanja Online</h3>
<hr>

<form method="POST" action="#"  style="float:left; margin-right:100px;" >
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<br>

<!-- Table Daftar Harga -->
<table border="1px">
    <tr bgcolor="#124076">
        <td style="color: white;">Daftar Harga</td>
    </tr>
    <tr>
        <td>TV : 4.200.000</td>
    </tr>
    <tr>
        <td>Kulkas : 3.100.000</td>
    </tr>
    <tr>
        <td>Mesin Cuci : 3.800.000</td>
    </tr>
    <tr bgcolor="#124076">
        <td style="color: white;">Harga Dapat Berubah Setiap Saat</td>
    </tr>
</table>
<br><br><br>
<hr>

<?php
// Proses formulir jika telah di-submit
if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    // Daftar harga barang
    $hargaBarang = [
        'tv' => 4200000,
        'kulkas' => 3100000,
        'mesin cuci' => 3800000,
    ];

    $totalHarga = $hargaBarang[$produk] * $jumlah;

    // Tampilkan hasil
    echo "<h3>Detail Pembelian</h3>";
    echo "Nama Customer: $customer<br>";
    echo "Produk Pilihan: $produk<br>";
    echo "Jumlah Beli: $jumlah<br>";
    echo "Total Belanja: Rp " . number_format($totalHarga, 0, ',', '.');

}
?>



