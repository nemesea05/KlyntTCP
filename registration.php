<?php 
include 'db.php';

if(isset($_POST['signUp'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo
        "<script type='text/javascript'>
                    alert('Email Address already exists!');
                     window.location.href = 'LoginPage.php'; 
        </script>";
    } else {
        
        $insertQuery = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        if($conn->query($insertQuery) === TRUE){
            echo "<script type='text/javascript'>
                    alert('Registration Successful! Proceed to Log In!');
                    window.location.href = 'LoginPage.php'; 
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['logIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check_sql = "SELECT * FROM users WHERE email='$email'";
    $email_check_result = $conn->query($email_check_sql);

    if ($email_check_result->num_rows > 0) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            $first_name = $row['first_name'];

            echo "<script type='text/javascript'>
                    alert('Welcome $first_name to The Project! Enjoy Your Shopping!');
                    window.location.href = 'LandPage.html'; 
                  </script>";
            exit();
        } else {
            echo "<script type='text/javascript'>
                    alert('Incorrect email or password!');
                    window.location.href = 'LoginPage.php'; 
                  </script>";
        }
    } else {
        echo "<script type='text/javascript'>
                alert('No account found! Register to login!');
                window.location.href = 'LoginPage.php'; 
              </script>";
    }
}

    
?>
