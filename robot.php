<?php
header("Content-type: text/html; charset=utf-8");
$robot=$_GET["robot"];
$msg=$_GET["msg"];
if($msg=="唤醒词条"){
echo "±ATmsg±我在！";
}else
if($msg=="警告框架"){
echo "㊣═══警告系统═══㊣\n[状态]执行失败\n[原因]你的权限不足\n⊱══⊰ⓛⓞ♡ⓥⓔ⊱══⊰";
}else
if($msg=="运行状态"){
echo "正常运行";
}else
if($msg=="心跳状态"){
echo "正常心跳";
}else
if($msg=="菜单横幅"){
echo "六一快乐";
}else
if($msg=="免费授权"){
echo "OPEN";
}else
if($msg=="活动开关"){
echo "OPEN";
}else
if($msg=="维护状态"){
echo "OFF";
}
?>
