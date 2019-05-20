<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';

    $con=mysqli_connect("localhost","root","","athome_db");
    if($_GET["q"]=="all")
    {
        $sql = "SELECT name,first_name,user_id FROM user";
    }
    else
    {
        $sql = "SELECT name,first_name,user_id FROM user where first_name = '".$_GET["q"]."'";
    }

    $result=mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div class='customer_information'>".
                    "<div id='num_appartement'>
                        <p>"."Appartement :n*".$row["user_id"]."</p>
                    </div>".
                    "<div id='non_prenom'>
                        <p>"."name: " . $row["name"]. "  first name: " . $row["first_name"]."</p>
                    </div>".
                    "<div id='consommation'>".
                        "<img src='res/2861.png_300.png' style='height: 20px'>".
                    "</div>".
                    "<div id='deux_button'>".
                        "<button type='button'>Contact</button>".
                        "<button type='button'>Alert Consommation</button>".
                    "</div>".
                "</div>";
        }
    } else
        {
        echo "<p>0 result<p>";
    }

    mysqli_close($con);
