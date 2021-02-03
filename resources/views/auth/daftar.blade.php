<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>Daftar Akun</title>
  </head>
  <body>

    <div class="container">
      <div class="row" style="margin-top:45px ">
        <div class="col-md-4 offset-md-4">
          <h4>Daftar User</h4>
          <hr>
          @if(Session::get('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{Session::get('berhasil')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if (Session::get('gagal'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{Session::get('gagal')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <form method="post" action="{{ route('auth.buat') }}">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input name="nama" type="text" class="form-control"  placeholder="Masukan nama" value="{{ old('nama') }}">
              <span class="text-danger">@error('nama'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" type="text" class="form-control"  placeholder="Masukan email" value="{{ old('email') }}">
              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input name="password" type="password" class="form-control"  placeholder="Masukan password">
              <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary">Daftar</button>
            </div>
            <br>
            <a href="login">sudah punya akun!</a>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>