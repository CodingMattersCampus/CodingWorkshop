<form method="POST" action="{{route('login.submit')}}">
    @csrf
    <input type="text" name="username" >
    <input type="password" name="password">
    <button type="submit" id="login-button">LOGIN</button>
</form>
