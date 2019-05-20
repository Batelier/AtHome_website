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
           echo "<div class='customer_information'>
                    <div class='entete'>
                        <div class='num_appartement'>
                            <p>Appartement : n*". $row["user_id"]."</p>
                        </div>
                    </div>
                    <div class='corps'>
                        <div class='profil'>
                            <div class='photo_profile'>
                                <img src='res/profil_pic.png'/>
                            </div>
                            <div class='nom_prenom'>
                                <p>".$row["first_name"]." ".$row["name"] . "</p>
                            </div>
                            <div class='adrress'>
                                <p>68 Rue de Biture sur Orge</p>
                            </div>
                        </div>
                        <div class='consommation'>
                            <img src='res/2861.png_300.png' />
                        </div>
                        <div class='deux_button'>
                            <button type='button'>Contact</button>
                            <button type='button'>Alerte De Consommation</button>
                        </div>
                    </div>
                </div>";

        }
    } else
        {
        echo "<p>0 result<p>";
    }

    mysqli_close($con);
