<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pw'];

    setCookie("username", $username, time() + 3600);

    $tokenCookie = $username;
    //$hash = password_hash('password', PASSWORD_DEFAULT);
    // pw: pass

    $token = '$2y$10$kzZtyaUsqh1G29QOR8h6HuQYBiF5CSMWf/OcfnsYwI5BfPDWvU9Qa';

    if (password_verify("password", $token)) {
        echo "User is logged in";
    } else {
        echo "user is not logged in";
    }

    // echo "<script>console.log('is set and pw is $hash')</script>";
} else {
    echo "<script>" . "console.log('is not set')</script>";
}
?>

<!-- 
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://transliterator.p.rapidapi.com/translit?str=%D9%85%D8%B5%D8%B7%D9%81%D9%89&from=ar&to=en&count=4",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r
    \"key1\": \"value\",\r
    \"key2\": \"value\"\r
}",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: transliterator.p.rapidapi.com",
        "X-RapidAPI-Key: SIGN-UP-FOR-KEY",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="./login.php" method="POST">
        Username <input type="text" name="username" /></br>
        Password <input type="password" name="pw" /></br>
        <input type="submit" name="submit" value="submit" />
    </form>
    <?php
    //echo "<script>" . "console.log('hi')</script>"
    ?>
</body>

</html>