@extends('admin.layout.layout')
@section('def')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
        <form method="post" >
  @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="name" class="form-control" name="name" value="{{ $adminDetails['email'] }}" readonly/>
          <label class="form-label" for="form6Example1">USername/Email</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" value="{{ $adminDetails['type'] }}" readonly/>
          <label class="form-label" for="form6Example2">ADMIN TYPE</label>
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="password" id="current_password" class="form-control" name="current_password" />
      <label class="form-label" for="current password"> Current Password</label>
    </div>
  
    <!-- new password -->
    <div class="form-outline mb-4">
      <input type="password" id="new_password" class="form-control" name="new_password"/>
      <label class="form-label" for="new_password">New Password</label>
    </div>

    <div class="form-outline mb-4">
      <input type="password" id="confirm_password" class="form-control" name="new_password" />
      <label class="form-label" for="confirm_password">Confirm Password</label>
    </div>
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">CHANGE PASSWORD</button>
  </form>
    </div>
  </div>
</div>


@endsection