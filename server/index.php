<?php
    require_once("../builder.php");
?>
<!DOCTYPE html>
<!-- pls help me im being held hostage, contact hostage@halbgeist.io -->
<!-- im offering a free +20€ balance if you can help free me -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
        <title> Gameserver - halbgeist </title>
    </head>
    <body style="background-color: white">

            <?php drawTopSection("Gameserver", "Best Performing Gameserver by <a class='boldfont mediumtext'> halbgeist </a>", "Including newest Technologies and Features", "View all supported Games", "#games", "gameserver_logo.png", "320px"); ?>
            
            <!-- STORE SECTION -->
            <section id="games" style="padding-bottom: 40px; padding-top: 30px">
                <center> <a class="boldfont mediumtext"> SUPPORTED GAMES / MODS </a> </center>
                <div style="width: 1000px; margin: auto; padding-top: 20px">  
                    <div>

                        <div class="flex-container" style="width: 100%">
                            <?php supportedGame("ARK: Survival Evolved", "ark/"); ?>
                            <?php supportedGame("Counter-Strike: Global Offensive", "csgo/"); ?>
                            <?php supportedGame("GTA V: FiveM", "fivem/"); ?>
                            <?php supportedGame("TeamSpeak3", "ts3/"); ?>
                            <?php supportedGame("Terraria & tModLoader", "terraria/"); ?>
                            <?php supportedGame("San Andreas: MultiPlayer", "samp/"); ?>
                            <?php supportedGame("Minecraft", "minecraft/"); ?>
                                    
                        </div>
                    </div>
                </div>
            </section>

            <?php drawFooter(); ?>

    </body>
</html>