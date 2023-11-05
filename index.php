<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php
    session_start(); 
    // if(isset($_SESSION['user_authenticated']) && $_SESSION['user_authenticated'] === '1'){

    //     header ('Location: process.php');
    
    // } else if ( $_SESSION['user_authenticated'] != '1' ) {

    //     header ('Location: ..');
    
    // } 
    // echo '<pre>', print_r(get_defined_vars(), true) ?: 'undefined index', '</pre>';
    // Static username and password
   
    $staticUsername = 'root';
    $staticPassword = 'admin';
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        if ($enteredUsername === $staticUsername && $enteredPassword === $staticPassword) {
            
            // echo "Login successful. Welcome, $staticUsername!";
            $_SESSION['user_authenticated'] = true;
  
            if(!empty($_SESSION['user_authenticated'])){
                header('Location: process.php');
                exit();
            }else{
                header('Location: ..');
               
            }
  
            // You can redirect the user to another page or perform other actions here.
        } else {
            echo "Login failed. Please check your username and password.";
        }
    }
    ?>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
