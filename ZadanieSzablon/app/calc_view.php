<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Kalkulator kredytowy - Massively Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    <style>
        /* Dodatkowe style dla kalkulatora */
        .credit-calculator {
            text-align: left;
            margin-top: 1rem;
        }
        .credit-calculator label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }
        .credit-calculator input[type="text"] {
            width: 100%;
            margin-bottom: 1rem;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.3);
            color: #fff;
            padding: 0.75rem;
        }
        .credit-calculator input[type="submit"] {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            padding: 0.75rem 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.25rem;
            font-size: 0.8rem;
            width: 100%;
        }
        .credit-calculator input[type="submit"]:hover {
            background: #fff;
            color: #1e252d;
        }
        .messages {
            margin: 1rem 0;
            padding: 1rem;
            border-radius: 5px;
            background-color: #f88;
            color: #fff;
            list-style-position: inside;
        }
        .result {
            margin: 1rem 0;
            padding: 1rem;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }
        .empty-button {
            background: transparent !important;
            border: 2px solid #fff !important;
            box-shadow: none !important;
            width: 3rem !important;
            height: 3rem !important;
            padding: 0 !important;
            line-height: 3rem !important;
            text-align: center !important;
            margin-top: 2rem;
        }
        .empty-button:before {
            content: '' !important;
            margin: 0 !important;
        }
        .empty-button:hover {
            background: rgba(255,255,255,0.1) !important;
        }
    </style>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>Kalkulator<br />kredytowy</h1>
        <p>Prosty i szybki kalkulator do obliczania miesięcznej raty kredytu</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="calc.php" class="logo">Kalkulator</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="calc.php">Kalkulator</a></li>
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

        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
                <span class="date">Kalkulator kredytowy</span>
                <h2><a href="#">Oblicz swoją<br />
                    miesięczną ratę</a></h2>
                <p>Wprowadź dane kredytu, a nasz kalkulator szybko wyliczy<br />
                    wysokość miesięcznej raty. Prosty i intuicyjny w obsłudze.</p>
            </header>
            <a href="#" class="image main"><img src="../images/pic01.jpg" alt="" /></a>
            <ul class="actions special">
                <li><a href="#" class="button large">Sprawdź</a></li>
            </ul>
        </article>

        <!-- Posts -->
        <section class="posts">
            <article>
                <header>
                    <span class="date">Kalkulator</span>
                    <h2><a href="#">Kalkulator<br />
                    kredytowy</a></h2>
                </header>
                <div class="credit-calculator">
                    <form action="calc.php" method="post">
                        <label for="id_kwota">Kwota kredytu (zł):</label>
                        <input id="id_kwota" type="text" name="kwota" value="<?php echo isset($kwota) ? htmlspecialchars($kwota) : ''; ?>" />

                        <label for="id_lata">Liczba lat:</label>
                        <input id="id_lata" type="text" name="lata" value="<?php echo isset($lata) ? htmlspecialchars($lata) : ''; ?>" />

                        <label for="id_op">Oprocentowanie roczne (%):</label>
                        <input id="id_op" type="text" name="op" value="<?php echo isset($op) ? htmlspecialchars($op) : ''; ?>" />

                        <input type="submit" value="Oblicz ratę" />
                    </form>

                    <?php
                    // Wyświetlenie błędów
                    if (isset($messages) && count($messages) > 0) {
                        echo '<ul class="messages">';
                        foreach ($messages as $msg) {
                            echo '<li>' . htmlspecialchars($msg) . '</li>';
                        }
                        echo '</ul>';
                    }

                    // Wyświetlenie wyniku
                    if (isset($result)) {
                        echo '<div class="result">';
                        echo 'Miesięczna rata: ' . number_format($result, 2) . ' zł';
                        echo '</div>';
                    }
                    ?>
                </div>
                <ul class="actions special">
                    <li><a href="#" class="button empty-button"></a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">Informacje</span>
                    <h2><a href="#">Jak działa<br />
                    kalkulator?</a></h2>
                </header>
                <a href="#" class="image fit"><img src="../images/pic03.jpg" alt="" /></a>
                <p>Kalkulator używa standardowego wzoru na ratę stałą (annuity). Uwzględnia kwotę kredytu, okres spłaty w latach oraz roczne oprocentowanie. Wynik to miesięczna rata, którą będziesz płacić przez cały okres kredytowania.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Dowiedz się więcej</a></li>
                </ul>
            </article>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field">
                        <label for="name">Imię</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Wiadomość</label>
                        <textarea name="message" id="message" rows="3"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Wyślij wiadomość" /></li>
                </ul>
            </form>
        </section>
        <section class="split contact">
            <section class="alt">
                <h3>Adres</h3>
                <p>ul. Przykładowa 123<br />
                00-001 Warszawa, Polska</p>
            </section>
            <section>
                <h3>Telefon</h3>
                <p><a href="#">(123) 456-7890</a></p>
            </section>
            <section>
                <h3>Email</h3>
                <p><a href="#">info@kalkulator.pl</a></p>
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
        <ul>
            <li>&copy; Kalkulator kredytowy</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>