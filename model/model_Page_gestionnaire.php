<?php
function get_user()
{
    $con=mysqli_connect("localhost","root","","athome_db");
    $sql="SELECT name,first_name,user_id FROM user";
    $result=mysqli_query($con,$sql);



    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div id='customer_information'>".
                "<div id='num_appartement'><span>"."Appartement :n*".$row["user_id"]."</span></div>".
                "<div id='non_prenom'><span>"."name: " . $row["name"]. "  first_name: " . $row["first_name"]."</span>".
                "<div id='consommation'>"."<img src='res/2861.png_300.png' style='height: 20px'>"."</div>".
                "<div id='deux_button'>"."<button type='button'>Contact</button>"."<button type='button'>Alert Consommation</button>"."</div>".
                "</div>";
        }
    } else {
        echo "0 result";
    }
}