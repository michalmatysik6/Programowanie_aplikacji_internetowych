<!DOCTYPE HTML>
<html>
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
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
                Zalogowany jako: <strong>{$user->login}</strong> (rola: {$role})
                <a href="index.php?action=logout">wyloguj</a>
                <a href="index.php">← strona główna</a>
            </div>
            
            <div class="credit-calculator">
                <form action="index.php?action=kalkulator" method="post">
                    <label for="id_kwota">Kwota kredytu (zł):</label>
                    <input id="id_kwota" type="text" name="kwota" value="{$kwota|default:''}" />

                    <label for="id_lata">Liczba lat:</label>
                    <input id="id_lata" type="text" name="lata" value="{$lata|default:''}" />

                    <label for="id_op">Oprocentowanie roczne (%):</label>
                    <input id="id_op" type="text" name="op" value="{$op|default:''}" />

                    <input type="submit" value="Oblicz ratę" />
                </form>

                {if $messages|@count > 0}
                    <div class="messages err">
                        <ol>
                        {foreach $messages as $msg}
                            <li>{$msg}</li>
                        {/foreach}
                        </ol>
                    </div>
                {/if}

                {if isset($result)}
                    <div class="messages inf">
                        Miesięczna rata: {$result|string_format:"%.2f"} zł
                    </div>
                {/if}
            </div>
        </section>
    </div>
</div>

<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>
</html>