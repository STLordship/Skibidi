<?php require 'fetch_data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <h1>Menu</h1>
    </nav>
    <div id="menu">
        <div class="menu-container">
            <div class="menu-section">
                <h2>Appetizers</h2>
                <?php foreach ($appetizers as $dish): ?>
                <div class="menu-item">
                    <img src="../Сайт/images/Appetizer.jpg" alt="">
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo htmlspecialchars($dish['price']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="menu-section">
                <h2>Soups</h2>
                <?php foreach ($soups as $dish): ?>
                <div class="menu-item">
                    <img src="../Сайт/images/soup.webp" alt="">
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo htmlspecialchars($dish['price']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="menu-section">
                <h2>Main Courses</h2>
                <?php foreach ($main_courses as $dish): ?>
                <div class="menu-item">
                    <img src="../Сайт/images/steak.jpg" alt="">
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo htmlspecialchars($dish['price']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>