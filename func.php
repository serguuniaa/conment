<?php
ob_start();
function logout()
{
    if ($_GET['log'] == 'out') {

        session_destroy();
        header('Location: index.php');
        die();
    }
}
function login() {

    if ($_GET['fname'] && $_GET['pass']) {

        $_SESSION['fname'] = $_GET['fname'];
        $_SESSION['pass'] = $_GET['pass'];

        $connect = mysql_connect("localhost", "root", "");
        if (!$connect) {
            die('Не удалось соединиться : ' . mysql_error());
        }
        $seldb = mysql_select_db('conment',$connect);
        if (!$seldb) {
            die ('Не удалось выбрать базу : ' . mysql_error());
        }

        if ($connect) {

            $sql = "SELECT * FROM users WHERE fname = '" . $_GET['fname'] . "'";
            $res = mysql_query($sql);
            $row = mysql_fetch_array($res);

            if ($row['pass'] == $_GET['pass']) {
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['tel'] = $row['number'];
            }

            echo $_SESSION['fname'] . " " . $_SESSION['lname'] . " " . $_SESSION['tel'] . '<a href="?log=out">EXIT</a>';
        } else {
            mysqli_error();
            session_destroy();
            die(1);
        }
    } elseif ($_SESSION['fname'] && $_SESSION['pass']) {

        $connect = mysql_connect("localhost", "root", "");
        if (!$connect) {
            die('Не удалось соединиться : ' . mysql_error());
        }
        $seldb = mysql_select_db('conment',$connect);
        if (!$seldb) {
            die ('Не удалось выбрать базу : ' . mysql_error());
        }

        if ($connect) {

            $sql = "SELECT * FROM users WHERE fname = '" . $_SESSION['fname'] . "'";
            $res = mysql_query($sql);
            $row = mysql_fetch_array($res);

            if ($row['pass'] == $_SESSION['pass']) {
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['tel'] = $row['number'];
            }

            echo $_SESSION['fname'] . " " . $_SESSION['lname'] . " " . $_SESSION['tel'] . '<a href="?log=out">EXIT</a>';

        } else {
            mysqli_error();
            session_destroy();
            die(1);
        }

    } else {

        echo '<div align="center">
    <form action="index.php" method="get">
    <p> First name : <input type="text" name="fname" > </p>
    <p> Password : <input type="password" name="pass" > </p>
    <button type="submit" value="log-in">log in</button>
    </form>
    </div>';

    }
}




?>