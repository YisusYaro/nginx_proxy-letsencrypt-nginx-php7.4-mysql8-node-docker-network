<?php 
    phpinfo();

    $conn = mysqli_connect("mysql8-container", "root", "secret", "db");

    if (!$conn) {
        echo "Error: Connection failed." . PHP_EOL;
        echo "errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Connected successfully" . PHP_EOL;
    echo "Host: " . mysqli_get_host_info($conn) . PHP_EOL;

    mysqli_close($conn);

?>