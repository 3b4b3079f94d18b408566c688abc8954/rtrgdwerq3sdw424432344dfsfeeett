 <?php
    $servername = "localhost";
    $username = "shippin1_shipping";
    $password = "UQKDYv]8n.?a";
    $dbname = "shippin1_shipping";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>