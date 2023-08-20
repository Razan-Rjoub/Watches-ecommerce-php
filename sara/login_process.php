<?php
include('connection.php');

// Ensure proper error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user submitted the login form
if (isset($_POST['submit_login'])) {
    $Username = $_POST['Username'];
    $password = $_POST['password'];

    // Check if the user exists
    $query_select = "SELECT * FROM customer WHERE Username = ?";
    $stmt_select = $pdo->prepare($query_select);
    $stmt_select->bindParam(1, $Username);
    $stmt_select->execute();
    $row = $stmt_select->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD

    if ($row) { // User exists
        if (password_verify($password, $row['password'])) { // Password verification
            session_start();
            $_SESSION['username'] = $Username;
            $user_id = $row['id'];
            $_SESSION['loginstatus'] = 1;
            
            // Set session variable indicating checkout redirection
            $_SESSION['redirect_to_checkout'] = true;
            
            // Set cookie with expiration
            $expiration = strtotime('+1 month');
            setcookie('userid', $user_id, $expiration, '/');
            
            if ($row['role'] == 1) { // Admin
                header('Location: admin.php');
                exit();
            } else {
                // Redirect to checkout page
                header('Location: ../cart/shoping-cart.php'); // Update with your checkout page URL
                exit();
            }
        } else {
            echo 'Invalid password';
            include('login.php');
        }
=======

    echo $user;
     $expiration = strtotime('+1 month');
        setcookie('userid', $row['id'], time() + $expiration, '/');
    // print_r($row);

}

if ($user > 0) {
    
    session_start();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Assuming $row['password'] is the hashed password
        // $_SESSION['userid'] = $row['id'];
        // $user = $_SESSION['userid'];
        // $session_id = session_id();
       
        // Set session variables
        $_SESSION['username'] = $Username;
        $user = $_COOKIE["userid"];
        $_SESSION['loginstatus'] = 1;
        if ($row['role'] == 1) { // Role 1 (Admin)
            // Redirect to admin page
            header('Location: admin.php');
            exit(); // Make sure to exit after redirecting
        } else {
            if (isset($_SESSION['cart'])) {

                foreach ($_SESSION['cart'] as $product) {
                    $prodid = $product['productid'];
                    $productName = $product['Productname'];
                    $price = $product['price'];
                    $image = $product['image'];
                    $quantity = $product['quantity'];
                    $query = "INSERT INTO cart (quantity, customerid,productid) VALUES ($quantity, $user,$prodid)";
                    $statement = $pdo->prepare($query);
                    $statement->execute();
                }
                unset($_SESSION['cart']);
                setcookie('session_id_cart', '', time() - 3600, '/');
            }
            if (isset($_SESSION['current_url'])) {
                $savedUrl = $_SESSION['current_url'];
               
            } else {
               
            }
            header("Location:$savedUrl");
            exit(); 
        }
          

    } else if ($password != '') {
        echo 'Invalid password';
        include('login.php');
>>>>>>> 69378ef8f9eabf55a8ac1cbb75c7a453305d11fe
    } else {
        echo 'User not found';
        include('login.php');
    }
}

<<<<<<< HEAD
$pdo = null; // Close database connection
?>
=======

$pdo = null;
?>
>>>>>>> 69378ef8f9eabf55a8ac1cbb75c7a453305d11fe
