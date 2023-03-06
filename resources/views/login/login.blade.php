@extends('login.layout')
@section('title','laravel login')
@section('content')
<form class="login-form">
    <div class="login-form-title">Login</div>
        <table class="login-form-table">
            <tr>
                <td>E-Mail Address</td>
                <td><input type="text" id="email" placeholder="メールアドレスを入力してください"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" id="password" placeholder="パスワードを入力してください"></td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <button type="button" id="btn">Login</button>
                </td>
            </tr>
        </table>
    </div>
</form>
@endsection