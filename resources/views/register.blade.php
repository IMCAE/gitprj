@extends('master')
@section('change')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="/style.css">
  </head>

  <body>
    <form class="signup-form" action="/register" method="post">

      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      <div class="form-body">

        <div class="horizontal-group">
          <div class="form-group left">
            <label for="username" class="label-title">Username *</label>
            <input type="text" id="username" class="form-input" placeholder="enter your username" required="required" />
          </div>
         
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" class="form-input" placeholder="enter your password" required="required">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="confirm-password" placeholder="enter your password again" required="required">
          </div>
        </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
        </div>


      <div class="form-footer">
        <span>* required</span>
        <button type="submit" class="btn">Create</button>
      </div>
    </div>
    </form>

    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

	<div class="footer" >  
        @Copyright 2023- Your Choco Zone
    </div>
@endsection
</body>
</html>