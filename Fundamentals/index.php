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

                <?php //echo  "<script>console.log('Debug Objects: " . $id . "' );</script>"; 
                ?>
            </div>

            <button type="submit">Click me</button>
        </form>

    </div>

</body>

</html>