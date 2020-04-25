<?php
	include "koneksi.php";

    $carikode = mysqli_query($konek, "select max(kd_produk) from produk");
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 3);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "MD-".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "F0001";
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Master</title>
</head>

<body>
    <div class="bg-primary  pr-5 pt-5 rounded-pill position-relative"
        style="color:white; bottom: 36px;">       
        <h2 class="text-right">  Demo </h2>       
    </div>

    <div class="container pb-2">
        <button type="reset" class="btn btn-outline-primary "><a href="tabel.php">Tabel</a></button>
    </div>
    
    <div class="container border border-primary rounded">
        <div class="text-right mt-2">Kode Produk 
                <div class="text-right"> <?PHP echo $kode_otomatis ;?> </div>          
        </div>

        <form action="simpan.php" method="POST" class="form-group mt-5 pr-5 pl-5">
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Produk" name="nama">
                </div>
                <div class="col">
                <select class="custom-select"  name="kate">
                    <option value="-">Pilih Kategori ...</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    
                </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Harga Produk" name="harga">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="URL Gambar" name="url">
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                <select class="custom-select"  name="satuan">
                    <option value="-">Pilih Satuan ...</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Box">Box</option>
                </select>
                </div>
                <div class="col">
                    <input type="Number" class="form-control" placeholder="Stok" name="stok">
                </div>
            </div>
            <div class="text-right mt-4">
                
            <button type="reset" class="btn btn-outline-danger ">Reset</button>
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
            
            </div>
        </form>
    </div>
</body>

</html>
