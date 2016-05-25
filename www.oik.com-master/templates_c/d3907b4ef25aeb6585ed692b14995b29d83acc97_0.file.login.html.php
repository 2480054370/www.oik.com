<?php
/* Smarty version 3.1.29, created on 2016-05-25 01:39:48
  from "D:\Apache24\htdocs\oik\www.oik.com-master\template\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574502641823d3_79589204',
  'file_dependency' => 
  array (
    'd3907b4ef25aeb6585ed692b14995b29d83acc97' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\oik\\www.oik.com-master\\template\\login.html',
      1 => 1464139336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574502641823d3_79589204 ($_smarty_tpl) {
?>
<html class="no-js">
<head>
	<meta type="" charset="utf-8">
	<title>登录</title>
	<meta name="description" content="">
    <meta http-equiv="cleartype" content="on">	
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/animate-custom.css"></head>
<body>
	
	<div id="container_demo">
		<a class="hiddenanchor" id="toregister"></a>
		<a class="hiddenanchor" id="tologin"></a>
		<div id="wrapper">
			<div id="login" class="login_con animate form" >
				<div class="login">
					<div class="container">
						<div class="big-box">
							<div class="box">
								<div class="logo">
									<img src="./images/logo.png"></div>
								<div class="line"></div>
								<form id="form_login" name="form_login" method="post" action="auth.php">
									<div class="form-group">
										<input type="text" name="user_name" class="form-control" required>
										<label class="form-label">用户名/邮箱地址/手机号码</label>
									</div>
									<div class="form-group">
										<input type="password" name="user_password" class="form-control" required>
										<label class="form-label">密码</label>
									</div>
									<div class="status">
										<a href="#">忘记密码</a>
									</div>
									<!--status end-->
									<div class="status_b">
										<a href="#toregister" class="to_register">没有账号?去注册</a>
									</div>
									<!--status end-->
                                    <input type="submit" id="login_button" name="login_button" value="登录"/>
								</form>
							</div>
							<div class="mb"></div>
						</div>
						<!--big-box end-->
					</div>
					<!--container end-->
				</div>
				<!--login end-->
			</div>
			<!--login_con end-->
			<div id="register" class="register_con animate form">
				<div class="register">
					<div class="container">
						<div class="big-box">
							<div class="box">
								<div class="logo">
									<img src="./images/logo.png"></div>
								<div class="line"></div>
								<form id="form_register" name="form_register" method="post" action="register.php">
									<div class="form-group">
										<input type="text" name="user_name" class="form-control" easyform="length:4-16;char-normal;real-time;" message="用户名必须为4—16位的英文字母或数字" easytip="disappear:lost-focus;theme:red;" ajax-message="用户名已存在!"  required>
										<label class="form-label">用户名/邮箱地址/手机号码</label>
									</div>
									<div class="form-group">
										<input id="password_normal" type="password" name="user_password" class="form-control" easyform="length:6-16;real-time;" message="密码必须为6—16位" easytip="disappear:lost-focus;theme:red;" required>
										<label class="form-label">密码</label>
									</div>
									<div class="form-group">
										<input id="password_confirm" type="password" name="user_password" class="form-control"  easyform="length:6-16;equal:#password_normal;real-time;" message="两次密码输入要一致" easytip="disappear:lost-focus;theme:red;"required>
										<label class="form-label">确认密码</label>
									</div>
									<div class="status_c">
										<a href="#tologin" class="to_register">已有账号,去登录</a>
									</div>
									<!--status end-->
									<input type="submit" id="register_button" name="register_button" value="注册"/>
								</form>
							</div>
							<div class="mb"></div>
						</div>
						<!--big-box end-->
					</div>
					<!--container end-->
				</div>
				<!--register end-->
			</div>
			<!--register_con end-->
		</div>
	</div>
</body>

	<?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery-2.2.3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./js/easyform.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./js/oik.js"><?php echo '</script'; ?>
>

</html><?php }
}
