<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        
        <h1>Login</h1>

        <form action="index.php" method="POST">
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            </div>
            <input type="submit">
        </form>
        
        <a href="register.php">Créer un compte</a>
        
    </body>
</html>
