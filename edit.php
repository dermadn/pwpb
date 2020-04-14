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
        <button type="reset" class="btn btn-outline-danger "><a href="tabel.php">Batal</a></button>
    </div>
    <?php
	        include 'koneksi.php';
	        $id = $_GET['id'];
	        $data = mysqli_query($konek,"select * from produk where kd_produk='$id'");
	        while($da = mysqli_fetch_array($data)){
		?>
    <div class="container border border-primary rounded">
        <div class="text-right mt-2">Kode Produk 
                <div class="text-right"> <?PHP echo $id ;?> </div>          
        </div>
        
        <form action="update.php" method="POST" class="form-group mt-5 pr-5 pl-5">
            <input type="text" name="kd_pro" value="<?php echo $da['kd_produk']; ?>" hidden >
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Produk" name="nama" value="<?php echo $da['nama_produk']; ?>">
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
                    <input type="number" class="form-control" placeholder="Harga Produk" name="harga" value="<?php echo $da['harga_produk']; ?>">
                </div>
                <div class="col">
                    <input type="url" class="form-control" placeholder="URL Gambar" name="url" value="<?php echo $da['url_gambar']; ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                <select class="custom-select"  name="satuan" >
                    <option value="-"  >Pilih Satuan ...</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Box">Box</option>
                </select>
                </div>
                <div class="col">
                    <input type="Number" class="form-control" placeholder="Stok" name="stok" value="<?php echo $da['stok']; ?>">
                </div>
            </div>
            <div class="text-right mt-4">
                
            <button type="reset" class="btn btn-outline-danger ">Reset</button>
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
            
            </div>
        </form>
        <?php 
	}
	?>
    </div>
</body>

</html>