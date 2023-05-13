<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

{{-- <div class="jumbotron text-center">
  <h1>Laravel Brezz multipole auth system</h1>
  <p>Resize this responsive page to see the effect!</p>
</div> --}}
<h1>@if(isset(Auth::user()->name)) {{Auth::user()->name}} @endif</h1>
<div class="row">
    <div class="col-md-10 offset-1">
        <div class="card mt-5">
            <div class="card-header">
                <h6 class="text-center">User Manegment Table</h6>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                            <tr>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $user )

                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->role->role_name}}</td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





</body>
</html>
