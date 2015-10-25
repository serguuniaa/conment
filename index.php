<?php
/**
 * Created by PhpStorm.
 * User: Фёдор
 * Date: 24.10.2015
 * Time: 23:08
 */
session_start();

if ($_GET['fname'] && $_GET['pass']) {

    $_SESSION['fname'] = $_GET['fname'];
    $_SESSION['pass'] = $_GET['pass'];

    $connect = mysql_connect("localhost","root","");
    $seldb = mysql_select_db("conment");

    if ($connect){

        $sql = mysql_query("SELECT * FROM users WHERE fname =".$_GET['fname']);
        $row = mysql_fetch_array($sql);

        if($row['pass'] == $_GET['pass']){
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['tel'] = $row['number'];
        }

        echo $_SESSION['fname']." ".$_SESSION['lname']." ".$_SESSION['tel'];
    }
    else{
        mysqli_error();
        session_destroy();
        die(1);
    }
}
elseif($_SESSION['fname'] && $_SESSION['pass']){

    $connect = mysql_connect("localhost","root","");
    $seldb = mysql_select_db("conment");

    if ($connect){

        $sql = mysql_query("SELECT * FROM users WHERE fname =".$_SESSION['fname']);
        $row = mysql_fetch_array($sql);

        if($row['pass'] == $_GET['pass']){
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['tel'] = $row['number'];
        }

        echo $_SESSION['fname']." ".$_SESSION['lname']." ".$_SESSION['tel'];

    }
    else{
        mysqli_error();
        session_destroy();
        die(1);
    }

}else{

    echo '<div align="center">
    <form action="index.php" method="get">
    <p> First name : <input type="text" name="fname" > </p>
    <p> Password : <input type="text" name="pass" > </p>
    <button type="submit" value="log-in">log in</button>
    </form>
    </div>';

}
?>