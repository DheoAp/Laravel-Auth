<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <title>Profile</title>
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top:45px">
      <div class="col-md-6 offset-md-3">
        <h4>Profile</h4>
        <hr>
        <table class="table table-hover">
          <thead>
            <th>Name</th>
            <th>Email</th>
            <th></th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $UserInfo->nama}}</td>
              <td>{{ $UserInfo->email}}</td>
              <td><a href="keluar">Keluar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>