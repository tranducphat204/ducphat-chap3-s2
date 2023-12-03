<?php // HEADER 
include_once 'index.php'
?>
<ul class="list-group">
    <?php
    // YOUR CODE HERE
    ?>
    <li class="list-group-item"><?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></li>
</ul>
<?php // FOOTER 
?>