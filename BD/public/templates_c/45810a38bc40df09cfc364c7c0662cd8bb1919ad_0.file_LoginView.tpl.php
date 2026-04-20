<?php
/* Smarty version 5.4.5, created on 2026-04-15 23:14:20
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69dfffacc2c287_81415603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45810a38bc40df09cfc364c7c0662cd8bb1919ad' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1776287542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69dfffacc2c287_81415603 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Programowanie_aplikacji_internetowych-main\\logowanie\\app\\views';
?><!DOCTYPE HTML>
<html>
<head>
    <title>Logowanie - Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/noscript.css" /></noscript>
    <style>
        .login-container {
            max-width: 500px;
            margin: 100px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #18bfef;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background: #0fa0c8;
        }
        .error {
            margin-top: 20px;
            padding: 10px;
            background-color: #f88;
            color: #fff;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body class="is-preload">

<div id="wrapper">
    <div id="main">
        <div class="login-container">
            <h2>Logowanie do systemu</h2>
            <form method="post" action="index.php?action=login">
                <input type="text" name="login" placeholder="Login" />
                <input type="password" name="pass" placeholder="Hasło" />
                <input type="submit" value="Zaloguj" />
            </form>
            
            <?php if ($_smarty_tpl->getValue('error')) {?>
            <div class="error">
                <?php echo $_smarty_tpl->getValue('error');?>

            </div>
            <?php }?>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
