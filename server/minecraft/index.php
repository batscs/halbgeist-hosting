<?php
    require_once("../../builder.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.png">
        <title> Minecraft Hosting - halbgeist </title>
    </head>
    <body style="background-color: white">

            <?php 
                drawTopNav(); 
                global $c_darkblue;
            ?>

            <section style="background-color: <?php echo $c_darkblue; ?>; padding-top: 50px; padding-bottom: 30px">
                <div style="width: 1000px; margin: auto; padding-left: 10px">  <!-- DIV ALLES HIER MITTIG LOL -->
                    
                    <div class="mainfont whitetext"> 
                        <a class="boldfont bigtext"> Minecraft Hosting</a>
                    </div>
                    
                </div>
            </section>

            <!-- PLANS SECTION -->
            <section id="games" style="padding-bottom: 0px; padding-top: 0px; height: 600px">
                <div style="width: 1000px; margin: auto; padding-top: 20px">  
                    <div>

                        <div class="flex-container" style="width: 99%">

                            <?php showPlan("Iron", "COMMUNITYS CHOICE", "https://halbgeist.com/order-steps/server/104", "#636e72", 465, 3, "none", 6, 60, 12, "Excellent", "Priority Support", "none"); ?>
                            <?php showPlan("Diamond", "none", "https://halbgeist.com/order-steps/server/103", "#74b9ff", 510, 6, "none", 12, 100, 24, "Extreme", "Priority Support", '"Premium" Discord Role'); ?>
                            <?php showPlan("Wood", "none", "https://halbgeist.com/order-steps/server/105", "#CD7F32", 420, 1, "none", 2, 40, 4, "Fast", "none", "none"); ?>
                                    
                        </div>
                    </div>
                </div>
            </section>

            <!-- CUSTOM CONFIG SECTION -->
            <section id="games" style="padding-bottom: 40px; padding-top: 60px">
                <div style="width: 1000px; margin: auto; padding-top: 20px">  
                    <div class="framewhite" style="width: 800px; padding: 50px; padding-top: 30px; background-color: #212121; margin: auto">
                        <table>
                            <tr>
                                <th style="padding-right: 20px; padding-top: 10px; width: 90px">
                                    <img src="img/icon.png" style="width: 60px">
                                </th>

                                <th style="width: 800px">  
                                    <a style="float: left;" class="bigtext boldfont whitetext"> Custom Configuration </a>
                                </th>
                            </tr>

                            <tr class="boldfont whitetext mediumtext" style="padding-top: 10px"> 
                                <td style="padding-top: 20px;" > Level </td>

                                <td style="padding-top: 20px;" > <input type="range" min="1" max="8" value="3" class="slider" id="sliderLevel"> </td>

                                <td style="padding-top: 20px; padding-right: 20px"> <a class="smalltext">  </a> <a id="valueLevel"> </a> </td>
                            </tr>

                            <tr>
                                <td colspan="3" class="boldfont whitetext mediumtext" style="padding-top: 30px"> 
                                    <div style="width: 230px; float: left;"> <a id="price"> ? </a> € <a class="smalltext"> / MONTH </a> </div> 

                                    <div style="width: 160px; float: left;"> <a id="cpu"> ? </a> <a class="smalltext"> VCPU </a> </div> 

                                    <div style="width: 180px; float: left;"> <a id="ram"> ? </a> <a class="smalltext"> GB RAM </a> </div> 

                                    <div style="width: 210px; float: left;"> <a id="diskspace"> ? </a> <a class="smalltext"> GB DISKSPACE </a> </div> 
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="padding-top: 35px"> 
                                    <a style="margin-left: 0" onclick="getOrderLink()" target="_blank" rel="noopener noreferrer" class="btn_store greenbtn boldfont whitetext smalltext"> Purchase now</a>
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>

                <script> 
                    var level = document.getElementById("sliderLevel");
                    var value = document.getElementById("valueLevel");

                    var price = document.getElementById("price");
                    var cpu = document.getElementById("cpu");
                    var ram = document.getElementById("ram");
                    var disk = document.getElementById("diskspace");

                    value.innerHTML = level.value;

                    level.oninput = function() {
                        value.innerHTML = level.value;
                        recalculatPrice();
                    }

                    function recalculatPrice() {
                        var lvl = level.value;
                        let disker = [40,50,60,80,90,100,120,150];

                        cpu.innerHTML = lvl;
                        ram.innerHTML = lvl * 2;
                        disk.innerHTML = disker[lvl - 1];

                        price.innerHTML = (lvl * 2) * 2; // ram * 2 = preis €
                    } 
                    recalculatPrice();

                    function getOrderLink() {
                        var lvl = level.value;
                        let linker = ["https://halbgeist.com/order-steps/server/105", 
                                        "https://halbgeist.com/order-steps/server/108", 
                                        "https://halbgeist.com/order-steps/server/104", 
                                        "https://halbgeist.com/order-steps/server/109", 
                                        "https://halbgeist.com/order-steps/server/110", 
                                        "https://halbgeist.com/order-steps/server/103", 
                                        "https://halbgeist.com/order-steps/server/106", 
                                        "https://halbgeist.com/order-steps/server/107", 
                                        "https://wisecp/irgendwas9", 
                                        "https://wisecp/irgendwas10", ]

                        window.open(linker[lvl - 1]);
                    }

                </script>
            </section>

            <!-- FAQ SECTION -->
            <section id="games" style="padding-bottom: 0px; padding-top: 40px">

                <div style="width: 1000px; margin: auto;">  

                    <div class="whitetext" style="padding-top: 30px; padding-bottom: 50px; width: 950px; margin: auto">

                        <div style="padding-bottom: 30px; padding-top: 10px">
                            <center> <a class="boldfont mediumtext blacktext"> Frequently Asked Questions </a> </center>
                        </div>

                        <div class="flex-container" style="width: 100%">

                            <?php serverFAQ("a1", "Can I use Plugins and Mods?", "Yes, there are no restrictions to the mods and plugins you install on your server. We support all Spigot Plugins and Forge Mods. You can install them by using our Plugin Installer or the FTP access to your Server."); ?>
                            <?php serverFAQ("a2", "What configuration should I choose?", "If you play the newest minecraft versions or heavy modpacks with some friends the Iron Plan will fullfill your needs, otherwise if you play older versions with only a few players the Wood Plan is enough. <br> <br> If you are looking to host a server for your community with a lot of players and multiple worlds you should choose the Diamond Plan as it will guarantee the best possible performance for your server and the best experience for your players."); ?>

                                    
                        </div>

                    </div>

                </div>
            </section>

            <?php showSpecialNeedsServer(); ?>

            <?php showAboutOurNodes(); ?>

            <?php drawFooter(); ?>

    </body>
</html>