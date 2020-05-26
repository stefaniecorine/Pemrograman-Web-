<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pemeriksaan Poliklinik - Upload</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="row">
        <div class="container">

            <h2 class="text-center my-5">Scan Image Files</h2>

            <div class="col-lg-8 mx-auto my-5">

                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br />
                    @endforeach
                </div>
                @endif

                <form action="/upload/prosesupload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <b>File</b><br/>
                        <input type="file" name="file">
                    </div>

                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan"></textarea>
                    </div>

                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>

                <h4 class="mt-5">Data</h4>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="20%">File</th>
                            <th>Keterangan</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gambar as $g)
                        <tr>
                            <td><img width="150px" src="{{ url('public/resources/assets/img/'.$g->file) }}"></td>
                            <td>{{$g->keterangan}}</td>
                            <td>
                                <a class="btn btn-danger" role="button" href="/upload/hapus/{{ $g->id_gambar }}"><i class="fa fa-trash-alt" style="font-size:16px"></i></a>
                                <a class="btn btn-success" role="button" href="{{ route('gambar.download', $g->id_gambar) }}"><i class="fas fa-download" style="font-size:16px"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-right mb-3">
                    <a class="btn btn-info" href="/pemeriksaan">Kembali</a>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</body>

</html>