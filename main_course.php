<?php
require 'fetch_data.php';

if (isset($_GET['name'])) {
    $stmt = $pdo->prepare("SELECT Course_name AS name, gramage, price, calories, allergens FROM main_course WHERE Course_name = :name");
    $stmt->execute([':name' => $_GET['name']]);
    $dish = $stmt->fetch();
} else {
    echo "No dish specified.";
    exit;
}

// Example descriptions based on dish names
$descriptions = [
    'Steak and Fries' => 'A hearty main course featuring a juicy steak served with crispy fries.',
    // Add more descriptions as needed
];

$description = $descriptions[$dish['name']] ?? 'A delicious main course to satisfy your hunger.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($dish['name']); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <h1><?php echo htmlspecialchars($dish['name']); ?></h1>
    </nav>
    <div class="dish-details">
        <img src="../Сайт/images/steak.jpg" alt="">
        <p><strong>Gramage:</strong> <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
        <p><strong>Price:</strong> $<?php echo number_format($dish['price'], 2); ?></p>
        <p><strong>Calories:</strong> <?php echo htmlspecialchars($dish['calories']); ?></p>
        <p><strong>Allergens:</strong> <?php echo htmlspecialchars($dish['allergens']); ?></p>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($description); ?></p>
    </div>
</body>
</html>