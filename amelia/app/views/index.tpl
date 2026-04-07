<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Massively by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
    <style>
        /* Style dla kalkulatora */
        .credit-calculator {
            text-align: left;
            margin-top: 1rem;
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
            margin-bottom: 1rem;
            background: rgba(0,0,0,0.05);
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
        .empty-button {
            background: transparent !important;
            border: 2px solid #212931 !important;
            width: 3rem !important;
            height: 3rem !important;
            padding: 0 !important;
            line-height: 3rem !important;
            text-align: center !important;
            margin-top: 1rem;
            box-shadow: none !important;
        }
        .empty-button:hover {
            background: rgba(33,41,49,0.05) !important;
            border-color: #18bfef !important;
        }
        .empty-button:before {
            display: none !important;
        }
    </style>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>This is<br />
        Massively</h1>
        <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
        and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="index.php?action=glowna" class="logo">Massively</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="index.php?action=glowna">This is Massively</a></li>
            <li><a href="index.php?action=kalkulator">Kalkulator</a></li>
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

        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
                <span class="date">April 25, 2017</span>
                <h2><a href="#">And this is a<br />
                massive headline</a></h2>
                <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                amet nullam sed etiam veroeros.</p>
            </header>
            <a href="#" class="image main"><img src="{$conf->app_url}/images/pic01.jpg" alt="" /></a>
            <ul class="actions special">
                <li><a href="#" class="button large">Full Story</a></li>
            </ul>
        </article>

        <!-- Posts -->
        <section class="posts">
            <!-- Pierwszy kafelek -->
            <article>
                <header>
                    <span class="date">April 24, 2017</span>
                    <h2><a href="#">Sed magna<br />
                    ipsum faucibus</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{$conf->app_url}/images/pic02.jpg" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            
            <!-- Drugi kafelek (z linkiem do kalkulatora) -->
            <article>
                <header>
                    <span class="date">Kalkulator</span>
                    <h2><a href="index.php?action=kalkulator">Kalkulator<br />
                    kredytowy</a></h2>
                </header>
                <a href="index.php?action=kalkulator" class="image fit"><img src="{$conf->app_url}/images/pic03.jpg" alt="" /></a>
                <p>Kliknij poniżej, aby przejść do kalkulatora kredytowego i obliczyć swoją miesięczną ratę.</p>
                <ul class="actions special">
                    <li><a href="index.php?action=kalkulator" class="button">Przejdź do kalkulatora</a></li>
                </ul>
            </article>
            
            <!-- Pozostałe kafelki -->
            <article>
                <header>
                    <span class="date">April 22, 2017</span>
                    <h2><a href="#">Primis eget<br />
                    imperdiet lorem</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{$conf->app_url}/images/pic04.jpg" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 18, 2017</span>
                    <h2><a href="#">Ante mattis<br />
                    interdum dolor</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{$conf->app_url}/images/pic05.jpg" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 14, 2017</span>
                    <h2><a href="#">Tempus sed<br />
                    nulla imperdiet</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{$conf->app_url}/images/pic06.jpg" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 11, 2017</span>
                    <h2><a href="#">Odio magna<br />
                    sed consectetur</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{$conf->app_url}/images/pic07.jpg" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
        </section>

        <!-- Footer -->
        <footer>
            <div class="pagination">
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <span class="extra">&hellip;</span>
                <a href="#" class="page">8</a>
                <a href="#" class="page">9</a>
                <a href="#" class="page">10</a>
                <a href="#" class="next">Next</a>
            </div>
        </footer>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="3"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </form>
        </section>
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
<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>
</html>