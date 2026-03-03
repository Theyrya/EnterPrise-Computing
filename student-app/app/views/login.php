<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #FFA500; /* Bright orange */
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Login</h2>

<form method="POST" action="index.php?action=login">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<a href="index.php?action=register">Create Account</a>
</div>

</body>
</html>