<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: black;
            color: white;
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            backdrop-filter: blur(5px);
            height: 100%;
        }

        header {
            background-color: black;
            display: flex;
            border-bottom: 1px solid white;
        }

        .heading {
            border-right: 1px solid white;
            border-bottom-right-radius: 65px;
            width: 400px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 15px;
            margin-top: 40px;
            margin-left: 40px;
            width: 1200px;

        }

        .atag {
            text-decoration: none;
            padding: 5px;
            margin: 3px;
            color: white;
            border-radius: 10px;
            font-size: 19px;

        }

        .atag:hover {
            background-color: white;
            color: black;
        }

        .ultag {
            display: flex;
            list-style-type: none;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 3px 3px 15px black;
            background-image: url("background2.jpg");
            background-size: 1000px;
            width: 400px;
            border-radius: 45px;
            box-shadow: 3px 3px white;
            flex-direction: column;
        }

        img {
            height: 300px;
            width: 250px;
            margin: 20px;
            border-radius: 20px;
        }
    </style>
    <title>About us - Sparks Bank</title>

</head>

<body>
    <header>
        <div class="heading">
            <h1 style="color: white;">The Spark Bank</h1>
        </div>
        <nav class="navigation">
            <ul class="ultag">
                <li> <a class="atag" href="index.php">Home</a> </li>
                <li> <a class="atag" href="view.php">View all customer</a> </li>
                <li> <a class="atag" href="transfer.php">Tranfer Money</a> </li>
                <li> <a class="atag" href="transaction.php">Transactions</a> </li>
                <li> <a class="atag" href="contact.php">Contact us</a> </li>
                <li> <a class="atag" href="about.php">About us</a> </li>
            </ul>
        </nav>
    </header>
    <div>
        <h1>About us </h1>
    </div>
    <div class="container">
        <img src="me1.jpg" alt="">
        <h1>Akhilesh pandey</h1>

        <h3>Intern at Spark foundation</h3>
        <h3>Global natural care sangathan <br>group of institution </h3>
    </div>
</body>

</html>