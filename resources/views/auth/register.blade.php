<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('/css/register-page.css') }}">
</head>

<body>
    <main id="main-holder">
        <h1 id="register-header">Sign Up</h1>
        <form action="{{ route('register.store') }}" method="POST" id="register-form">
            @csrf
            @method('POST')
            <input type="text" name="fullname" class="register-form-field" id="full-input" placeholder="Full Name"
                required>
            <input type="text" name="username" class="register-form-field" id="username-input" placeholder="Username"
                required>
            <input type="email" name="email" class="register-form-field" id="email-input" placeholder="Email" required>
            <input type="password" name="password" class="register-form-field" id="password-input"
                placeholder="Password" required>
            <input type="text" name="phone" class="register-form-field" id="phone-input" placeholder="Phone Number"
                required>
            <input type="date" name="birth" class="register-form-field" id="birth-input" placeholder="Birth Date"
                required>
            <button type="submit" id="register-form-submit">Sign Up</button>
        </form>
        <div class="container singin">
            <p>Alredy have an account? <a href="{{ route('login') }}" title="Sign in for full access">Sign in</a> </p>
        </div>
    </main>
</body>

</html>
