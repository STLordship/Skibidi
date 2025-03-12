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
                    <a href="../Сайт/appetizers.php"><img src="../Сайт/images/Appetizer.jpg" alt=""></a>
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo number_format($dish['price'], 2); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="menu-section">
                <h2>Soups</h2>
                <?php foreach ($soups as $dish): ?>
                <div class="menu-item">
                    <a href="../Сайт/soups.php"><img src="../Сайт/images/soup.webp" alt=""></a>
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo number_format($dish['price'], 2); ?></p>
                </div>
                <?php endforeach; ?>
            </a>
            </div>

            <div class="menu-section">
                <h2>Main Courses</h2>
                <?php foreach ($main_courses as $dish): ?>
                <div class="menu-item">
                    <a href="/main_course.php"><img src="../Сайт/images/steak.jpg" alt=""></a>
                    <h3><?php echo htmlspecialchars($dish['name']); ?></h3>
                    <p>Gramage: <?php echo htmlspecialchars($dish['gramage']); ?>g</p>
                    <p class="price">Price: $<?php echo number_format($dish['price'], 2); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            </a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
