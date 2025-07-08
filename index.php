<?php 
include ('connect.php');
if(isset($_POST['submit'])){
    $first_Name=$_POST['firstName'];
    $last_Name=$_POST['lastName'];
    $contact_Number=$_POST['phonenumber'];
    $alt_Number=$_POST['altNum'];
    $address=$_POST['address'];
    // $room_no=$_POST['roomNumber'];
    // $quantity=$_POST['quantity'];
    // $time=$_POST['time'];
    // $date=$_POST['date'];
    $sql="INSERT INTO CUSTOMER VALUES ('$first_Name','$last_Name','$contact_Number','$alt_Number','$address')";
    if(mysqli_query($con,$sql)){
        echo "data is insertes";
    }
    else 
    echo "data is not inserted";

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Entry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
        <div class="navBar">
           <div class="navHeading">
                 <h1>Sherma Papohang Hotel and Louge</h1>
                 <p>Miklajung-2,  Saptami Bazar, Panchter</p>
           </div>
           <div class="nav">
                <li><a href="index.html">Fill Details</a></li>
                <li><a href="#">See  Details</a></li>
           </div>

        </div>
   </div>
   <div class="container">
        <div class="fillDetails">
            <h3>Persional Details</h3>
            <div class="form">
                <form action="" method="POST">
                    <p>First Name:</p>
                    <input type="text" placeholder="Ram " name="firstName" required>
                    <p>Last Name:</p>
                    <input type="text" placeholder="kumar" name="lastName" required>
                    <p>Contact Number:</p>
                    <input type="number" placeholder="97025******" name="phonenumber" required>
                    <p>Alternative Phone Number:</p>
                    <input type="number" placeholder="97025******" name="altNum">
                    <p>Adderss:</p>
                    <input type="text" name="address">
                    <!-- <textarea  name="address" required placeholder="Prenament Address"></textarea> -->
                      <!-- <form action="" method="POST"> -->
                    <!-- <p>Room Number:</p>
                    <select name="roomNumber" id="">
                        <option value="">1001</option>
                        <option value="">1002</option>
                        <option value="">1003</option>
                        <option value="">1004</option>
                        <option value="">1005</option>
                    </select>
                    <p>Number Of Person:</p>
                    <select name="quantity" id="">

                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select> -->
                    <!-- <p>Time:</p>
                    <input type="time" name="time">
                    <p>Date:</p>
                    <input type="date" name ="date">  -->
                    <input type="submit" name="submit" id="btn">
                     <!-- <button name="submit">Submit</button> -->
                
                </form>
            </div>
        </div>
   </div>
   <div class="container">
        <div class="fillDetails">
            <h3>Room Details</h3>
            <div class="form">
                <!-- <form action="" method="POST">
                    <p>Room Number:</p>
                    <select name="roomNumber" id="">
                        <option value="">1001</option>
                        <option value="">1002</option>
                        <option value="">1003</option>
                        <option value="">1004</option>
                        <option value="">1005</option>
                    </select>
                    <p>Number Of Person:</p>
                    <select name="quantity" id="">

                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    <p>Time:</p>
                    <input type="time" name="time">
                    <p>Date:</p>
                    <input type="date" name ="date"> 
                    <input type="submit" name="submit" id="btn"> -->
                     <!-- <button name="submit">Submit</button> --> -->
                </form>
            </div>
        </div>
   </div>
</body>
</html>