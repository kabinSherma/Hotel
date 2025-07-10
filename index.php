<?php 
$con=mysqli_connect('localhost','root','','hotel');
// if($con){
//     echo  "connected to database";
// }
// else echo "unable to connect to database";
if(isset($_POST['submit'])){
   $firstname=$_POST['firstName'];
   $lastname=$_POST['lastName'];
   $cont=$_POST['phonenumber'];
   $altNum=$_POST['altNum'];
   $address=$_POST['address'];
   $roomNum=$_POST['room_no'];
   $quantity=$_POST['quantity'];
   $time=$_POST['time'];
   $date=$_POST['date'];
   $sql="INSERT INTO customer VALUES ('$firstname','$lastname','$cont','$altNum','$address','$roomNum','$quantity','$time','$date')";
   if(mysqli_query($con,$sql)){
    echo '<script>alert("data inserted")</script>';
   }
   else 'data not inserted';
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
                <li><a href="index.php">Fill Details</a></li>
                <li><a href="seedetail.php">See  Details</a></li>
           </div>

        </div>
   </div>
   <div class="container">
        <div class="fillDetails">
            <h3>Persional Details</h3>
            <div class="form">
                <form action="" method="POST" class='form'>
                    <p>First Name:</p>
                    <input type="text" placeholder="Ram " name="firstName" required>
                    <p>Last Name:</p>
                    <input type="text" placeholder="kumar" name="lastName" required>
                    <p>Contact Number:</p>
                    <input type="number" placeholder="97025******" name="phonenumber" required>
                    <p>Alternative Phone Number:</p>
                    <input type="number" placeholder="97025******" name="altNum">
                    <p>Adderss:</p>
                    <!-- <input type="text" name="address"> -->
                    <textarea  name="address" required placeholder="Prenament Address"></textarea> 
                    <div class="form">
                         <p>Room Number:</p>
                    <select  id="" name="room_no">
                        <option value="">Select Room Number</option>
                        <option value="" >1001</option>
                        <option value="" >1002</option>
                        <option value="" >1003</option>
                        <option value="" >1004</option>
                        <option value="" >1005</option>
                    </select>
                    <p>Number Of Person:</p>
                    <select name="quantity" id="">
                        <option value="">Quantity</option>
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
                    <!-- <input type="submit" name="submit" id="btn"> -->
                     <button name="submit">Submit</button>
                    </div>
                    
                
                </form>
            </div>
        </div>
   </div>
   <!-- <div class="container">
        <div class="fillDetails">
            <h3>Room Details</h3>
            <div class="form"> -->
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
                     <!-- <button name="submit">Submit</button> --> 
                <!-- </form>
            </div>
        </div> -->
   </div>
</body>
</html>