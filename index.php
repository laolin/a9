<?php

$path='linjianping';

if( file_exists('./index.config.inc.php') ) include_once( './index.config.inc.php' );

$c=isset($_GET['c'])?$_GET['c']:'';
$a=isset($_GET['a'])?$_GET['a']:'';

switch($c) {
  case 'api':
    if($c='wp'){//prepare wordpress functions
      if(file_exists($index_config['api-wp-include-file']))
        include_once($index_config['api-wp-include-file']);
    }
    break;
}
/*
if(!isset($_GET['appname']))$_GET['appname']='';



if($_SERVER['HTTP_HOST']=='api.laolin.com'||$_GET['appname']=='api'){
  $path='api';//api
} else if($_SERVER['HTTP_HOST']=='linjianping.com'||$_GET['appname']=='linjianping'){
  $path='linjianping';//linjianping.com
}*/
include_once($path.'/index.php' );
