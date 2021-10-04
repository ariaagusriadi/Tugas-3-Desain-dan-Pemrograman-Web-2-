<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login and register</title>
  <link rel="stylesheet" href="{{ url('public/login') }}/style.css">
</head>
<body>
  
  <input type="checkbox" class="reg-btn" id="reg-btn">
  <label for="reg-btn" class="reg-btn-label"><span>Registration</span></label>
  <div class="reg-container" id="nav-cont">
    <div class="input-box-cont">
      <h1 class="heading1">Registration</h1>
      <form action="{{ url ('beranda') }}" class="form-cont" method="get">
        <input type="email" class="input-box" required autocomplete="off" name="email" placeholder="Email" id="email">
        <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Password" id="first-pass">
        <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Repeat password" id="second-pass">
        <input type="submit" value="Registration" class="submit-btn" id="reg-btn-active" >
      </form>
    </div>
  </div>
  <div class="main-container" id="main-cont">
    <div class="input-box-cont">
      <h1 class="heading1"> Login</h1>
      <form action="{{ url ('beranda') }}" class="form-cont" method="get">
        <input type="email" class="input-box" required autocomplete="off" name="email" placeholder="Email">
        <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Password">
        <input type="submit" value="Login" class="submit-btn">
      </form>
    </div>
  </div>
    <script src="{{ url('public/login') }}/scrip.js"></script>r
</body>
</html>