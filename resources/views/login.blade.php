<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
  </head>
  <body>
    <img src="/images/spinning-circles.svg" />
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" value="">
        <div v-if="error!=''" class="alert alert-danger" role="alert">@{{ error }}</div>
        <input type="submit" class="fadeIn fourth" value="Log In" onclick="login_action(event)">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        <a class="underlineHover" href="{{ url('register') }}">New User?</a>
      </div>
    </div>
  </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/login.js"></script>
  </body>
</html>
