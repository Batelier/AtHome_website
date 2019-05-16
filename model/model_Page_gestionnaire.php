<?php
function get_user()
{
    $con=mysqli_connect("localhost","root","","athome_db");
    $sql="SELECT name,first_name FROM user";
    $result=mysqli_query($con,$sql);



    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div id='customer_information'>"."<span>"."name: " . $row["name"]. "  first_name: " . $row["first_name"]."</span>". "<div id='consommation'>"."<span>consommation</span>"."</div>"."</div>";
        }
    } else {
        echo "0 result";
    }
}