
<?php

$Username = $_REQUEST['username'];
$Youremail = $_REQUEST['youremail'];
$Yourpassword = $_REQUEST['yourpassword'];

if (isset($_POST['btn'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "vintage";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $insert = "INSERT INTO visitorsinfo VALUES ('$Username', '$Youremail', '$Yourpassword')";

    $result = mysqli_query($conn, $insert);

    if ($result) {
        echo "<h1 style='color:green;'>Your Registration is Done</h1>";
    } else {
        echo "<h1 style='color:red;'>(Your Registration Failed)</h1>";
    }

    mysqli_close($conn);
}
?>


