<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">
        <title>PHP 3</title>
    </head>
    <body>
        <main>
            <form action="login.php" method="POST">
                <input type="text" name="name" placeholder="name">
                <input type="password" name="password" placeholder="password">
                <div>
                    <input type="checkbox" name="stay-logged-in" value=true>
                    <label for="stay-logged-in">Stay logged in</label> 
                </div>
                <input type="submit" value="Login">
            </form>
        </main>
    </body>
</html>