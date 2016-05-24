<?php
/* Smarty version 3.1.29, created on 2016-05-18 23:10:20
  from "D:\Apache2.2\htdocs\oik\www.oik.com-master\template\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573c85dc1f9800_89034802',
  'file_dependency' => 
  array (
    '96342822c18c65cefda31f41590f1a0f3c030149' => 
    array (
      0 => 'D:\\Apache2.2\\htdocs\\oik\\www.oik.com-master\\template\\home.html',
      1 => 1463584119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573c85dc1f9800_89034802 ($_smarty_tpl) {
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
