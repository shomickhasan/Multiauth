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
    <div class="row mt-5 pt-5">
        <div class="m-auto">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Sign In</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">Email  Id</span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text">Password</span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Your Password">
                            </div>
                          <div class="input-group mb-3">
                            <input type="submit" class="form-control btn btn-success"  value="login">
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
