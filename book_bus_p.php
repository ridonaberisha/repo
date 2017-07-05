<?php
     include 'conn.php';


           $from_city_bus= $_POST['from_city_bus'];
           $to_city_bus= $_POST['to_city_bus'];
           $depart= $_POST['depart'];
           $arrival= $_POST['arrival'];
            $price= $_POST['price'];
           $date_leaving_on= $_POST['date_leaving_on']; 
           $date_returning_on= $_POST['date_returning_on']; 
           $first_name=$_POST['first_name'];
           $last_name=$_POST['last_name'];
           $email=$_POST['email'];
           $number_phone=$_POST['number_phone'];
           $number=$_POST['number'];
           $note=$_POST['note'];
           $total=$_POST['total'];
          

$formcontent="";
$recipient = "ridonaberisha@gmail.com,$email";
$subject = "India4IT: Ihre Anfrage über unsere Webseite";
$mailheader = "From: $email \r\n";
$mailheader .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
mail($recipient, $subject,$formcontent, $mailheader) or die("Error!");
  
    
     $sql="insert into booking_bus
     (from_city_bus,to_city_bus,depart,arrival,price,date_leaving_on,date_returning_on,first_name,last_name,email,number_phone,number,note,total)
     values('$from_city_bus','$to_city_bus','$depart','$arrival','$price','$date_leaving_on','$date_returning_on','$first_name','$last_name','$email','$number_phone','$number','$note','$total')";




  $result=mysqli_query($con,$sql);

   if($result)
   {

    header('Location:find_bus.php');
   }
   
  
 $con->close();
  
  ?>


