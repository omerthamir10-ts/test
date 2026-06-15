<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f4f4f4;
        }

        .container{
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
            width:350px;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:14px;
        }

        .register-btn{
            background:#28a745;
            color:white;
            margin-bottom:10px;
        }

        .register-btn:hover{
            background:#218838;
        }

        .cancel-btn{
            background:#dc3545;
            color:white;
        }

        .cancel-btn:hover{
            background:#c82333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register here</h2>

        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>

            <button type="submit" class="register-btn">Register</button>

            <!-- Cancel button -->
            <button type="button" class="cancel-btn" onclick="window.location.href='/'">
                Cancel & Return to Login
            </button>
        </form>
    </div>
</body>
</html>