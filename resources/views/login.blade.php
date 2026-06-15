<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f4f4f4;
    }

    .login-container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        width: 320px;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .login-btn {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #007bff;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .login-btn:hover {
        background: #0056b3;
    }

    .footer-text {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .footer-text a {
        color: #007bff;
        text-decoration: none;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <form>
        <div class="input-group">
            <label>Email</label>
            <input type="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>

       <div class="footer-text">
    Don't have an account?
    <a href="/register">Sign Up</a>
</div>
    </form>
</div>

</body>
</html>