<!DOCTYPE HTML>
<html>
<head>
  <title>Message Sent</title>
</head>

<body>
    <?php
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Create connection
        $conn = new mysqli('localhost', 'root', '', 'sparkyrose');

        // Check connection
        if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO messages (full_name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $full_name, $email, $message);
            if ($stmt->execute()) {
                echo "Message Sent Successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    ?>
</body>
</html>