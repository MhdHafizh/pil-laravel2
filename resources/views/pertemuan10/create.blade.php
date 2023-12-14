<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="/">kembali</a>
    <h1>tambah</h1>

        <div class="row">
    
            <div class="col-sm-4">
                <label for="">NPM</label>
                <input type="number" name="npm" id="" class="form-control">
            </div>
        
        
            <div class="col-sm-4">
                <label for="">NAMA</label>
                <input type="text" name="nama" id="" class="form-control">
            </div>
        
        
            <div class="col-sm-4">
                <label for="">tanggal</label>
                <input type="date" name="tgl_lahir" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="">jenis kelamin</label>
                <select name="jk" id="" class="form-select">
                    <option value="1">L</option>
                    <option value="2">p</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="">alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10"class="form-control"></textarea>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-primary mt-4" style="width:100%">simpan</button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
