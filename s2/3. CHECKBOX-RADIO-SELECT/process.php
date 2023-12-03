<?php // HEADER 
include_once 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $subject[] = isset($_POST['subject']) ? implode(', ', $_POST['subject']) : '';
}
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php if ($gender === 'Male') :
            $imageSrc = include_once __DIR__ . '/images/male.png';
        ?>
            <img src="<?php echo $imageSrc; ?>" alt="Male Picture">
        <?php elseif ($gender === 'Female') :
            $imageSrc = include_once __DIR__ . '/images/female.png';
        ?>
            <img src="<?php echo $imageSrc; ?>" alt="Female Picture">
        <?php endif; ?>
    </div>
</div>

<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        if (isset($_POST['subject'])) {
            foreach ($_POST['subject'] as $subject) {
                echo "<button class='btn bg-info me-2 text-light'>$subject</button>" . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php // FOOTER 
?>