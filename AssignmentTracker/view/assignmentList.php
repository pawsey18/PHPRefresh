<?php include('view/header.php'); ?>
<section id="list" class="list">
    <header class="listRow listHeader">
        <h1>Assignments</h1>
        <form action="." method="GET" id="listHeaderSelect" class="listHeaderSelect">
            <input type="hidden" name="action" value="listAssignments">
            <select name="courseID" required>
                <option value="0">View all</option>
                <?php foreach ($courses as $course) : ?>
                    <?php if ($courseID == $course['courseID']) { ?>
                        <option value="<?= $course['courseID'] ?>" selected>
                        <?php } else { ?>
                        <option value="<?= $course['courseID'] ?>" <?php } ?> <?= $course['courseName'] ?> </option>
                        <?php endforeach; ?>
            </select>
            <button class="add">Go</button>
        </form>
    </header>
</section>
<?php include('view/footer.php'); ?>