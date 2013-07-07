<?php

$path='linjianping';//linjianping.com

if(!isset($_GET['appname']))$_GET['appname']='';



if($_SERVER['HTTP_HOST']=='api.laolin.com'||$_GET['appname']=='api'){
  $path='api';//api
} else if($_SERVER['HTTP_HOST']=='linjianping.com'||$_GET['appname']=='linjianping'){
  $path='linjianping';//linjianping.com
}
include_once($path.'/index.php' );
