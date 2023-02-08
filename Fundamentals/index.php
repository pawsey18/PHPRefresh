<?php
include './dbConnect.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentals</title>
</head>

<body>
    <div class="container">
        <h1>Fundamentals</h1>
        <form action="index.php" method="POST">
            <div class="select-menu">
                <h3>Maintain value on postback</h3>

                <?php
                $sql = 'SELECT id, first_name from authors';
                $result = $conn->query($sql);
                ?>
                <select name="authList" id="authList">
                    <option value="0">Select Author</option>
                    <?php
                    $id = 0;
                    if (!empty($_POST['authList'])) {
                        $id = $_POST['authList'];
                    }

                    while ($row = $result->fetch_assoc()) {
                        if ($row['id'] == "$id") {
                            $selected = "selected = 'selected' ";
                        } else {
                            $selected = "";
                        }
                        echo "<option value='" . $row['id'] . "'" . $selected . " >" . $row['first_name'] . "</option>";
                    }
                    $result->close();
                    $conn->close();
                    ?>
                </select>

                <?php

                function longdate($timestamp)
                {
                    return date("l F jS Y", $timestamp);
                }
                echo longdate(time() - 17 * 24 * 60 * 60);

                $id = $_GET['id'];
                echo 'the id is ' . $id;

                $varOne = "1";
                $varOne = 1;
                echo var_dump($varOne);
                echo "hello ", "hi ", "hi ", "hi ", "hello ";
                echo "the person said \"Hello\", also the variable value is $varOne";

                $object = new User;
                print_r($object);
                echo "<br>";

                $object->name = "John";
                $object->password = "pass";
                var_dump($object);
                echo "<br>";

                $object->saveUser();

                class User
                {
                    public $name, $password;

                    function saveUser()
                    {
                        echo "save the user";
                    }
                }
                echo "<br>";
                echo $object->name;
                ?>
            </div>

            <button type="submit">Click me</button>
        </form>

    </div>

</body>

</html>