<hr />
<div id="footer" style="text-align:center;">
    <p>
        <a href="index.php" class="spaceLinks">Home</a> |
        <a href="addMember.php" class="spaceLinks">Add Member</a> |
        <a href="members.php" class="spaceLinks">View Members</a> |

    </p>

    <b> Date:</b>
    <?php $date = new DateTime();
    echo date_format($date, ' D  F jS'); ?>
    &nbsp;&nbsp;
    <b>Time:</b> &nbsp;
    <?php
    date_default_timezone_set('America/Halifax');
    $date = date('h:i:sa');
    echo $date;
    ?>
    &nbsp;<b>|</b>&nbsp; <a href="mailto:healthinfo@healthwise.com" style="border:thin solid white;color:black;text-decoration:underline;">Email Us</a>
</div>

</div>
</div>
</form>
</body>

</html>