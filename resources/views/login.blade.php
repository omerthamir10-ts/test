<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1f2937, #111827);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #1f2937;
            padding: 40px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            text-align: center;
            border: 1px solid #2d3748;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #f9fafb;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #374151;
            border-radius: 8px;
            outline: none;
            background: #111827;
            color: #f9fafb;
            transition: 0.3s;
        }

        .login-box input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 5px rgba(59,130,246,0.4);
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: 0.3s;
        }

        .login-box button:hover {
            background: #2563eb;
        }

        .login-box a {
            display: block;
            margin-top: 15px;
            color: #60a5fa;
            text-decoration: none;
            font-size: 14px;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

        .error {
            color: #f87171;
            font-size: 13px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Login</h2>

    <form onsubmit="return loginCheck(event)">
        <input type="text" id="user" placeholder="Username">
        <input type="password" id="pass" placeholder="Password">

        <button type="submit">Login</button>

        <div class="error" id="errorMsg"></div>
    </form>

    <a href="{{ url('/register') }}">Create new account</a>
</div>

<script>
function loginCheck(event) {
    event.preventDefault();

    let user = document.getElementById("user").value;
    let pass = document.getElementById("pass").value;
    let error = document.getElementById("errorMsg");

    if (user === "omar" && pass === "1234") {
        error.innerText = "";
        window.location.href = "{{ url('/dashboard') }}";
    } else {
        error.innerText = "Invalid username or password";
    }
}
</script>

</body>
</html>