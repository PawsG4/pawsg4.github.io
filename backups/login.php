<?php
    $email = $_POST['email'];
    $password = $_POST['password'];\

    $host = "localhost"; 
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";

    $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if($con->connect_error){
        die("Failed to connect : ". $con-connection_error);
    } else {
        $stmt = $con->prepare("select * from register where email = ?");
        $stmt->bind_param("s", $email);

        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0 ) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password ){
                echo "<h2> Login Successfully </h2>";
            }
        } else {
            echo "<h2> Invalid Email or Password </h2>";
        }
    }
       else {echo "All field are required";
    die();
    
?>
