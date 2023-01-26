<?php include "dbConnection.php" ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
    <?php

    // $fizz = 5;
    // $buzz = 3;

    // $count = 100;

    // for ($i = 1; $i <= $count; $i++) {
    //     if (($i % $buzz) && ($i % $fizz) == 0) {
    //         echo "<p>" . "fizzbuzz |" . $i . "</p>";
    //     } else if ($i % $fizz == 0) {
    //         echo "<p>" . "fizz |" . $i . "</p>";
    //     } else if ($i % $buzz == 0) {
    //         echo "<p>" . "buzz |" . $i . "</p>";
    //     } else {
    //         echo "<p>$i</p>";
    //     }
    // }
    //            echo phpinfo();
    // $var = 678;
    // if ("hell"){
    //     jfsdkfj 
    // }
    ?>

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
    // }    
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