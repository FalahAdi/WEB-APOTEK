<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
@include('navbar.navbar');
<table class="table" style="margin-left:40px">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pembeli</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Jumlah yang dibeli</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <h2>
         DAFTAR PEMBELIAN    
  </h2>
  <h2>

  </h2>
  <tbody>
    @foreach($data as $dt)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dt->namaPembeli}}</td>
      <td>{{$dt['obat']['nama']}}</td>
      <td>{{$dt->jumlah}}</td>
      <td>
        <!-- <a href="/editPembelian/{{$dt->id}}" class="btn btn-warning">Edit</a> -->
        <a href="/deletePembelian/{{$dt->id}}" class="btn btn-danger m-1">Hapus</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>