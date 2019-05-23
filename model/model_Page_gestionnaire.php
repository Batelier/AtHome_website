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
           echo "<div class='customer_information'>
                    <div class='entete'>
                        <div class='num_appartement'>
                            <p>Appartement : n*". $row["user_id"]."</p>
                        </div>
                    </div>
                    <div class='corps'>
                        <div class='infos'>
                            <div class='profil'>
                                <div class='photo_profil'>
                                    <img src='res/profil_pic.png' class='profil_pic'/>
                                </div>
                                <div class='nom_prenom'>
                                    <p>".$row["first_name"]." ".$row["name"] . "</p>
                                </div>
                            </div>
                            <div class='address'>
                                    <p>68 Rue de Biture sur Orge</p>
                            </div>
                        </div>
                        <div class='consommation'>
                            <img src='res/2861.png_300.png' class='conso_pic'/>
                        </div>
                        <div class='deux_button'>
                            <button type='button'>Contact</button>
                            <button type='button'>Alerte De Consommation</button>
                            <form method='post'>
                                <input type='submit' id='button_delete' name='del[". $row['user_id'] ."]' value='Supprimer'></input> 
                            </form>
                        </div>
                    </div>
                </div>";


        }
    } else
        {
        echo "<p>0 result<p>";
    }

    mysqli_close($con);

    
