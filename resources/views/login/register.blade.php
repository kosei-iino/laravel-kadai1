@extends('login.layout')
@section('title','laravel login')
@section('content')
<div class="error">
@if ($errors->any())  
        <ul>  
            @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li>  
            @endforeach  
        </ul>  
    @endif
</div>
<form class="login-form" method="post" action="/register">
    @csrf
    <div class="login-form-title">Register</div>
        <table class="login-form-table">
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" name="name" placeholder="名前を入力してください"></td>
            </tr>
            <tr>
                <td>E-Mail Address</td>
                <td><input type="text" id="email" name="email" placeholder="メールアドレスを入力してください"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" id="password" name="password" placeholder="パスワードを入力してください"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="text" id="confirm_password" name="password_confirmation" placeholder="パスワードを入力してください"></td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <button type="submit" id="btn" name="submit">Register</button>
                </td>
            </tr>
        </table>
    </div>
</form>
@endsection