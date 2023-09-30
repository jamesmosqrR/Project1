<!DOCTYPE html>
<html>
<head>
    <title>Registro y Login</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="registro.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Registrarse">
    </form>

    <h2>Login</h2>
    <form action="login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
