<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111827;
            color: #f9fafb;
        }

        .navbar {
            background: #1f2937;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #2d3748;
        }

        .navbar h2 {
            margin: 0;
            font-size: 18px;
        }

        .logout-btn {
            background: #ef4444;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        .container {
            padding: 30px;
        }

        .card {
            background: #1f2937;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #2d3748;
            max-width: 500px;
        }

        .card h3 {
            margin-top: 0;
        }

        .info {
            margin-top: 10px;
            color: #9ca3af;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <h2>My Dashboard</h2>

        <a class="logout-btn" href="{{ url('/login') }}">Logout</a>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="card">
            <h3>Welcome 👋</h3>

            <p class="info">
                You are successfully logged in as <b>omar</b>.
            </p>

            <p class="info">
                This is your dashboard page.
            </p>
        </div>
    </div>

</body>
</html>