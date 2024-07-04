<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel11-Multi-Auth</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'figtree', sans-serif;
        }

        .glass-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            color: black;
            margin: 0;
            padding: 20px;
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: black;
        }

        .navbar .links {
            display: flex;
            gap: 10px;
        }

        .navbar .links a {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.3);
            color: black;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .navbar .links a:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">MultiAuth</div>
        <div class="links">
            <a href="{{ route('account.login') }}">Login</a>
            <a href="{{ route('account.register') }}">Register</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="glass-container">
        <h1>Hi, This is Laravel11 Multi Auth Project</h1>
    </div>
</body>

</html>
