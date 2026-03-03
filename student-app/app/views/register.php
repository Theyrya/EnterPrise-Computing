<style>
body {
    background-color: #FFA500; /* Bright orange */
}
</style>
<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Register</h2>

<form method="POST" action="index.php?action=register">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<a href="index.php">Back to Login</a>
</div>