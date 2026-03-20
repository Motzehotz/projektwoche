<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SchönesGlas</title>

</head>

</style>
    <body>
        <header>
            <h1>SchönesGlas</h1>
        </header>

        <div id="nav">
            <a href="index.html">Startseite</a> &#9
            <a href="produkte.html">Produkte</a> &#9
            <a href="dienstleistungen.html">Dienstleistungen</a> &#9
            <a href="kontakt.html">Kontakt</a> &#9
            <a href="login.php">Intranet</a> &#9
        </div>

        <div class="form">
            <form action="functions.php" method="post">
                <div class="form-row">
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-row">
                    <input type="password" id="passwort" name="passwort">
                </div>
                <div class="form-row">
                    <input type="submit" value="Einloggen">
                </div>
            </form>
        </div>

        <footer>
        <br>
            <a href="impressum.html">Impressum</a>
            <hr id="line_footer">
            <a href="vorstellung.html">Über uns</a>
            <hr id="line_footer">
            <a href="quelle.html">Quellen</a>
        </footer>

        <?php
            include("functions.php");
        ?>
    </body>
</html>