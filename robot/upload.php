<?php
header("Content-type: text/html; charset=utf-8");
$robot=$_GET["robot"];
$msg=$_GET["msg"];
if($msg=="最新版本"){
echo "1.8.5";
}else
if($msg=="更新地址"){
echo "https://xunzhicloud.github.io/yunair.github.io/YunAir.zip";
}else
if($msg=="开发版本"){
echo "https://xunzhicloud.github.io/yunair.github.io//develop/YunAir-dev.zip";
}else
if($msg=="更新日志"){
echo "±img=https://txc.gtimg.com/data/378577/2022/0127/897a429b7664de5f6aaf88dbc6df7763.png±1.[互动功能]删除<玩@>，修复<顶@>，新增打@、舞@、抱@、想@、看@、招@、笑@等互动功能.\n2.[限时活动]上线限时活动：免费开通康乐主机，发送<限时活动>查看详情.";
}else
if($msg=="小云公告"){
echo "暂无公告！";
}
?>
