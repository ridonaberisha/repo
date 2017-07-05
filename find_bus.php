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
                <h2>FIND YOUR BUS</h2>
                    <form class="login-form">
                        FROM:<br>
                            <div class="dropdown_container">
                                <select class="my_dropdown" id="from_city_bus" name="from_city_bus">
                                    <option value="Prizren">Prizren</option>
                                    <option value="Prishtine">Prishtine</option>
                                </select>
                            </div></br>
                            TO  <br> 
                            <div class="dropdown_container">
                                <select class="my_dropdown" id="to_city_bus" name="to_city_bus">
                                    <option value="Prizren">Prizren</option>
                                    <option value="Prishtine">Prishtine</option>
                                </select>
                            </div></br>
                        <div>
                    <table>
                        <tr>
                             <th>DEPARTURE<br>
                                <input type="date" id="date"  name="date" style="width: 150px;" data-date-format="DD MMMM YYYY" ></br></th>
                       </tr>
                    </table>
                          <br>
                             <button type="button" onclick="test()">SEARCH</button>
                  </form>
            </div>
       </div>
   </body>
</html>

<script>

    function test()
            {
                var from_city_bus = document.getElementById("from_city_bus").value;
                var to_city_bus = document.getElementById("to_city_bus").value;
                var date = document.getElementById("date").value;
                window.location.href="find_bus1.php?from_city_bus="+from_city_bus+"&to_city_bus="+to_city_bus+"&date"+date;
                
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
