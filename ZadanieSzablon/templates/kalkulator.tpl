<!DOCTYPE HTML>
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
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
        <a href="index.php" class="logo">Massively</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li><a href="index.php">This is Massively</a></li>
            <li class="active"><a href="kalkulator.php">Kalkulator</a></li>
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
                <form action="kalkulator.php" method="post">
                    <label for="id_kwota">Kwota kredytu (zł):</label>
                    <input id="id_kwota" type="text" name="kwota" value="{$kwota|default:''}" />

                    <label for="id_lata">Liczba lat:</label>
                    <input id="id_lata" type="text" name="lata" value="{$lata|default:''}" />

                    <label for="id_op">Oprocentowanie roczne (%):</label>
                    <input id="id_op" type="text" name="op" value="{$op|default:''}" />

                    <input type="submit" value="Oblicz ratę" />
                </form>

                {if $messages|@count > 0}
                    <ul class="messages">
                        {foreach $messages as $msg}
                            <li>{$msg}</li>
                        {/foreach}
                    </ul>
                {/if}

                {if isset($result)}
                    <div class="result">
                        Miesięczna rata: {$result|string_format:"%.2f"} zł
                    </div>
                {/if}
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>