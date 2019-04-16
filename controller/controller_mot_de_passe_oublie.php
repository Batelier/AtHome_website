
<?php


$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "athome_db";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];

if(!$email)
{
    //提示
    echo "<center>You have not filled in the email address yet!</center>";
}else
    {

    $checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";

    if (!preg_match($checkemail, $email)) {
        //提示
        echo "<center>E-mail format is incorrect</center>";
    }
    else
        {

            $res = mysqli_query($conn,"SELECT *FROM user WHERE mail = '".$email."'");
            $num = mysqli_num_rows($res);


        if ($num == 0)
        {
            echo "<center>The email address you entered has not been registered yet. Please fill in the email address when you registered!</center>";
        } else
            {

            $row = mysqli_fetch_assoc($res);
            echo $row['password'];
            //display password

        }
    }

}
?>
