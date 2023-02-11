<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel課題1</title>
    </head>
    <body>
        <div class="container">
                <div>Laravel</div>
                <div class="change-login">
                    <div class="change-login-btn"><a href="{{ url('/') }}">Login</a></div>
                    <div class="change-login-btn"><a href="{{ url('/register') }}">Register</a></div>
                </div>
        </div>
        <form class="login-form">
            <div class="login-form-title">Register</div>
                <table class="login-form-table">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="name" placeholder="名前を入力してください"></td>
                    </tr>
                    <tr>
                        <td>E-Mail Address</td>
                        <td><input type="text" id="email" placeholder="メールアドレスを入力してください"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" id="password" placeholder="パスワードを入力してください"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="text" id="confirm-password" placeholder="パスワードを入力してください"></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="button" id="btn">Register</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>

<style>
body{
    background: #ccc;
}
.container {
  width: 100%;
  border-bottom: 1px solid;
  display: flex;
  justify-content: space-between;
  margin-bottom:10px;
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
</style>