<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
?>

<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['subject'])) {
            foreach ($_POST['subject'] as $subject) {
                $randomColor = $colors[array_rand($colors)];
                echo "<button class='btn bg-$randomColor me-2 text-light'>$subject</button>";
            }
        }
        ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>