    <!DOCTYPE html>
    <html >
    <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>
    
    
    
        <link rel="stylesheet" href="css/style5.css">
        

    
    </head>

    <body>

    <div class="login-page">
    <div class="form">
    <h2>FIND YOUR FLY</h2>
    
        <form class="login-form">

    <td>
        From(city or airport):<br>
        <div class="dropdown_container">
    <select class="my_dropdown" id="from_city_airport" name="from_city_airport">
        
        <option value="London airports, United Kingdom">London airports, United Kingdom</option>
        <option value="Paris (ORY) Orly, France">Paris (ORY) Orly, France</option>
    </select>
    </div></br>
        To (city or airport) <br> 
        <div class="dropdown_container">
    <select class="my_dropdown" id="to_city_airport" name="to_city_airport">
        <option value="Paris  airports, France">Paris  airports, France</option>
        <option value="Turin (TRN) Caselle, Italy">Turin (TRN) Caselle, Italy</option>
        
    </select>
    </div></br>
    <div>
    <table>
    <tr>
       <th> Outbound<br>
        <input type="date" id="date"  name="date" style="width: 150px;" data-date-format="DD MMMM YYYY" ></br></th>
       <th> Return<br>
        <input type="date"  id="date1" name= "date" style="width: 150px;" data-date-format="DD MMMM YYYY" ></br></th>
        
    </table>
        <br>
        <button type="button" onclick="test()">SEARCH</button>
        </tr>
        
        </table>
        </form>
    </div>
    </div>


    </body>
    </html>
    <script>

    function test()
            {
                
                
                var from_city_airport = document.getElementById("from_city_airport").value;
                var to_city_airport = document.getElementById("to_city_airport").value;
                var date = document.getElementById("date").value;
                var date1 = document.getElementById("date1").value;
                
                window.location.href="find_fly1.php?from_city_airport="+from_city_airport+"&to_city_airport="+to_city_airport+"&date"+date+"&date"+date1;
                
            }
    </script>


    <style>
    div.dropdown_container {
        width:170px;
        height:30px;
    }

    select.my_dropdown {
        width:300px;
        height:35px;
    }

    /*IE FIX */
    select#my_dropdown {
        width:170%;
    }

    select:focus#my_dropdown {
        width:auto\9;
    }
    </style>
