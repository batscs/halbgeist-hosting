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
        <title> Terraria Hosting - halbgeist </title>
    </head>
    <body style="background-color: white">

            <?php 
                drawTopNav(); 
                global $c_darkblue;
            ?>

            <section style="background-color: <?php echo $c_darkblue; ?>; padding-top: 50px; padding-bottom: 30px">
                <div style="width: 1000px; margin: auto; padding-left: 10px">  <!-- DIV ALLES HIER MITTIG LOL -->
                    
                    <div class="mainfont whitetext"> 
                        <a class="boldfont bigtext"> Terarria / tModLoader Hosting</a>
                    </div>
                    
                </div>
            </section>

            <!-- STORE SECTION -->
            <section id="games" style="padding-bottom: 0px; padding-top: 0px; height: 600px">
                <div style="width: 1000px; margin: auto; padding-top: 20px">  
                    <div>

                        <div class="flex-container" style="width: 100%">

                            <?php showPlan("tModLoader", "BEST EXPERIENCE", "https://halbgeist.com/wisecp/irgendwas", "#4C7028", 420, "none", 8, -1, 30, 4, "Excellent", "Priority Support", "none"); ?>
                            <?php showPlan("Community", "none", "https://halbgeist.com/wisecp/irgendwas", "#B35FF1", 470, "none", 16, -1, 50, 8, "Extreme", "Priority Support", '"Premium" Discord Role'); ?>
                            <?php showPlan("Basic", "none", "https://halbgeist.com/wisecp/irgendwas", "#CDB87F", 370, "none", 4, -1, 10, 2, "Fast", "none", "none"); ?>
                                    
                        </div>
                    </div>
                </div>
            </section>

            <!-- CUSTOM CONFIG SECTION -->
            <section id="games" style="padding-bottom: 40px; padding-top: 30px">
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

                                <td style="padding-top: 20px;" > <input type="range" min="1" max="8" value="4" class="slider" id="sliderLevel"> </td>

                                <td style="padding-top: 20px; padding-right: 20px"> <a class="smalltext">  </a> <a id="valueLevel"> </a> </td>
                            </tr>

                            <tr>
                                <td colspan="3" class="boldfont whitetext mediumtext" style="padding-top: 30px"> 
                                    <div style="width: 230px; float: left;"> <a id="price"> ? </a> € <a class="smalltext"> / MONTH </a> </div> 

                                    <div style="width: 160px; float: left;"> <a id="cpu"> ? </a> <a class="smalltext"> SLOTS </a> </div> 

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
                        let sloter = [2,4,6,8,12,16,24,32];
                        let disker = [10,10,20,30,30,50,75,100];
                        let ramer = [0.25, 0.5, 0.75, 1, 2, 3, 4, 5];
                        // let pricer =  [1,2,3,4,5,6,7,8];

                        cpu.innerHTML = sloter[lvl - 1];

                        ram.innerHTML = ramer[lvl - 1];
                        disk.innerHTML = disker[lvl - 1];

                        price.innerHTML = sloter[lvl - 1] * 0.5;
                    } 
                    recalculatPrice();

                    function getOrderLink() {
                        var lvl = level.value;
                        let linker = ["https://wisecp/irgendwas1", 
                                        "https://wisecp/irgendwas2", 
                                        "https://wisecp/irgendwas3", 
                                        "https://wisecp/irgendwas4", 
                                        "https://wisecp/irgendwas5", 
                                        "https://wisecp/irgendwas6", 
                                        "https://wisecp/irgendwas7", 
                                        "https://wisecp/irgendwas8", 
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

                            <?php serverFAQ("a1", "Can I use Mods? (tModLoader)", "Absolutely, we support the use of tModLoader for the hosting of your server so you and your friends can play with all the mods you want. <br> <br> To install the mods you need to first install them on your own computer, you can find the mod files in Documents/My Games/Terrari/ModLoader/Mods <br> Once you found the Mods you can upload them to the Mods folder on the Server, after a restart all mods are successfully installed."); ?>
                            <?php serverFAQ("a2", "What version is the Server running on?", "Vanilla Terraria is running on the Version 1.4 while tModLoader runs on Terraria 1.3"); ?>

                                    
                        </div>

                    </div>

                </div>
            </section>

            <?php showSpecialNeedsServer(); ?>

            <?php showAboutOurNodes(); ?>

            <?php drawFooter(); ?>

    </body>
</html>