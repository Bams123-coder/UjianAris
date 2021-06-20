<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Mahasiswa</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </head>

    <body>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <div class="container">
            <div class="col-md-12">
              <br>
              <div>
                <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}">Kembali</a>
              </div>
              <br>
              
              <form  action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                @csrf
                @method('PUT')         
                <div class="form-group">
                  <label for="nbi" class="col-sm-2 control-label">NBI</label>                    
                  <input type="text" name="nbi" required="required" value="{{ $mahasiswa->nbi }}">
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>            
                  <input type="text" name="nama" required="required" value="{{ $mahasiswa->nama }}">        
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>               
                  <input type="text" name="alamat" required="required" value="{{ $mahasiswa->alamat }}">  
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
        </div>

    </body>

</html>