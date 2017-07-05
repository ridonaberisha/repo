<?php 
   include 'conn.php';
   $id_bus=$_GET['id_bus'];
   $sql="SELECT * from bus where id_bus='$id_bus'";
   $result=mysql_query($sql);
   $rows=mysql_fetch_array($result);
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="login-page">
            <div class="form">
                <h2>BOOK BUS</h2>
                    <table id="t01">
                            <tr>
                                <th style="background:#3c3c3c;color:#ff9900">Date</th>
                                <th style="background:#3c3c3c;color:#ff9900">From</th>
                                <th style="background:#3c3c3c;color:#ff9900">To </th> 
                                <th style="background:#3c3c3c;color:#ff9900">Depart</th>
                                <th style="background:#3c3c3c;color:#ff9900">Arrival</th>
                                <th style="background:#3c3c3c;color:#ff9900">Price</th>
                            </tr>
                            <tr>
                               
                                <td><?php echo $rows['date']; ?></td>
                                <td><?php echo $rows['from_city_bus']; ?></td>
                                <td><?php echo $rows['to_city_bus']; ?></td>
                                <td><?php echo $rows['depart']; ?></td>
                                <td><?php echo $rows['arrival']; ?></td>
                                <td><?php echo $rows['price']; ?></td> 
                                
                           </tr>
                         </table>
                         
                           </form> 



                        <form  method="post" action="book_bus_p.php">
                         <table id="t02">
                             
                                <input name="from_city_bus" type="hidden"  value="<?php echo $rows['from_city_bus']; ?>">
                                <input name="to_city_bus" type="hidden"   value="<?php echo $rows['to_city_bus']; ?>">
                                <input name="depart" type="hidden"   value="<?php echo $rows['depart']; ?>">
                                <input name="arrival" type="hidden"   value="<?php echo $rows['arrival']; ?>">
                                <input name="price" type="hidden"   value="<?php echo $rows['price']; ?>">
                                <tr>
                                    
                                    <td>Outbound<br>
                                        <input type="date" id="date_leaving_on" name="date_leaving_on" style="width:250px;" data-date-format="DD MMMM YYYY"></br></td>
                                    <td>Return<br>
                                        <input type="date" id="date_returning_on" name= "date_returning_on" style="width:250px;" data-date-format="DD MMMM YYYY"></br></td>
                                    </tr>
                                <tr>
                                    <td>Name<br>
                                        <input type="text" id="first_name" name="first_name" style="width:250px;"></br></td>
                                    <td>Surname<br>
                                        <input type="text" id="last_name" name= "last_name" style="width:250px;"></br></td>
                                </tr>
                                <tr>
                                    <td>Email<br>
                                        <input type="email" id="email" name="email" style="width:250px;"></br></td>
                                    <td>Phone<br>
                                        <input type="text" id="number_phone" name= "number_phone" style="width:250px;"></br></td>
                                </tr>
                                <tr>
                                    <td>Number<br>
                                        <input type="text" id="llogVlera" name= "number" style="width:80px;"></br></td>
                                    <td>Comment<br>
                                        <textarea rows="5"  name= "note" cols="33"></textarea></br></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h3>SUMMARY</h3><br> </td>
                                </tr> 
                                <tr>  
                                    <td>Booking<b class="priceT" id="price"><?php echo $rows['price']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Total<input type="text" name="total" id="llogVlera1" style="width: 70px;"> </td>
                                </tr>
                               
                      </table>
                     <input type="submit" value="Submit" id="mailSender" >
                    <button type="submit" value="Submit" id="mailSender">Book</button>
                </form>
                
            </div>
    </body>
     
</html>


    
<script type="text/javascript" src="jquery-1.10.2.js"></script>
    <script>
    $(document).ready(function(argument) {
       
       var price=parseFloat($('.priceT').text());
        
          
        $('#llogVlera').on('change',function() {
          var numri=$(this).val();
          $('#llogVlera1').val(numri*price);
        });
        $('#bookBtn').on('click',function () {
            $('#mailSender').trigger(click);
             $('#dataSender').trigger(click);
            
            // body...
        });

    });

 
    
</script>


 