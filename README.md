```
     ___   _____  
    /   | /  _  \ 
   / /| | | |_| | 
  / / | | \___  | 
 / /  | |  ___| | 
/_/   |_| |_____/ 
```
LaoLin的网站系统源代码【a9】
======

## 所需子模块:
* ~LazyPHP (基于EazyChen的LazyPHP修改来的网站的PHP框架)
* a9-linjianping (服务器端主要代码，基于lazyPHP)
* a9-static (客户端静态文件：css,js,img)

## 外部依赖
* api部分功能(`?c=api&a=wp`)依赖wordpress

## Quick start

### 安装方法
* 方式1 源代码放在`网站目录`下
* 方式2 源代码放在别的`git源代码目录`，在`网站目录`下做两个符号链接：
    + index.php符号链接到`git源代码目录`下的index.php
    + static符号链接到`git源代码目录`下的static目录
 

##设置

### api部分功能(`?c=api&a=wp`)依赖wordpress
* 安装方式1：直接修改 index.config.inc.php文件，指定你的wordpress目录
```php
$index_config['api-wp-include-file']='./wordpress/wp-blog-header.php';
```
* 安装方式2：复制`git源代码目录`下的 `index.config.inc.php` 文件到`网站目录`下，然后修改，这样可以不破坏git源码。


## Acknowledgement
* Thanks to EasyChen's [lazyPHP](https://github.com/easychen/LazyPHP)
* Thanks to Twitter's [Bootstrap](https://github.com/twitter/bootstrap)
* Thanks to [jQuery](http://jQuery.com/)


## Author
Author: Laolin (http://laolin.com)
```
 _           ___   _____   _       _   __   _  
| |         /   | /  _  \ | |     | | |  \ | | 
| |        / /| | | | | | | |     | | |   \| | 
| |       / / | | | | | | | |     | | | |\   | 
| |___   / /  | | | |_| | | |___  | | | | \  | 
|_____| /_/   |_| \_____/ |_____| |_| |_|  \_| 
```