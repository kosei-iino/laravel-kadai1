<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      @include('home.header')
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

<style>
body{
    background: #ccc;
}
header {
  width: 100%;
  border-bottom: 1px solid;
  display: flex;
  justify-content: space-between;
  margin-bottom:10px;
}
.container {
}
.change-login {
  display: flex;
  justify-content: space-between;
}
.change-login-btn {
  padding-left:10px;
}
.change-login-btn:hover {
  filter: opacity(80%);
  cursor: pointer;
}
.login-form{
    width:80%;
    margin:auto;
    background: #fff;
}
.login-form-title{
    background: #e8e8e8;
}
.login-form-table{
    margin:auto;
}
.error{
  color:#F00;
}
</style>