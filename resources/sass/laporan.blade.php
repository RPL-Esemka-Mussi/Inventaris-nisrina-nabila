<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>laporan</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bolder">
                        <a class="nav-link active" aria-current="page" href="{{ url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('user')}}">User</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('barang')}}">Barang</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">
                    <li class="nav-item dropdown ms-3-md">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>

                        <ul class="dropdown-menu fw-bolder" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-center fw-bolder" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div style="margin-top:45px!important;" class="row float-end mt-5">
            <a href="{{url('/laporan/print')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                </svg>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-16">
                <h2 class="fw-bold fs-2 mt-5 ">Data User</h2>


                <table class="table table-striped table-hover mt-5">
                    <tr class="text-center">


                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Alamat</th>
                        <th>Telepon</th>

                    </tr>

                    @foreach($users as $user)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->alamat}}</td>
                        <td>{{$user->telepon}}</td>

                    </tr>
                    @endforeach
            </div>
        </div>
    </div>
    </table>

    </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-16">
                <h2 class="fw-bolder fs-2">Data Barang</h2>

                <table class="table table-striped table-hover mt-5 mb-3">

                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Lokasi</th>
                    </tr>
                    @foreach($barang as $barang)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->satuan}}</td>
                        <td>{{$barang->jumlah}}</td>
                        <td>{{$barang->keterangan}}</td>
                        <td>{{$barang->lokasi}}</td>

                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>