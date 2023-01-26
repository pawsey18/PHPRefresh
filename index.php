<?php include "dbConnection.php" ?>

<html lang="en">

<head>
    <title>PHP Refresher</title>
</head>

<body>
    <?php
    $sql = "select * from authors";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0){
    //     // output data for each row
    //     while ($row = $result->fetch_array())

    if ($result = mysqli_query($conn, $sql)) {
        while ($obj = mysqli_fetch_object($result)) {
            printf("%s (%s)\n", $obj->first_name, $obj->last_name);
            echo "<br>";
        }
        mysqli_free_result($result);
    }

    if (mysqli_close($conn)) {
        echo "connection closed";
    }

    $str = 'áéóú';
    echo mb_detect_encoding($str);

    echo "<br>";

    // Specify "encodings" parameter by list separated by comma
    echo mb_detect_encoding($str, "JIS, eucjp-win, sjis-win");

    echo "<br>";

    // Use array to specify "encodings" parameter
    $encodings = [
        "ASCII",
        "JIS",
        "EUC-JP"
    ];
    echo mb_detect_encoding($str, $encodings);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo 'this is a simple string';
    echo "<br>";

    echo 'You can also have embedded newlines in
    strings this way as it is
    okay to do';
    echo "<br>";
    // Outputs: Arnold once said: "I'll be back"
    echo 'Arnold once said: "I\'ll be back"';
    echo "<br>";
    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\\*.*?';

    echo "<br>";
    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\*.*?';
    echo "<br>";
    // Outputs: This will not expand: \n a newline
    echo 'This will not expand: \n a newline';
    echo "<br>";
    // Outputs: Variables do not $expand $either
    echo 'Variables do not $expand $either';
    ?>
    <a href="login.php">Login Cookie</a>
</body>

</html>