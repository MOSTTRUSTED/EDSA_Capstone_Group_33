@extends('admin.layout.layout')
@section('def')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
        <form method="post" action="{{ url('admin/update-admin-details')}}" enctype="multipart/form-data">
  @csrf
   @if(Session::has('error_message'))
        <p class = "alert alert-danger">
            <strong>Error: </strong> {{ Session::get('error_message')}}
        </p>
        @endif
         @if(Session::has('success_message'))
        <p class = "alert alert-sucess">
            <strong>Error: </strong> {{ Session::get('success_message')}}
        </p>
        @endif
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="name" class="form-control" name="email" value="{{ Auth::guard('admin')->user()->email }}" readonly/>
          <label class="form-label" for="form6Example1">Username/Email</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->type}}" readonly/>
          <label class="form-label" for="form6Example2">ADMIN TYPE</label>
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="admin_name" class="form-control" name="admin_name" value="{{Auth::guard('admin')->user()->name}}" />
      <label class="form-label" for="admin_name"> Name</label>
    </div>
  
    <!-- new mobile-->
    <div class="form-outline mb-4">
      <input type="text" id="admin_mobile" class="form-control" name="admin_mobile" value="{{Auth::guard('admin')->user()->mobile}}"/>
      <label class="form-label" for="admin_mobile">Mobile</label>
    </div>

     <!-- new password -->
    <div class="form-outline mb-4">
      <input type="file" id="admin_imaged" class="form-control" name="admin_image"/>
      <label class="form-label" for="admin_image">Admin Image</label>
      @if(!empty(Auth::guard('admin')->user()->image))
      <a href="{{ url('admin/public/'.Auth::guard('admin')->user()->image)}}" target="_blank"> View Image</a>
      @endif
    </div>

  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Update Details</button>
  </form>
    </div>
  </div>
</div>


@endsection