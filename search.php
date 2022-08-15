<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAISHA AIRLINES</title>
        <link rel="stylesheet" href="style.css">
    </head>
</html>

<?php
$mysql_hostname = "localhost:3307";
$mysql_user = "root";
$mysql_password = "Nawaz@php7";
$mysql_database ="search";

$dbh = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)
or 
die("Could not connect to database");
 mysqli_select_db($dbh, $mysql_database) or die("Could not connect to database");

$depfrom = $_POST['from'];
$depto = $_POST['to'];

$q = "Select * from flight_details where depfrom='$depfrom' && depto='$depto'";
$result = mysqli_query($dbh, $q); // $dbh is a connection variable which is created in connect file 


//------------------------------------------header----------------------------------------------------
echo "<div class='header'>
             <div class='animation'>
                 <div class='container'>
                    <div class='navbar'>
                        <div class='logo'>
                            <a href='index.html'><img src='logo1.png' width='200px'></a>
                        </div>
                        <nav>
                            <ul id ='MenuItems'>
                                <li><a href='index.html''>Home</a></li>
                                <li><a href='book.html'>Book</a></li>
                                <li><a href='account.html'>Manage Bookings</a></li>
                                <li><a href='offer.html'>Offers</a></li>
                                <li><a href='contact.html'>Contact</a></li>
                            <li><a href='account.html'>Account</a></li>
                            </ul>
                        </nav>
                        <img src='menu.png' class='menu-icon' onclick='menutoggle()'>
                     </div>
                 </div>";
//-----------------------------------------------table----------------------------------------------



            echo " <div class='book'>
                       <center><table>
                            <form method='post' action='search.php'>";
while($row=mysqli_fetch_assoc($result)){
    $fnum = $row['Flight_number'];
    $depfrom = $row['depfrom'];
    $depto = $row['depto'];
    $deptime = $row['deptime'];
    $artime = $row['artime'];
    $fare = $row['fare'];
                              echo" <tr><th></th>
                               <th>Flight Number</th>
                               <th>Departing From</th>
                               <th>Departing to</th>
                               <th>Departing Time</th>
                               <th>Arriving Time</th>
                               <th>Fare</th>
                               </tr>";

                               echo "<tr>";
                               echo "<td>&#9992;";
                               echo "</td>";
                               echo "<td>".$fnum."</td>";
                               echo "<td>".$depfrom."</td>";
                               echo "<td>".$depto."</td>";
                               echo "<td>".$deptime."</td>";
                               echo "<td>".$artime."</td>";
                               echo "<td>".$fare."</td>";
                               
}
                    
                          echo"  </form>
                        </table></center>
                        <center><form method='post' action='booking.php'>
                        <tr><td>
                        <input type='text' class='searchflight' name='gofly' placeholder='Enter the Flight number to Book' required>
                        <button class='btn2' type='submit'>GO</button></td>
                        </tr></form>
                        </center>
                     </div>
                 </div>
            </div>";










//-------------------------------------footer----------------------------------------------------------
              echo"<div class='footer'>
            <div class='container'>
                <div class='row'>
                    <div class='footer-col-1'>
                        <h3>Download Our App</h3>
                        <p>Download Our App for Android and IOS mobile phone</p>
                        <div class='app-logo'>
                            <img src='play-store.png'>
                            <img src='app-store.png'>
                        </div>
                    </div>
                    <div class='footer-col-2'>
                        <img src='logo1.png'>
                        <p>Our Purspose Is To Sustainably Make The Pleasure And Benifits Of Traveling To The Many</p>
                    </div>
                    <div class='footer-col-3'>
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Cancel Bookings</li>
                            <li>Refund Policies</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class='footer-col-3'>
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class='copyright'>Copyright &copy;  2021 - Nawaz_0853</p>
            </div>
        </div>
        <!----------------js for menu--------------------->
        <script type='text/javascript' src='./script.js'></script>";


?>
