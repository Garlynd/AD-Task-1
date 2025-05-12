<?php
$teamMembers = [
    ["name" => "Mark", "image" => "assets/img/Mark.jpg"],
    ["name" => "Peter", "image" => "assets/img/Peter.jpg"],
    ["name" => "Lance", "image" => "assets/img/Lance.webp"],
    ["name" => "Julian", "image" => "assets/img/Julian.jpg"]
];

$bikes = [
    ["model" => "Specialized Tarmac SL7", "image" => "assets/img/tarmac.jpg"],
    ["model" => "Canyon Aeroad CF SLX", "image" => "assets/img/aeroad.jpg"],
    ["model" => "Trek Émonda SLR", "image" => "assets/img/emonda.webp"],
    ["model" => "Giant Propel Advanced", "image" => "assets/img/propel.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ineos Cycling Team</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    </style>
</head>
<body>
    <?php include 'components/nav.component.php'; ?>

    <section class="hero">
    <div class="hero-overlay">
        <h1>Where Passion Meets Pavement</h1>
    </div>
</section>

    <?php
        include 'utils/Message.util.php';
    ?>
    <h1><?php echo $welcomeMessage; ?></h1>

    <h2>Meet Our Riders</h2>
    <div class="gallery">
        <?php foreach ($teamMembers as $member): ?>
            <div class="card">
                <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                <p><?php echo $member['name']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Our Road Bikes</h2>
    <div class="gallery">
        <?php foreach ($bikes as $bike): ?>
            <div class="card">
                <img src="<?php echo $bike['image']; ?>" alt="<?php echo $bike['model']; ?>">
                <p><?php echo $bike['model']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include 'components/footer.component.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>