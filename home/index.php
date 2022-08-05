<?php
    require_once("../builder.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
        <title> halbgeist </title>
    </head>
    <body>

            <?php drawTopSection("halbgeist", "Gameserver hosting made easy", "Transparent & Simple Pricing", "View featured Gameserver", "#store", "logo.png", "300px"); ?>
            
            <!-- STORE SECTION -->
            <section id="store" style="padding-bottom: 40px; padding-top: 30px">
                <div style="width: 1000px; margin: auto">  <!-- DIV ALLES HIER MITTIG LOL -->
                    <div>

                        <div style="display: inline-block; float-left; width: 100%; padding-bottom: 30px">
                            <table class="mainfont" style="text-align: left; width: 100%">
                                <tr>
                                    <th>
                                        <center> <a class="boldfont bigtext"> Gameserver </a> </center>
                                    <th>
                                </tr>

                            </table>
                        </div>

                        <div class="flex-container" style="width: 100%">

                            <?php storeGame("Minecraft", "4", "minecraft" ); ?>

                            <?php storeGame("FiveM", "2", "fivem" ); ?>

                            <?php storeGame("Terraria", "2", "terraria"); ?>

                            <?php storeGame("CS:GO", "2", "csgo"); ?>

                            <?php storeGame("TS3", "2", "ts3"); ?>

                            <div class="frame storeframe" style="height: 80px; width: 420px; padding: 20px; background-color: #1D3557">
                                <table style="">
                                    <tr>
                                        <th style="width: 500px;">  
                                            <center> <a style="font-size: 21px;" class="boldfont whitetext"> 10+ more Games supported! </a> </center>
                                        </th>

                                        <td style="width: 300px; height: 80px">
                                            <center> <a id="arrow" href="../server<?php echo $plan?>" class="boldfont whitetext tinytext btn_store mainbtncolor" > Check them out! </a> </center>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
   
                    </div>
                </div>
            </section>

            <!-- DISCORD SECTION -->
            <section style="background-color: #212121; height: 340px">
                <div style="width: 1000px; margin: auto; padding-left: 10px; padding-right: 10px; padding-top: 50px">  <!-- DIV ALLES HIER MITTIG LOL -->

                    <div class="framewhite" style="width: 800px; padding: 50px; padding-top: 30px; background-color: #7289da; margin: auto">
                        <table>
                            <tr>
                                <th rowspan="3" style="padding-right: 45px">
                                    <img src="../img/discord_logo.png" style="width: 180px; padding-top: 20px">
                                </th>

                                <th style="width: 800px">  
                                    <a style="float: left" class="mediumtext boldfont whitetext"> Official Discord Support </a>
                                </th>

                            </tr>

                            <tr>
                                <td style="width: 600px; padding-top: 10px; float: left; text-align: left">
                                    <a class="mainfont whitetext smalltext tinytext"> In order to provide the best possible support we are also actively helping our members on our official halbgeist Discord Server. </a>
                                </td>
                            </tr> 

                            <tr>
                                <td style="padding-top: 20px"> 
                                    <a id="arrow"  href="<?php echo redirectDiscord(); ?>" target="_blank" rel="noopener noreferrer" class="btn_store greenbtn boldfont whitetext smalltext" style="">Join our Discord! </a>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>
            </section>

            <section style="background-color: #ffffff; padding-bottom: 30px; padding-top: 30px">
                <div style="width: 1000px; margin: auto; padding-left: 10px; padding-right: 10px; padding-top: 50px:">  <!-- DIV ALLES HIER MITTIG LOL -->

                    <center style="width: 100%; height: 60px"> <a class="boldfont mediumtext"> Why choose halbgeist?</a> </center>

                    <div class="mainfont blacktext" style="margin: 20px; margin-left: 50px; width: 950px">
                    
                        <script>

                            function resetFaqTabBG() {
                                var tabs = document.getElementsByClassName("faqtab");
                                for (var i = 0; i < tabs.length; i++) {
                                    tabs[i].style.backgroundColor = "<?php echo $c_lightblue; ?>"
                                    tabs[i].style.paddingLeft = "10px";
                                    tabs[i].style.transition = "0.3s";
                                }
                            }

                            function selectTab(tab, text) {
                                document.getElementById("textfield").innerHTML = text;
                                resetFaqTabBG();
                                document.getElementById(tab).style.backgroundColor = "<?php echo $c_darkblue; ?>";
                                document.getElementById(tab).style.paddingLeft = "20px";
                            }

                        </script>

                        <div class="smallmediumtext whitetext shadow" id="textfield" style="text-align: justify; border-radius: 0px 15px 15px 0px; display: inline-block; margin: 0; padding: 20px; padding-right: 40px; width: 490px; height: 310px; background-color: <?php echo $c_darkblue; ?>">
                            %placeholder%
                        </div>

                        <div class="whitetext shadow" style="border-radius: 15px 0px 0px 15px; display: inline-block; float: left; width: 350px; height: 350px; margin: 0; background-color: <?php echo $c_lightblue?>" >
                            <br>
                            <ul style="list-style-type: none;">
                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="performance" onclick="selectTab('performance', 'All our Gameserver are equipped with the newest Generation Ryzen Processors to provide the best performance.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> Fast Performance </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="ddos" onclick="selectTab('ddos', 'To ensure best safety for our Customers we offer free L4 DDOS Protection for everybody.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> DDOS Protection </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="traffic" onclick="selectTab('traffic', 'Other than the competition we do not limit or charge for traffic or bandwidth of our Service.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> Unlimited Traffic </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="privacy" onclick="selectTab('privacy', 'As we value our customers privacy, we completely delete all data on request and keep no logs of any server activity or files.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> 100% Privacy </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="backups" onclick="selectTab('backups', 'Everybody knows how frustrating it can be to reset a Server, in order to provide the best experience we offer free backups.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> Free Backups </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div style="cursor: pointer; padding-left: 10px;" class="faqtab" id="setups" onclick="selectTab('setups', 'No need to wait for the Server, once the order has been approved your Server will be installed and activated.')">
                                        <p style="padding: 5px">
                                            <a style="padding-left: 10px; text-decoration: none" class="boldfont mediumtext"> Instant Setups </a> <a style="float: right; padding-right: 10px; padding-top: 5px"> <i class="arrow right"></i> </a>
                                        </p>
                                    </div>
                                </li>
                            <ul>
                        </div>

                    </div>
                </div>

                <script> selectTab('performance', "All our Gameserver are equipped with the newest Generation Ryzen Processors to provide the best performance."); </script>
            </section>

            <?php drawFooter(); ?>

    </body>
</html>