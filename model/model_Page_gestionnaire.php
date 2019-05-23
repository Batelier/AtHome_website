<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
    $con=mysqli_connect("localhost","root","","athome_db");
    if($_GET["q"]=="all")
    {
        $sql = "SELECT user.name,user.first_name,user.user_id,image.bin_data,image.filetype FROM user inner join image on user.user_id = image.user_id";
    }
    else
    {
        $sql = "SELECT user.name,user.first_name,user.user_id,image.bin_data,image.filetype FROM user inner join image on user.user_id = image.user_id where first_name = '".$_GET["q"]."'";
    }

    $result=mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
           $data = $row["bin_data"];
           $type = $row["filetype"];
           Header( "Content-type:$type");
            echo "<div class='customer_information'>".
                "<div class='num_appartement'></div><span>"."Appartement :n*".$row["user_id"]."</span></div>".
                "<div class='photo'>". $data."</div>".
                "<div class='non_prenom'><span>"."name: " . $row["name"]. "  first name: " . $row["first_name"]."</span>".
                "<div class='consommation'>"."<img src='res/2861.png_300.png' style='height: 20px'>"."</div>".
                "<div class='deux_button'>"."<button type='button'>Contact</button>"."<button type='button'>Alert Consommation</button>"."</div>".
                "</div>";
        }
    } else
        {
        echo "0 result";
    }

    mysqli_close($con);
