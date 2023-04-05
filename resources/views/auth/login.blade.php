<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<link rel="stylesheet" href="/csslaundry/login.css">
</head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <div class="logo">
                        <img src="/img/grelaundlogo.png"></a>
                    </div>
                        <form action="{{ route('login') }}" class="form" method="POST">
                                @csrf
                            <h1>Sign in</h1>
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="password"placeholder="Password" /><br>
                            <button type="submit" id="submit">Sign In</button>
                        </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h3>Ayo Segera Kumpulkan Cucian mu di Gre-Laund!</h3>
                    </div>
                    <div class="baju">
                        <img src="/img/pakaian.png"></a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
