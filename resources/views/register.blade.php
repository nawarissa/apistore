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
  <div class="wrapper fadeInDown">
    <div id="formContent">
      @verbatim
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="name">
        <div v-if="name!=''" class="alert alert-danger" role="alert">{{ name }}</div>
        <input type="email" id="email" class="fadeIn second" name="email" placeholder="email">
        <div v-if="email!=''" class="alert alert-danger" role="alert">{{ email }}</div>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" value="">
        <div v-if="password!=''" class="alert alert-danger" role="alert">{{ password }}</div>
        <input type="password" id="c_password" class="fadeIn third" name="c_password" placeholder="repeat password" value="">
        <div v-if="c_password!=''" class="alert alert-danger" role="alert">{{ c_password }}</div>
        <input type="submit" class="fadeIn fourth" value="Sign Up" onclick="sign_up_action(event)">
      </form>

      @endverbatim
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        <a class="underlineHover" href="{{ url('login') }}">Existing User?</a>
      </div>
    </div>
  </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/register.js"></script>
  </body>
</html>
