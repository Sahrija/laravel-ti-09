<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>
 
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card mt-5">
<div class="card-body">
<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->ttl }}</td>
    </tr>
    <tr>
        <td>Lokasi</td>
        <td>{{ $data->Lokasi}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $data->jenis_kelamin}}</td>
    </tr>
    <tr>
        <td>skill</td>
        <td>{{ $data->skill }}</td>
    </tr>
    </div>
                    </div>
                </div>
            </div>
        </div>

</table>