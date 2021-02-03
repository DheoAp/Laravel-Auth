<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Login</title>
  </head>
  <body>

    <div class="container">
      <div class="row" style="margin-top:45px ">
        <div class="col-md-4 offset-md-4">
          <h4>User Login</h4>
          <hr>
          <form action="{{ route('auth.cek') }}" method="POST">
            @csrf
            @if (Session::get('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{Session::get('gagal')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
            <div class="form-group">
              <label for="email">Email</label>
            <input name="email" type="text" class="form-control"  placeholder="Masukan email" value="{{ old('email') }}">
              <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input  name="password" type="password" class="form-control"  placeholder="Masukan password">
              <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary">Login</button>
            </div>
            <br>
            <a href="daftar">Buat akun sekarang!</a>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>