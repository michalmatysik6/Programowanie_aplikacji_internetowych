<?php
/* Smarty version 5.4.5, created on 2026-04-20 14:55:09
  from 'file:kalkulator.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69e6222da887b0_60800591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e376a72857ac3338838a917d66a51c705acb906' => 
    array (
      0 => 'kalkulator.tpl',
      1 => 1776287568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e6222da887b0_60800591 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Programowanie_aplikacji_internetowych-main\\BD\\app\\views';
?><!DOCTYPE HTML>
<html>
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/noscript.css" /></noscript>
    <style>
        .credit-calculator {
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            background: #f5f5f5;
            border-radius: 8px;
        }
        .credit-calculator label {
            display: block;
            font-family: "Source Sans Pro", Helvetica, sans-serif;
            font-weight: 900;
            letter-spacing: 0.075em;
            text-transform: uppercase;
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
            color: #212931;
        }
        .credit-calculator input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            background: #fff;
            border: solid 2px #eeeeee;
            font-family: "Merriweather", Georgia, serif;
        }
        .credit-calculator input[type="submit"] {
            background-color: transparent;
            box-shadow: inset 0 0 0 2px #212931;
            color: #212931 !important;
            border: 0;
            border-radius: 0;
            cursor: pointer;
            display: inline-block;
            font-family: "Source Sans Pro", Helvetica, sans-serif;
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.075em;
            height: 3rem;
            line-height: 3rem;
            padding: 0 2rem;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
            transition: all 0.2s ease;
        }
        .credit-calculator input[type="submit"]:hover {
            box-shadow: inset 0 0 0 2px #18bfef;
            color: #18bfef !important;
        }
        .messages {
            margin: 1rem 0;
            padding: 1rem;
            border-radius: 4px;
        }
        .messages.err {
            background-color: #f88;
            color: #fff;
            list-style-position: inside;
        }
        .messages.inf {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }
        .user-info {
            text-align: right;
            margin-bottom: 20px;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 4px;
        }
        .user-info a {
            margin-left: 15px;
            color: #18bfef;
            text-decoration: none;
        }
        .user-info a:hover {
            text-decoration: underline;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #18bfef;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="is-preload">

<div id="wrapper">
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Kalkulator<br />kredytowy</h1>
                <p>Oblicz miesięczną ratę swojego kredytu</p>
            </header>
            
            <div class="user-info">
                Zalogowany jako: <strong><?php echo $_smarty_tpl->getValue('user')->login;?>
</strong> (rola: <?php echo $_smarty_tpl->getValue('role');?>
)
                <a href="index.php?action=logout">wyloguj</a>
                <a href="index.php">← strona główna</a>
            </div>
            
            <div class="credit-calculator">
                <form action="index.php?action=kalkulator" method="post">
                    <label for="id_kwota">Kwota kredytu (zł):</label>
                    <input id="id_kwota" type="text" name="kwota" value="<?php echo (($tmp = $_smarty_tpl->getValue('kwota') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />

                    <label for="id_lata">Liczba lat:</label>
                    <input id="id_lata" type="text" name="lata" value="<?php echo (($tmp = $_smarty_tpl->getValue('lata') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />

                    <label for="id_op">Oprocentowanie roczne (%):</label>
                    <input id="id_op" type="text" name="op" value="<?php echo (($tmp = $_smarty_tpl->getValue('op') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />

                    <input type="submit" value="Oblicz ratę" />
                </form>

                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
                    <div class="messages err">
                        <ol>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ol>
                    </div>
                <?php }?>

                <?php if ((true && ($_smarty_tpl->hasVariable('result') && null !== ($_smarty_tpl->getValue('result') ?? null)))) {?>
                    <div class="messages inf">
                        Miesięczna rata: <?php echo sprintf("%.2f",$_smarty_tpl->getValue('result'));?>
 zł
                    </div>
                <?php }?>
            </div>
        </section>
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
