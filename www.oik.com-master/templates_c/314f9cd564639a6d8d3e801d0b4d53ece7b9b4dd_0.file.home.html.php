<?php
/* Smarty version 3.1.29, created on 2016-05-21 02:32:45
  from "D:\Apache24\htdocs\oik\www.oik.com-master\template\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573fc8cdbed831_96217927',
  'file_dependency' => 
  array (
    '314f9cd564639a6d8d3e801d0b4d53ece7b9b4dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\oik\\www.oik.com-master\\template\\home.html',
      1 => 1463584120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573fc8cdbed831_96217927 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<ul>
  <li>我的主页</li>
  <li><a href="configs.php">我的设置</a></li>
  <li> <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 </li>
</ul>
</body>
</html><?php }
}
