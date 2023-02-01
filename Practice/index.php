<html>
<?php
$pageTitle = 'Home';
include
    'includes/openConnection.php';
'includes/header.php';
?>

<?php
$sql = "SELECT * FROM  articles";
$result = $conn->query($sql);
?>

<body>
    <form name="articles" method="POST" action="index.php">
        <div class="container">
            <div class="wrapper">
                <div class="header">
                    <img src="images/logo.png" alt="logo" />
                </div>
                <div class="col1">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['articleList'] != 0) {
                        $artID = $_POST['articleList'];

                        $sql2 = "SELECT * FROM articles where id = $artID order by id desc";
                        $result2 = $conn->query($sql2);

                        while ($row = $result2->fetch_assoc()) {
                            $postID = $row['id'];
                            $title = $row['article_name'];
                            $articleText = $row['article_contents'];
                            $postDate = $row['created_at'];
                            $date = date('F j, Y', strtotime($postDate));
                            $time = date('g:i A', strtotime($postDate));
                    ?>
                            <div class="container bg-dark text-light mb-2 p-1">
                                <div class="row">
                                    <div class="col-6">
                                        <strong>ID: </strong> <?php echo $postID ?> <br>
                                        <strong>Creation Date: </strong> <?php echo $date . " " . $time ?> <br>
                                        <strong>Article Name: </strong> <?php echo $title; ?> <br><br>
                                        <?php echo $articleText; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="container bg-dark text-light mb-2 p-1">
                            <div class="row">
                                <div class="col-8">
                                    <h3>Start getting healthy</h3>
                                    <p>View our health and fitness articles. Choose from the select menu
                                        <br>
                                        Thanks for visiting
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="col2">
                    <div class="colHeader">ABC Health Articles</div>
                    <div class="colFooter">ABC Health is known for having the best collection of health and fitness articles. Read the latest:
                        <br>
                        <div class="center" style="text-align:center;">
                            <select name="articleList" id="articleList">
                                <option value="0">Select</option>
                                <?php
                                $id = 0;

                                if (!empty($_POST['articleList'])) {
                                    $id = $_POST['articleList'];;
                                }

                                while ($row = $result->fetch_assoc()) {
                                    if ($row['id'] == $id) {
                                        $selected = "selected='selected'";
                                    } else {
                                        $selected = "";
                                    }
                                ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>>
                                        <?php echo $row['article_name']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="submit" />
            </div>
        </div>
    </form>
</body>

</html>