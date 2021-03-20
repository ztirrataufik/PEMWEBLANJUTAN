<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Belanja</title>
  </head>


  <body>
    <div class="container">
        <h2 class="mt-2">Belanja Online</h2>
        <hr/>

        <form method="POST" action="form_belanja.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label>Customer</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="customer" id="customer" class="form-control" value="" placeholder="Nama Customer">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label>Pilih Produk</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <input type="radio" class="from-check-input" name="produk" id="tv" value="TV">
                            <label class="form-check-label">TV</label>
                        </div>

                        <div class="form-check-inline">
                            <input type="radio" class="from-check-input" name="produk" id="kulkas" value="KULKAS">
                            <label class="form-check-label">KULKAS</label>
                        </div>

                        <div class="form-check-inline">
                            <input type="radio" class="from-check-input" name="produk" id="mesin_cuci" value="MESIN CUCI">
                            <label class="form-check-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label>Jumlah</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="jumlah" id="jumlah" class="form-control" value="" placeholder="Jumlah">
                    </div>
                </div>
            </div>
            
            <div>
                <input type="submit" class="btn btn-success" value="KIRIM" name="proses">
            </div>
        </div>
    </div>
</div>
        </form>

        <hr/>
        <br/>

        <?php
        if (isset($_POST['proses'])) {
            $proses= $_POST['proses'];
            $nama_customer= $_POST['customer'];
            $pilih_produk= $_POST['produk'];
            $jumlah= $_POST['jumlah'];

            if ($pilih_produk == "TV") {
                $total = $jumlah * 4200000;
            } else if ($pilih_produk == "KULKAS") {
                $total = $jumlah * 3100000;
            } else if ($pilih_produk == "MESIN CUCI") {
                $total = $jumlah * 3800000;
            }

            echo 'Nama Customer : ' . $nama_customer;
            echo '<br/>Produk Pilihan : ' . $pilih_produk;
            echo '<br/>Jumlah Beli : ' . $jumlah;
            echo '<br/>Total Belanja : Rp ' . number_format($total, 2, ',' , '.');
        }
            
        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>