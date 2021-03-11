<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('/css/login-page.css') }}">
    <script src="login-page.php"></script>
</head>

<body>
    <main id="main-holder">
        <h1 id="login-header">Login</h1>
        <div id="login-error-msg-holder">
            <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
        </div>

        <form id="login-form" action="{{ route('login.store') }}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
            <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
            <input type="submit" value="Login" id="login-form-submit">
            <p id="register-gate"> <a href="{{ route('register') }}" title="Sign up for get full access">Create an
                    Account</a> </p>
        </form>
    </main>
</body>

</html>
