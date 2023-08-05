@extends('master')
@section('loginc')
<link rel="stylesheet" type="text/css" href="/login1.css">

@section('change')
  <div class="login-box">
  <h2><div><em><strong>Login Choco zone</strong></em></div></h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    <a href="/chocolates">

      Submit
    </a>
  </form>
</div>

@endsection