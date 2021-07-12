<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'test_task', '3306', '',);

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
$createtable = "";;

$query1 = " ";
$query2 = " ";
$query3 = " ";
$query4 = " ";

$connection->query();

array_diff_assoc()d;


$connection->

in_array('');;
in_

$array['user_ip'];
$array['date_time'];
$array['button_id'];
$array['year'];

$insert = ""
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