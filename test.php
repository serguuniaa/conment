<?php
/**
 * Created by PhpStorm.
 * User: Ը���
 * Date: 25.10.2015
 * Time: 0:40
 */

$connect = mysql_connect("localhost","root","");
$seldb = mysql_select_db("conment");

if ($connect){

    $sql = mysql_query("SELECT * FROM users");
    $row = mysql_fetch_array($sql);

    var_dump($row);

}
else{
    mysqli_error();
    die(1);
}

?>