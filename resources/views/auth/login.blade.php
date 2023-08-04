<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="log/fonts/icomoon/style.css">

    <link rel="stylesheet" href="log/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="log/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="log/css/style.css">

    <title>Login Admin</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('log/images/home1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Login</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form method="POST" action="{{ route('login-proses') }}">
                @csrf
                <div class="form-group first">
                  <label for="">Email</label>
                  <input name="email" id="email" type="email" class="form-control">
                </div>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" class="form-control">
                </div>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
                {{-- <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div> --}}

                <button type="submit" class="btn btn-block btn-rsih">Login</button>
                <p class="mt-2 text-center text-primary">Note : Jika tidak bisa login hubungi developer (@fajrulfallakh)</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="log/js/jquery-3.3.1.min.js"></script>
    <script src="log/js/popper.min.js"></script>
    <script src="log/js/bootstrap.min.js"></script>
    <script src="log/js/main.js"></script>

    @if($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
  </body>
</html>