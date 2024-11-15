<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pandawa 87</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/5.png') }}">

        <!-- Styles -->
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
    
}

body {
    background:rgba(0, 0, 0, .65) url({{ Vite::asset('resources/images/6.jpg') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: darken;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 50px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
    color: #fff;
    
}

.che{
    width: 4%;
}

.logo {
    font-size: 2.5em;
    color: #d2d2d2;
    user-select: none;
}

.logo2 {
  color: #ff3465;
  font-weight: 500;
}

.navigation a {
    position: relative;
    font-size: 1.1em;
    color: #ffff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}



.navigation .btnLogin-popup {
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #ffff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #ffff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}

.navigation .btnLogin-popup:hover {
    background: #ffff;
    color: #162938;
}

.wrapper{
    width: 420px;
    height: 420px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(15px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 0px;
    padding: 30px;
  }
  
  .wrapper h1 {
    font-size: 40px;
    text-align: center;
  }
  
  .wrapper .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
    background: transparent;
  }
  
  .input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 5px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }
  
  .input-box input::placeholder {
    color: #fff;
  }
  
  .input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
  }
  
  .wrapper .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  
  .remember-forgot label input {
    accent-color: #fff;
    margin-right: 3px;
  }
  
  .remember-forgot a {
    color: #fff;
    text-decoration: none;
  }
  
  .remember-forgot a:hover {
    text-decoration: underline;
  }
  
  .wrapper .btn {
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
  
  .wrapper .btn:hover{
    background-color: #41608f;
    color: #fff;
    transition: 0.3s;
  }
  
  .wrapper .register-link {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
  }
  
  .register-link p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
  }
  
  .register-link p a:hover {
    text-decoration: underline;
  }

  .wrapper1{
    width: 420px;
    height: 420px;
    background: #41608f;
    border: px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(15px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, .2);
    color: #1e1e1e;
    border-radius: 0px;
    padding: 30px;
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
  }

  .wrapper1 h1{
    font-size: 45px;
    
  }

  .wrapper1 h1 p{
    font-size: 20px;
    font-weight: 10px;
  }

  .wrapper1 img{
    width: 100%;
  }
        </style>
    </head>
    <body>
    <header>
        <h1 class="logo">Pandawa<span class="logo2">87</span>.</h1>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    
    <div class="wrapper1">
        <img src="{{ Vite::asset('resources/images/10.png') }}" alt="">
    </div>
    
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password"required>
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
    

    
</body>
</html>
