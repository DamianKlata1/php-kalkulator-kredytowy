<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="{$conf->app_url}/index.php">Strona główna</a></h1>
        <nav>
            <a href="#form"><p>Formularz</p></a>
            <a href="{$conf->action_url}logout"  class="button">wyloguj</a>
        </nav>

    </header>
    <section id="wrapper">
        <header>
            <div class="inner">
                <h2>{$page_title|default:"Tytuł domyślny"}</h2>
                <p>{$page_header|default:"Tytuł domyślny"}</p>
                <p>{$page_description|default:"Opis domyślny"}</p>
            </div>
        </header>
    </section>


    <!-- Footer -->
    {block name=content}Domyślna treść zawartości .... {/block}

    {block name=footer}
        <section id="footer">
            <div class="inner">
                <ul class="copyright">
                    <li>Stopka kalkulatora kredytowego</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </section>
    {/block}

</div>




</body>
</html>