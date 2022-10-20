<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .head {
            background-color: white;
            padding: 5px 20px;
            height: 80px;
            margin: -10px -10px;
            border-right: 5px solid rgb(104, 56, 56);
            border-bottom-right-radius: 10000px;
            width: 300px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .home {
            background-color: black;
            color: aliceblue;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            position: relative;
            top: 20px;
            border: 2px solid black;
            padding: 10px 30px;
            margin: -20px -10px;
        }

        .item {
            border-radius: 20px;
            text-align: center;
            color: white;
        }

        .heading:hover {
            color: black;
        }

        .item:hover {
            background-color: white;

        }

        .heading {
            color: white;
            text-decoration: none;
        }

        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .facilities {
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0%;
        }

        .home1 {
            display: flex;
            font-size: 30px;
            justify-content: left;
            align-items: center;
            color: white;
            height: 350px;
            width: 1455px;
            text-shadow: 1px 1px 8px white;
            background-image: url("backgrond1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .atag {
            text-decoration: none; 
            padding: 5px;
            margin: 3px;
            color: white;
            background-color: black;
            border-radius: 20px;
            font-size: 19px;

        }

        .view {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 270px;
            border: 1px solid black;
            background-color: rgba(230, 236, 240, 0.763);
            margin: 70px;
            border-radius: 30px;
        }

        .transfer {

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 270px;
            border-radius: 30px;
            border: 1px solid black;
            background-color: rgba(230, 236, 240, 0.763);
            font-family: 'Times New Roman', Times, serif;
            margin: 70px;


        }

        .checkbalance {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 270px;
            border-radius: 30px;
            border: 1px solid black;
            background-color: rgba(230, 236, 240, 0.763);
            font-family: 'Times New Roman', Times, serif;
            margin: 70px;

        }

        #but:hover {
            background-color: rgb(64, 117, 151);

        }
    </style>
</head>

<body>
    <header>
        <div class="head">
                <h1>The Spark Bank</h1>
        </div>
    </header>
    <div class="home">
        <div class="item"> <a href="index.php" class="heading"> Home </a></div>
        <div class="item"> <a href="view.php" class="heading">View all customer </a> </div>
        <div class="item"> <a href="transfer.php" class="heading"> Tranfer </a></div>
        <div class="item"> <a href="transaction.php" class="heading">Transaction </a> </div>
        <div class="item"> <a href="contact.php" class="heading"> Contact us </a></div>
        <div class="item"><a href="about.php" class="heading"> About us </a></div>
    </div>

    <div class="home1">
        <br>
        <h1 style="position:relative; left: 880px;">Welcome To<br><br> The Spark Bank</h1>
    </div>

    <h1 style="text-shadow:3px 3px 15px black; color:white; font-size: 50px;text-align: center;"><b>Our Facilities</b>
    </h1>
    <section class="facilities">
        <div class="view">
            <div><img src="customer1.jpg" width="200px" alt=""> </div>
            <!-- <input type="button" id="but"
                            value="Tap to all view customer"> -->
            <a class="atag" href="view.html" id="but">Tap to all view customer</a>
            <h4 style="text-align: center;">Here,you can see detail of every customer of the bank</h4>
        </div>
        <div class="transfer">
            <div><img src="money.jpg" width="200px" height="200px" alt=""></div>
            <!-- <input type="button"
                            value="tranfer money"  onclick="window.location transfer.html" id="but"> -->
            <a class="atag" href="transfer.html" id="but">Tranfer money</a>
            <h4 style="text-align: center;">Here,you can send money from your bank </h4>
        </div>
        <div class="checkbalance">
            <div><img src="ch.png" width="200px" height="200px" alt=""></div>
            <!-- <input type="button" value="Check balance"
                            id="but"> -->
            <a class="atag" href="checkbalance.html" id="but">Check balance</a>
            <h4 style="text-align: center;">Here you can check the balance of your account</h4>
        </div>
    </section>
</body>
</html>