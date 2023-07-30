<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.login') }}">
    @csrf
        @if(Session::has('error_message'))
        <p>
            <strong>Error: </strong> {{ Session::get('error_message')}}
        </p>
        @endif
        <label for ='email'> Email</label>
        <input type = "email" name ='email' id = 'email' required>
        <label for ="password"> Password </label>
        <input type = "password" name ='password' id = 'password' required>
        <button value="submit">Sign in</button>
        
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ url('admin/global.css')}}" />
    <link rel="stylesheet" href="{{ url('admin/login.css')}}" />
    <link
      rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"/>
    <link
      rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST" action="{{ route('admin.login') }}">
    @csrf
        @if(Session::has('error_message'))
        <p class = "alert alert-danger">
            <strong>Error: </strong> {{ Session::get('error_message')}}
        </p>
        @endif
    <div class="log-in col-sm">
      <div class="log-in-child"></div>
      <div class="log-in-item"></div>
      <div class="log-in-inner">
        <div class="sign-in-parent">
          <div class="sign-in">Sign in</div>
          <div class="frame-parent">
            <div class="frame-group">
              <div class="email-parent">
                <div class="email">Email:</div>
                <input
                  class="enter-email"
                  type="email" name = "email" id = "email"
                  placeholder="Enter your email"
                />
              </div>
              <div class="email-parent">
                <div class="email">Password:</div>
                <input class="enter-email" type="password" name = "password" required />
              </div>
            </div>
            <div class="frame-group">
              <button class="sign-in-wrapper" autofocus>
                <div class="sign-in1">Sign in</div>
              </button>
              <div class="sign-in-with-google-wrapper">
                <div class="sign-in-with">Sign in with Google</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-parent">
        <img class="frame-item" alt="" src="./public/group-17.svg" />

        <div class="netmenu">NETMENU</div>
      </div>
      <button class="dont-have-an-container" autofocus>
        <span class="dont-have-an">Don’t have an account? </span>
        <span class="sign-up">Sign up</span>
      </button>
      <div class="rectangle-div"></div>
      <img class="vector-icon" alt="" src="./public/vector-1.svg" />
    </div>
  </form>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>