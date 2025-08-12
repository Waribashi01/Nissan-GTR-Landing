<?php
// Optional: You can set variables for car details
$carName = "NISSAN GT-R";
$carTagline = "Drive the Future";
$carDescription = "The Nissan GTR delivers thrilling speed, sharp precision, and bold design — a true icon built for those who demand performance.";
$ctaText = "Book a Test Drive";
$features = [
    "Twin-turbocharged 3.8L V6 engine",
    "565 horsepower with lightning-fast acceleration",
    "Advanced all-wheel-drive system",
    "Premium interior with carbon fiber trim",
    "State-of-the-art infotainment system"
];
$specs = [
    "Horsepower" => "565 HP",
    "Torque" => "467 lb-ft",
    "Top Speed" => "315 km/h",
    "0-100 km/h" => "2.9 seconds",
    "Drivetrain" => "All-Wheel Drive"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $carName; ?> - Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        header p {
            margin: 5px 0;
            font-size: 1.2em;
        }
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            gap: 40px;
        }
        .description {
            max-width: 500px;
        }
        .description p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        .features {
            margin-top: 20px;
        }
        .features h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
            border-bottom: 2px solid #000;
            display: inline-block;
            padding-bottom: 5px;
        }
        .features ul {
            list-style: none;
            padding: 0;
        }
        .features ul li {
            padding: 8px 0;
            border-bottom: 1px solid #ccc;
        }
        .specs {
            margin-top: 20px;
        }
        .specs table {
            width: 100%;
            border-collapse: collapse;
        }
        .specs th, .specs td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        .gallery {
            background-color: #f9f9f9;
            padding: 30px 20px;
            text-align: center;
        }
        .gallery img {
            width: 250px;
            height: auto;
            margin: 10px;
            border: 3px solid #000;
        }
        .contact {
            padding: 30px 20px;
            background-color: #eee;
            text-align: center;
        }
        .contact input, .contact textarea {
            width: 80%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #aaa;
            border-radius: 5px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #000;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #444;
        }
        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 15px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $carName; ?></h1>
    <p><?php echo $carTagline; ?></p>
</header>

<section class="hero">
    <img src="GTR.jpg" alt="<?php echo $carName; ?>">
    <div class="description">
        <p><?php echo $carDescription; ?></p>

        <div class="features">
            <h3>Key Features</h3>
            <ul>
                <?php foreach ($features as $feature): ?>
                    <li><?php echo $feature; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="specs">
            <h3>Performance Specs</h3>
            <table>
                <?php foreach ($specs as $label => $value): ?>
                    <tr>
                        <th><?php echo $label; ?></th>
                        <td><?php echo $value; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <a href="#contact" class="btn"><?php echo $ctaText; ?></a>
    </div>
</section>

<section class="gallery">
    <h3>Image Gallery</h3>
    <img src="GTR1.jpg" alt="Nissan GTR Front View">
    <img src="GTR2.jpg" alt="Nissan GTR Side View">
    <img src="GTR3.jpg" alt="Nissan GTR Rear View">
</section>

<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $carName; ?>. All Rights Reserved.
</footer>

</body>
</html>
