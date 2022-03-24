<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertikom PENS 2020</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: #D3D3D3">
    <div class="container">
        <div class="card" style="margin-top: 80px">
            <div class="card-header">
            <div class="row">
                    <div class="col">
                        <h5 class="card-title mb-0"  >DATA KEPEGAWAIAN ITS</h5>

                         <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                        <a class="nav-link" href="list-pegawai.php">Daftar Karyawan dan Pegawai</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="list-departemen.php">Asal Department Karyawan dan Pegawai</a>
                        </li>
                         </ul>
                    </div>
                    <div class="col">
                        <a href="form-pegawai.php?action=new" class="btn btn-primary float-right">Buat Baru</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- <div class="form-inline mb-4">
                   
                    <input placeholder="search..." type="text" class="ml-3 form-control form-control-sm" id="keyword">
                    <span class="ml-3 text-muted">Jumlah Data : <b id="totalRows" class="text-dark">3</b></span>
                </div> -->
                <table class="table table-bordered"style="background-color: #D3D3D3">
                    <thead>
                        <tr>
                            <th scope="col"style="text-align: center;">No.</th>
                            <th scope="col"style="text-align: center;">Nama Pegawai</th>
                            <th scope="col"style="text-align: center;">Department pegawai</th>
                            <th scope="col"style="text-align: center;">Jenis Kelamin</th>
                            <th scope="col"style="text-align: center;">Alamat Pegawai</th>
                            <th scope="col"style="text-align: center;">Respon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once __DIR__.'/awal/dataPegawai.php';
                            $pegawai = new dataPegawai();
                            $listPegawai = $pegawai->getAll();
                            $no = 1;
                            $html = '';
                            foreach($listPegawai as $row) {
                                $html .= '<tr>
                                    <th scope="row">'. $no .'</th>
                                    <td>'. $row['nama'] .'</td>
                                    <td>'. $row['nama_departemen'] .'</td>
                                    <td>'. $row['gender'] .'</td>
                                    <td>'. $row['alamat'] .'</td>
                                    <td>
                                        <a href="form-pegawai.php?action=update&id='.$row['id'].'" class="btn btn-info">Edit</a> 
                                        <a href="crud_pegawai.php?action=delete&id='.$row['id'].'" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    </tr>';
                                $no++;
                            }
                            echo($html);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>