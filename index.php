<?php
/////////////////////////////////////////////////////////////////////////////////
////              Z-Blog PHP 坑爹的开始
/////////////////////////////////////////////////////////////////////////////////

require_once 'zb_system/function/c_system_base.php';

$zbp=new zblogphp;
//echo $zblogphp->option['ZC_MYSQL']['ZC_MYSQL_PRE'];
$zbp->run();
?>