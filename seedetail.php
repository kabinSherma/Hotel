<?php
$con=mysqli_connect('localhost','root','','hotel');
// if($con){
//     echo "connected to databae";
// }
// else {
//     echo "not connected to database";
// }
echo ' <div class="navHeading">
                 <h1>Sherma Papohang Hotel and Louge</h1>
                 <p>Miklajung-2,  Saptami Bazar, Panchter</p>
           </div>';
echo "<h1> Details Of Customer's</h1>";
$sql="  SELECT * FROM customer";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table>
    <tr> <th>First Name</th><th>Last Name</th><th>Contact Number</th><th>Address</th><th>Room Number</th><th>Quantity</th><th>Date</th> </tr>
    "; 
    while($rows=mysqli_fetch_assoc($result)){
        echo "
        <tr> <td>". $rows['first_name']."</td><td>". $rows['last_name']."</td><td>". $rows['contact_number']."</td><td>". $rows['address']."</td><td>". $rows['room_no']."</td><td>". $rows['quantity']."</td><td>". $rows['date']."</td>";
    }
        echo "</table>";
}
else {
    echo"<script>
    alert('There is no data in database');
    </script>";
    header('location:index.php');
}
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Ephesis&family=Pochaevsk&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
:root{
    --primary-color:#F1EFEC;
    --secondary-color:#D4C9BE;
    --terseary-color:#123458;
    --fourth-color:#030303;
}
*{
    padding: 0;
    margin: 0;
    /* font-family: "poppins",sans-serif; */
    font-family: "poppins",sans-serif;
}
body{
background-color: var(--primary-color);

}
.navHeading{
    text-align: center;
    padding: 20px;
}
.navHeading p{
    font-size: 1.4rem;
    font-weight: 500;
    margin-top:-10px;
    color: var(--terseary-color);
}
.navHeading h1{
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--terseary-color);
    
}

table{
    height:auto;
    width: 100%;
    margin:30px 0px 50px 0px;
    font-size:1.2rem;     
    
}
th{
    height:50px;
    background-color:var(--terseary-color);
    color:var(--primary-color);
}
tr:nth-child(odd){
    background-color:var(--secondary-color);
}
td{
    text-transform: capitalize;
    text-align:center;
    margin:10px;
    padding:10px;
}
.btn{
    display:flex;
    justify-content:center;
}
.btn a{
    width:200px;
    border: 2px solid var(--fourth-color);
    border-radius: 5px;
    padding: 10px;
    color: var(--terseary-color);
    text-align:center;

}
a{
    text-decoration:none;
    font-size:1.2rem;
}
.btn :hover{
      background-color: var(--terseary-color);
    color: var(--secondary-color);
}
h1{
    text-align:center;
    margin-top:10px;
    color:var(--terseary-color);
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="btn"><a href="index.php">Fill Form</a></div>
</body>
</html> 