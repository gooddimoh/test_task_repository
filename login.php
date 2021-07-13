<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'test_task', '3306');

$user_ip = $_GET['user_ip'];
$date_time = $_GET['date_time'];
$button_id = $_GET['button_id'];
$yyyy_mm_dd_click = $_GET['yyyy_mm_dd_click'];

$ip = $_GET['ip'] = 'data3';
$button_id = $_GET['button_id'] = 'data4';
$count_of_clicks = $_GET['count_of_clicks'] = 'count of clicks';
$yyyy_mm_dd_click = $_GET['yyyy_mm_dd_click'] = 'yyyy-mm-dd-click';

$rule = ['permissions error'];
$msg = ['user pass value'];

$array = [
    'user_ip' => $user_ip,
    'date_time' => $date_time,
    'ip' => $ip,
    'button_id' => $button_id,
    'count_of_clicks' => $count_of_clicks,
    'yyyy_mm_dd_click' => $yyyy_mm_dd_click
];

$createtable = "";
$create = "CREATE TABLE IF NOT EXISTS tasks ( task_id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255) NOT NULL, start_date DATE, due_date DATE, status TINYINT NOT NULL, priority TINYINT NOT NULL, description TEXT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP )  ENGINE=INNODB";

$query1 = "CREATE sql query";
$query2 = "CREATE sql query";
$query3 = "CREATE sql query";
$query4 = "CREATE sql query";

$connection->query($create);
$connection->query($query1);
$connection->query($query2);
$connection->query($query3);
$connection->query($query4);

$array['user_ip'];
$array['date_time'];
$array['button_id'];
$array['year'];

$insert = "";
$remote_addr = $_SERVER['REMOTE_ADDR'];

var_dump($remote_addr);

var_dump($_GET);

die();

setcookie("TestCookie", "", time() - 3600);
setcookie("TestCookie", "", time() - 3600, "/~rasmus/", "example.com", 1);
var_dump($_COOKIE);

//saveinfo.log();

//log1
//log2
//log3
//log4

function yyyy_mm_dd_click()
{
    return 'yyyy_mm_dd_click';
}
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function writelog(){ }



get_client_ip();
yyyy_mm_dd_click();
writelog();

$_COOKIE['name'];
$_COOKIE['password'];
$_COOKIE['data1'];
$_COOKIE['data2'];

$_SESSION['name'];
$_SESSION['password'];
$_SESSION['data1'];
$_SESSION['data2'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="">
    <input type="text" name="user_ip">
    <input type="text" name="date_time">
    <input type="text" name="button_id">
    <input type="text" name="yyyy_mm_dd_click">
    <input type="text" name="update">
</form>
</body>
</html>