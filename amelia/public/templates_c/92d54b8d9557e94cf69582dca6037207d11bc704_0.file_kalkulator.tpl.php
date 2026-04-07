<?php
/* Smarty version 5.4.5, created on 2026-04-08 01:05:21
  from 'file:kalkulator.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69d58db1d85ea9_55140392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d54b8d9557e94cf69582dca6037207d11bc704' => 
    array (
      0 => 'kalkulator.tpl',
      1 => 1775603085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d58db1d85ea9_55140392 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Programowanie_aplikacji_internetowych-main\\amelia\\app\\views';
?><!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
            transition: all 0.2s ease;
        }
        .credit-calculator input[type="submit"]:hover {
            box-shadow: inset 0 0 0 2px #18bfef;
            color: #18bfef !important;
        }
        .messages {
            margin: 1rem 0;
            padding: 1rem;
            background-color: #f88;
            color: #fff;
            list-style-position: inside;
            border-radius: 4px;
        }
        .result {
            margin: 1rem 0;
            padding: 1rem;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
            border-radius: 4px;
        }
    </style>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="index.php?action=glowna" class="logo">Massively</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li><a href="index.php?action=glowna">Strona główna</a></li>
            <li class="active"><a href="index.php?action=kalkulator">Kalkulator</a></li>
            <li><a href="generic.html">Generic Page</a></li>
            <li><a href="elements.html">Elements Reference</a></li>
        </ul>
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Kalkulator<br />
                kredytowy</h1>
                <p>Oblicz miesięczną ratę swojego kredytu</p>
            </header>
            
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
                    <ul class="messages">
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
                    </ul>
                <?php }?>

                <?php if ((true && ($_smarty_tpl->hasVariable('result') && null !== ($_smarty_tpl->getValue('result') ?? null)))) {?>
                    <div class="result">
                        Miesięczna rata: <?php echo sprintf("%.2f",$_smarty_tpl->getValue('result'));?>
 zł
                    </div>
                <?php }?>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <section class="split contact">
            <section class="alt">
                <h3>Address</h3>
                <p>1234 Somewhere Road #87257<br />
                Nashville, TN 00000-0000</p>
            </section>
            <section>
                <h3>Phone</h3>
                <p><a href="#">(000) 000-0000</a></p>
            </section>
            <section>
                <h3>Email</h3>
                <p><a href="#">info@untitled.tld</a></p>
            </section>
            <section>
                <h3>Social</h3>
                <ul class="icons alt">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                </ul>
            </section>
        </section>
    </footer>

    <!-- Copyright -->
    <div id="copyright">
        <ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
    </div>
</div>

<!-- Scripts -->
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
