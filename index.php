<?php
$con = mysqli_connect("localhost", "root", "") or die("unable to connect");
mysqli_select_db($con, "student");

?>


<html>

<style>
    .navcolor {
        background-color: black;
        width: 100%;
        height: 55px;
        position: absolute;
        top: 0;
        left: 0;
    }

    .search {
        color: lightseagreen;
        position: absolute;
        left: 10px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .images {
        color: white;
        position: absolute;
        left: 70px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .maps {
        color: white;
        position: absolute;
        left: 170px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .play {
        color: white;
        position: absolute;
        left: 235px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .youtube {
        color: white;
        position: absolute;
        left: 320px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .gmail {
        color: white;
        position: absolute;
        left: 435px;
        top: 12px;
        font-size: 20px;
        text-decoration: none;

    }

    .search:hover,
    .images:hover,
    .maps:hover,
    .play:hover,
    .youtube:hover,
    .gmail:hover {
        background-color: grey;
    }
</style>

</head>

<body>
    <div class="navcolor">

        <a class="search" href="#">VIT</a>
        <a class="images" href="#">Homepage</a>

        <a class="play" href="#">About Us</a>
        <a class="youtube" href="#">VIT chennai</a>
        <a class="gmail" href="#">Vit Vellore</a>

    </div>
</body>
<br><br><br><br>
<!-- forms ------------------------------------->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <form id="form" class="form" action="send.php" method="post">
            <h2>Hello VITIANS fill these details!</h2>
            <div class="form-control">
                <label for="username">Candidate Name</label>
                <input type="text" id="username" placeholder="Enter name" name="user" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="depart">Department</label>
                <input type="text" id="dp" placeholder="Enter department" name="department" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="catagory">Category</label>
                <input type="text" id="category" placeholder="Enter category" name="cat" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="dayb">Day Boarder or Hosteller</label>
                <input type="text" id="dayb" placeholder="Enter yes or no" name="dboard" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="hostel">Hostel block</label>
                <input type="text" id="hb" placeholder="Enter Hostel block" name="Hblock" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="hostels">Room Type</label>
                <input type="text" id="rt" placeholder="Enter Room type" name="Rooom" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="proc">Proctor Name</label>
                <input type="text" id="Pn" placeholder="Enter Your Proctor Name" name="pn" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="proct">Proctor department</label>
                <input type="text" id="Pd" placeholder="Enter Your Proctor department" name="pd" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="dayb">Day Boarder </label>
                <input type="text" id="dayb" placeholder="Enter yes or no" name="dboarder" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="dayb">Route </label>
                <input type="text" id="daybo" placeholder="Enter Your Route" name="route" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="dayb">Bus Number </label>
                <input type="text" id="daybor" placeholder="Enter Your Buss Number" name="buss" />
                <small>Error message</small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>