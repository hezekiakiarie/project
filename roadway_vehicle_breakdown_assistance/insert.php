<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['Address']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['Bio'])) {
        
        $username = $_POST['username'];
        $Address = $_POST['Address'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Bio = $_POST['Bio'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "demo";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM request_mechanic WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO request_mechanic(username, Address, gender, email,  phone, Bio) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssssi",$username, $Address, $gender, $email, $phone, $Bio);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>