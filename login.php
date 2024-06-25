<?php 
$users = [
    "admin" => "123",
    "user1" => "111",
    "user2" => "222"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $pass = test_input($_POST["password"]);

    $stayLogged = false;
    if (isset($_POST['stay-logged-in'])) $stayLoggedIn = true;

    if (!empty($name) && !empty($pass)) {
        checkLoginData($name, $pass, $users, $stayLoggedIn);
    } else  tryAgain("Username and password are required");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkLoginData($name, $pass, $users, $stayLoggedIn) {
    if (array_key_exists($name, $users) && $users[$name] == $pass) {

        session_start();
        $_SESSION['username'] = $name;
        $_SESSION['stay-logged-in'] = $stayLoggedIn;
        $_SESSION['time'] = date("h:i");

        header("Location: dashboard.php");
        exit();
    }
    else {
        tryAgain("Invalid username or password");
    }
}

function tryAgain($message) {
        echo $message."<br>"
        ."<a href='/demo/index.php'>Try again</a>";
}


?>