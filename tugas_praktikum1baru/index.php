<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Nilai Siswa</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Sistem Penilaian</h4>
            </div>
            <div class="card-body">
                <h3>Form Nilai Siswa</h3>
                <hr/>

                <form method="POST" action="index.php">
                    <div class="row">
                        <div class="offset-2"></div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="" size="30" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nim" id="nim" class="form-control" value="" size="30" placeholder="NIM">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mata Kuliah</label>
                                <div class="col-sm-9">
                                    <select name="matkul" id="matkul" class="from-control">
                                        <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                                        <option value="Basis Data I">Basis Data I</option>
                                        <option value="Pemrograman Web">Pemrograman Web</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UTS</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_uts" id="nilai_uts" class="form-control" value="" size="6" placeholder="Nilai UTS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UAS</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_uas" id="nilai_uas" class="form-control" value="" size="6" placeholder="Nilai UAS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai Tugas Praktikum</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_tugas" id="nilai_tugas" class="form-control" value="" size="6" placeholder="Nilai Tugas Praktikum">
                                </div>
                            </div>
                            <div class="offset-3 pl-2">
                                <input type="submit" class="btn btn-primary" value="SIMPAN" name="proses">
                            </div>
                        </div>
                    </div>
                </form>

                <?php

                $ns1 = ['id'=>1, 'nama_lengkap' => 'Farhan Maulana', 'nim'=>'01101', 'matkul' => 'Pemrograman Web', 'nilai_uts'=>80, 'nilai_uas'=>84, 'nilai_tugas'=>78];
                $ns2 = ['id'=>2, 'nama_lengkap' => 'Arman Manda Fauzan', 'nim'=>'01121', 'matkul' => 'Basis Data I', 'nilai_uts'=>70, 'nilai_uas'=>50, 'nilai_tugas'=>68];
                $ns3 = ['id'=>3, 'nama_lengkap' => 'Sarah Citra Lestari', 'nim'=>'01130', 'matkul' => 'Dasar - Dasar Pemrograman', 'nilai_uts'=>60, 'nilai_uas'=>86, 'nilai_tugas'=>70];
                $ns4 = ['id'=>4, 'nama_lengkap' => 'Putri Puspita', 'nim'=>'01134', 'matkul' => 'Pemrograman Web', 'nilai_uts'=>90, 'nilai_uas'=>91, 'nilai_tugas'=>82];
            
                $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
                if (isset($_POST['proses'])) {
                    $ns5 = ['id' => 5, 'nama_lengkap' => $_POST['nama_lengkap'], 'nim' => $_POST['nim'], 'matkul' => $_POST['matkul'], 'nilai_uts' => $_POST['nilai_uts'], 'nilai_uas' => $_POST['nilai_uas'], 'nilai_tugas' => $_POST['nilai_tugas']];

                    array_push($ar_nilai, $ns5);
                $proses = $_POST['proses'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $nim = $_POST['nim'];
                $matkul = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];                    
                }
                ?>
            </div>

            <div class="container">
                <table class="table table-striped table-bordered table-hover">
                     <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NIM</th>
                            <th scope="col">MATA KULIAH</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach($ar_nilai as $ns){
                            echo '<tr><td>'.$nomor.'</td>';
                            echo '<td>'.$ns['nama_lengkap'].'</td>';
                            echo '<td>'.$ns['nim'].'</td>';
                            echo '<td>'.$ns['matkul'].'</td>';
                            echo '<td>'.$ns['nilai_uts'].'</td>';
                            echo '<td>'.$ns['nilai_uas'].'</td>';
                            echo '<td>'.$ns['nilai_tugas'].'</td>';
                        
                            $nilai_akhir = ($ns['nilai_uts'] + $ns['nilai_uas']+$ns['nilai_tugas'])/3;
                            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                            echo '<tr/>';
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>