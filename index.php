<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $ini = parse_ini_file('config.ini'); ?>
        <title><?php $sitename = $ini['sitename']; echo $sitename?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <div class="header">
            <h1 class="header-title"><?php $sitename = $ini['sitename']; echo $sitename?></h1><br><br><br>
        </div>
        <div class="content">
            <center>
                <div class="box">
                    <?php include "status.php"?>
                </div>
            <span class="footer">UnitPage v1 | powered by <a href="https://UnitBots.de">UnitBots.de</a><br>
            <a href="https://UnitBots.de/">Host your own Page?</a></span>
            </center>
        </div>
        <br>
    
    </body>
</html>