<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">
        <title>Dashboard</title>
    </head>
    <body>
        <main>

            <h1>Dashboard</h1>

            <div>
                <?php   
                    session_start(); 
                    //$_SESSION['username'] = "";
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        $time = $_SESSION['time'];
                        echo 'Welcome here, ' . $username.'!<br>'.'<br>'.'(last login: '.$time.')';

                        if (isset($_SESSION['stay-logged-in'])) {
                            echo '<br>'.'<br>'.'<i>* You stay logged in</i>';
                        }
                    } else {    
                        header("Location: index.php");
                        exit();
                    }
  
                ?>
            </div>
            <form action="logout.php" method="POST"> 
                <input type="submit" name="logout" value="Logout"> 
            </form> 

            

        </main>
    </body>
</html>