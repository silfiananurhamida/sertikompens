<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertikom PENS 2020</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: #D3D3D3">
    <?php
        require_once __DIR__.'/awal/dataDepartemen.php';
        $dept = new dataDepartemen();
        $action = $_GET['action'];
        $departemen = [
            'id' => null, 
            'nama' => "",
        ];
        $title = "Error Action";
        if($action == 'new') {
            $title =  "Membuat Data Baru";
        } else if($action == 'update') {
            $departemen = $dept->get($_GET['id']);
            $title = "Mengedit Data ";
        }
    ?>
    <div class="container">
        <div class="card"style="margin-top: 80px">
            <form action="<?php echo("crud_Department.php?action=$action") ?>" method="post">
                <div class="card-header">
                    <?php echo $title?>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value=<?php echo($departemen['id']) ?>>
                    <div class="form-group">
                        <label for="nama">Nama Departemen</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="<?php echo($departemen['nama']) ?>" required>
                    </div>    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a href="list-departemen.php" class="btn btn-info">Kembali</a>
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-primary float-right" name="submit" value="Simpan">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>