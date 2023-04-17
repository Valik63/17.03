<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Premium car rental</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#">Home</a>
                </li>
                <li class="menu-item">
                    <a href="#Cars">Cars</a>
                </li>
                <li class="menu-item">
                    <a href="#Prices">Book a car</a>
                </li>
                <li class="menu-item">
                    <a href="login.php">login</a>
                </li>
                <li class="menu-item">
                    <a href="registration.php">register</a>
                </li>
                <?php if (isset($_SESSION["user"])): ?>
                    <li class="menu-item">
                        <a href="logout.php">logout</a>
                    </li>
                <?php endif; ?>
            </ul>

        </nav>

    </div>
</header>

<section class="main">
    <div class="container">
        <div class="main-info">
            <h1 class="main-title">Premium car rental</h1>
            <div class="main-text">Our club has a solid collection of sports cars - from fairly
                common stock cars to a real racing exclusive. Take the unique
                opportunity to be behind the wheel of a real legend and see what she can do off the race
                track!
            </div>
            <div class="main-action">
                <button class="button" id="main-action">see cars</button>
            </div>
        </div>
    </div>
</section>

<section class="car" id="Cars">
    <div class="container">
        <h2 class="sub-title">Our fleet</h2>
        <div class="car-items">
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/spyder.png" alt="Image 1">
                </div>
                <div class="car-item-title">Lamborghini Huracan Spyder</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>5.2 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2019</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/corvette.png" alt="Image 2">
                </div>
                <div class="car-item-title">Chevrolet Corvette</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>6.2 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2017</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/ferrari.png" alt="Image 3">
                </div>
                <div class="car-item-title">Ferrari California</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>9.3 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2010</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/urus.png" alt="Image 4">
                </div>
                <div class="car-item-title">Lamborghini Urus</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>4.0 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2019</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/audi.png" alt="Image 5">
                </div>
                <div class="car-item-title">Audi R8</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>5.2 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2018</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/camaro.png" alt="Image 6">
                </div>
                <div class="car-item-title">Chevrolet Camaro</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>2.0 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2019</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/Maserati.png" alt="Image 7">
                </div>
                <div class="car-item-title">Maserati Quattroporte</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>3.0 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2018</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/challenger.png" alt="Image 8">
                </div>
                <div class="car-item-title">Dodge Challenger</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>6.4 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2019</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
            <div class="car-item">
                <div class="car-item-image">
                    <img src="img/GTR.png" alt="Image 9">
                </div>
                <div class="car-item-title">Nissan GT-R</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="img/transmission.png" alt="Gear">
                        <div>Transmission</div>
                        <div>machine</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/wheel.png" alt="Wheel">
                        <div>engine</div>
                        <div>3.0 л.с</div>
                    </div>
                    <div class="car-item-point">
                        <img src="img/year.png" alt="Belt">
                        <div>year of issue</div>
                        <div>2019</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button car-button">book a car</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="price" id="Prices">
    <div class="container">
        <h2 class="sub-title">Check price and book</h2>
        <div class="price-text">
            Fill in the details and we will call you back to clarify all the details of the booking
        </div>
        <form action="" class="price-form" method="post">
            <input type="text" class="price-input" id="name" placeholder="Your name" name="name">
            <input type="text" class="price-input" id="phone" placeholder="Your phone" name="phone">
            <input type="text" class="price-input" id="car" placeholder="The vehicle you are interested in" name="car">
            <input type="date" class="price-input" id="date" placeholder="date" name="date">
            <button class="button" type="submit" id="Price-action">find out the price</button>
        </form>

        <?php
        if (empty($_POST) === false) {

            $nameform = $_POST['name'];

            // filter_var()

            $phoneform = $_POST['phone'];
            $carform = $_POST['car'];
            $dateform = $_POST['date'];


            require '../LogReg/database.php';

            $sql = 'INSERT INTO izīrēšana (name, phone, car_model, rented_at)
                    VALUES (?, ?, ?, ?)';


            $statement = $conn->prepare($sql);

            $statement->execute([$nameform, $phoneform, $carform, $dateform]);

            if ($statement->errorCode()) {
                echo $statement->errorCode();
            }

        }
        ?>

        <img src="img/rolls.png" alt="Rolls" class="image">
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="rights">All right's reserved</div>
    </div>
</footer>

<script src="scripts/script.js"></script>
</body>
</html>
