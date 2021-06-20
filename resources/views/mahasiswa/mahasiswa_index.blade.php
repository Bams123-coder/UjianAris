<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <title>Mahasiswa</title>
</head>
<body>
  <br>
  <div class="container">
    <div>
      <a class="btn btn-primary" href="{{ route('mahasiswa.create') }}">Tambah</a>
    </div>
    <br>
    <div>      
      <table class='table table-bordered'>
        <thead>
          <tr>
            <th>No</th>
            <th>NBI</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach($data as $value)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{$value->nbi}}</td>
              <td>{{$value->nama}}</td>
              <td>{{$value->alamat}}</td>
              <td>
                <a href="{{ route('mahasiswa.edit', $value->id) }}" class="btn btn-warning">Edit</a>                
                &nbsp;                
                <form action="{{ route('mahasiswa.destroy', $value->id) }}" onsubmit="return confirm('Are you sure?');" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>                
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>