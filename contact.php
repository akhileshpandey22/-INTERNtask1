<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check balance || The spark bank</title>
    <style>
        body {

            font-family: 'Times New Roman', Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 650px;
            flex-direction: column;
            color: white;
            margin: 0px;
            padding: 0%;
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

        .heading {
            border-right: 1px solid white;
            border-bottom-right-radius: 65px;
            width: 400px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .transfer {

            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid rgb(253, 252, 252);
            height: 500px;
            width: 400px;
            border-radius: 45px;
            box-shadow: 3px 3px white;
            background-image: url("background2.jpg");
            background-size: 1000px;
        }

        input {
            margin: 8px;
            margin-top: 0%;
            padding: 5px;
            border-radius: 7px;
        }

        textarea {
            margin: 8px;
            margin-top: 0%;
            padding: 5px;
            border-radius: 7px;
        }

        input[type="submit"] {
            margin-top: 40px;
            font-size: larger;
            padding: 10px;
            border: 2px solid white;
            width: 100px;
            font-weight: bold;

        }

        input[type="submit"]:hover {

            background-color: rgb(174, 169, 169);
        }


        label {
            font-size: larger;
        }
    </style>
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
        <h1>Contact us </h1>
    </div>
    <div class="transfer">
        <form action="contactus.php" method="POST">
            <label for="select">Enter your name</label>
            <br>
            <input type="text" name="name" id="">

            <br>
            <label for="email">Enter your email</label>
            <br>
            <input type="email" name="email" id="">

            <br>
            <label for="msg">Enter message</label>
            <br>
            <textarea name="message" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Send">
        </form>
    </div>
    <?php 
$servername ="localhost";
$username ="root";                                                                                                                                                                                                                                                                                                                                                                                                             
$password = "";
$database ="sparkbank";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}
else{
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`Name`, `Email`, `message`) VALUES ('$name', '$email', '$msg' );";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}php


</body>

</html>