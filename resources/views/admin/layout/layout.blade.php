<!DOCTYPE html>
<html>

<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="{{ url('admin/global.css')}}"/>
  <link rel="stylesheet" href="{{ url('admin/dashboard.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid">
    <div class="dashboard">
   
    
    <div>
    @include('admin.layout.header')
    </div>
    <div class="row">
      <div class="col-md-4">
    @include('admin.layout.sidebar')
  </div>
  <div class="col.md-8 dashboard-child"> @yield('def', 'Default content yeilded') </div>
    </div>
      
      
  </div>
  </div>

  </div>
  
  
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="{{ url('admin/custom.js')}}"></script>
</body>

</html>