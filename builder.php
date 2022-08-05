<?php

    // $url = "https://maxohno.de/polynodes10/";
    // $url = "https://127.0.0.1/halbgeist/";
    $url = "https://halbgeist.com/";

    /* 
        $c_lightblue = "#457B9D";
        $c_darkblue = "#1D3557";

    */

    $c_darkblue = "#161F28";
    $c_lightblue = "#4156B9";

    function drawTopNav() {
        global $url;

        global $c_darkblue;
        global $c_lightblue;

        ?>
            <section style="height: 100px; background-color: <?php echo $c_darkblue; ?>; width: 100%;">
                <div style="width: 1000px; margin: auto; padding-left: 10px">  <!-- DIV ALLES HIER MITTIG LOL -->
                    <!-- TOP BAR -->
                    <div style="width: 100%; height: 100%; padding-top: 20px;">
                    
                        <table>
                            <tr>
                                <td style="padding-left: 0px">
                                    <a href="<?php echo $url;?>home/"> <img src="<?php echo $url;?>img/logo_text.png" style="height: 60px; margin-top: 5px"> </a>
                                </td>
                                <!--
                                    <th style="padding-left: 20px">
                                        <a href="<?php echo $url;?>home/" class="mainfont whitetext smalltext un"> halbgeist </a>
                                    </th>
                                -->

                                <td  style="padding-left: 220px;">
                                    <a href="<?php echo $url;?>server" class="mainfont whitetext smalltext un"> Server </a>  
                                </td>

                                <td  style="padding-left: 50px">
                                    <a href="<?php echo $url;?>sign-in" class="mainfont whitetext smalltext un"> Sign-in </a>
                                </td>

                                <td  style="padding-left: 50px">
                                    <a href="https://halbgeist.com/en/myaccount" class="mainfont whitetext smalltext un"> Client Area </a>
                                </td>

                                <td  style="padding-left: 50px">
                                    <a href="<?php echo $url;?>home/contact.php" class="mainfont whitetext smalltext un"> Contact </a>
                                </td>

                                <th  style="padding-left: 50px">
                                    <a href="<?php echo redirectDiscord(); ?>" target="_blank" rel="noopener noreferrer" class="boldfont whitetext smalltext un"> Discord </a>
                                </th>
                            </tr>
                        </table>
                    </div>
                </section>
        <?php
    }

    function redirectDiscord() {
        global $url;

        return $url . "discord";
    }

    function drawTopSection($h1, $t1, $t2, $b1, $a1, $p1, $s1) {
        global $url;

        global $c_darkblue;
        global $c_lightblue;

        drawTopNav();
        ?>      
                <section style="background-color: <?php echo $c_lightblue; ?>; width: 100%;">
                    <div style="width: 1000px; margin: auto; padding-left: 10px">  <!-- DIV ALLES HIER MITTIG LOL -->
                        <div style="display: inline-block; float-left; padding-top: 100px; padding-bottom: 100px">
                            <table class="mainfont whitetext" style="text-align: left">
                                <tr>
                                    <th>
                                        <a class="boldfont bigtext"> <?php echo $h1; ?> </a>
                                    <th>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="mediumtext"> <?php echo $t1; ?> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="mediumtext"> <?php echo $t2; ?> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-top: 20px">
                                        <a id="arrow" href="<?php echo $a1; ?>" class="boldfont whitetext smalltext btn_store bluebtncolor"> <?php echo $b1; ?> </a> <br> <br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <?php if ($p1 != "none") { ?>
                            <div style="display: inline; float: right; padding-right: 50px; padding-top: 50px">
                                <center> <img src="<?php echo $url;?>img/<?php echo $p1; ?>" style="width: <?php echo $s1; ?>; height: <?php echo $s1; ?>;"> </center>
                            </div>
                        <?php } ?>

                        
                    </div>
                </div>
            </section>
        <?php
    }

    function drawFooter() {
        global $url;
        ?>
            <section>
                <div style="width: 100%; background-color: #F4F5F7; padding-top: 20px; padding-bottom: 20px;">
                    <div style="width: 1000px; margin: auto">  <!-- DIV ALLES HIER MITTIG LOL -->
                        <table style="color: #333333; margin: auto" class="mainfont smalltext footertable">
                            <tr> 
                                <th> <a class="mediumsmalltext">halbgeist</a>.<a style="font-weight: 100">com</a> </th>

                                <th> <a class="mediumsmalltext">Services</a> </th>

                                <th> <a class="mediumsmalltext">Support</a> </th>

                                <th> <a class="mediumsmalltext">Legal</a> </th>
                            </tr>

                            <tr> 
                                <td> <a href="mailto:admin@halbgeist.com"> admin@halbgeist.com </a> </td>

                                <td> <a href="<?php echo $url?>server/minecraft"> Minecraft Hosting </a> </td>

                                <td> <a href="mailto:info@halbgeist.com"> info@halbgeist.com </a> </td>

                                <td> <a href="<?php echo $url?>home/tos.php"> Terms of Service </a> </td>
                            </tr>

                            <tr> 
                                <td> Registered in Germany</td>

                                <td> <a href="<?php echo $url?>server/fivem"> FiveM Hosting </a> </td>

                                <td> Ticketpanel </td>

                                <td> <a href="<?php echo $url?>home/privacy.php"> Privacy Policy </a> </td>
                            </tr>

                            <tr> 
                                <td> <a class="tinytext"> </a> </td>

                                <td> <a href="<?php echo $url?>server"> Gameserver Hosting </a> </td>

                                <td> <a href="<?php echo redirectDiscord(); ?>"> Discord </a> </td>

                                <td> <a href="<?php echo $url?>home/impressum.php"> Impressum </a> </td>
                            </tr>

                            <tr>
                                <td colspan="4"> 
                                    <div style="margin-top: 20px; width: 100%; height: 2px; background-color: #666666"> </div> 

                                    <div style="margin-top: 10px"> 
                                        <a class="mainfont" style="color: #333333; padding-right: 20px"> © 2021 - halbgeist KG </a>
                                        <a class="mainfont" href="https://halbgeist.com/en/myaccount" style="color: #333333; padding-right: 20px"> Client Area </a>
                                        <a class="mainfont" href="https://panel.halbgeist.com" style="color: #333333; padding-right: 20px"> Panel </a>
                                        <a class="mainfont" href="https://status.halbgeist.com" style="color: #333333; padding-right: 20px"> Status </a>
                                        <a class="mainfont" href="https://halbgeist.com/admin" style="color: #333333; padding-right: 20px"> Admin </a>
                                    </div>
                                    
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>
            </section>
        <?php
    }

    function supportedGame($game, $path) {
        global $url;
        ?>  
            <div onclick="window.location='<?php echo $url;?>server/<?php echo $path; ?>';" id="arrow" class="supportedgame frame" style="height: 100px; width: 300px">
                <table>
                    <tr style="height: 100px">
                        <td style="padding-right: 10px; padding-left: 30px"> 
                            <img style="height: 50px;" src="<?php echo $url;?>server/<?php echo $path; ?>/img/icon.png">
                        </td>

                        <td style="width: 280px">
                            <center> <a style="font-size: 25px; auto; width: 100%;" class="mainfont whitetext"> <?php echo $game; ?> </a> </center>
                        </td>
                    </tr>
                </table>
            </div>
        <?php
    }

    function showPlan($title, $undertitle, $url, $bg, $height, $vcpu, $slots, $ram, $diskspace, $price, $adjective, $extra1, $extra2) {
        ?>  
            <div style="height: <?php echo $height?>px; width: 300px; ">

                <div style="width: 90%; background-color: <?php echo $bg; ?>; padding: 5%"> 
                    <center> <a class="whitetext mediumtext boldfont"> <?php echo $title; ?> </a>
                    <?php 
                        if ($undertitle != "none") {
                            ?> 
                                <br> <a class="whitetext boldfont tinytext"> <?php echo $undertitle; ?> </a> </center>
                            <?php
                        }
                    ?> 
                    
                </div>

                <div id="arrow" class="planframe showplan" style="background-color: #212121; height: 100%">
                    <table class="whitetext mainfont smalltext"> 

                        <tr>
                            <td style="padding-left: 20px"> 
                                <ul class="showplanUL">
                                    <?php 
                                        if ($slots != "none") {
                                            ?> 
                                                <li> <?php echo $slots; ?> Slots </li> 
                                            <?php
                                        } else if ($vcpu != "none") {
                                            ?>
                                                <li> <?php echo $vcpu; ?>x vCPU </li>
                                                <li> <?php echo $ram; ?> GB RAM </li>
                                            <?php
                                        }    
                                    ?>
                                    
                                    <li> <?php echo $diskspace; ?> GB Diskspace </li>
                                    <li id="checkmark"> <?php echo $adjective; ?> Performance </li>
                                    <li id="checkmark"> DDOS Protection </li>
                                    <li id="checkmark"> Unlimited Slots & Traffic </li>
                                    <li id="checkmark"> Free Backups </li>
                                    <?php if ($extra1 != "none") {
                                        ?> <li id="checkmark"> <?php echo $extra1 ?> </li> <?php   
                                    } ?>
                                    <?php if ($extra2 != "none") {
                                        ?> <li id="checkmark"> <?php echo $extra2 ?> </li> <?php   
                                    } ?>
                                </ul>
                            </td>
                        </tr>

                        <tr> 
                            <td style="padding-left: 20px; padding-top: 20px; padding-bottom: 30px"> 
                                <a href="<?php echo $url;?>" class="mainfont whitetext tinytext btn_store greenbtn" > <div style="display: inline" class="boldfont"> <?php echo $price?> € </div> / month </a>
                            </td>
                        </tr>

                    </table>
                </div>

            </div>
        <?php
    }

    function storeGame($game, $price, $plan) {
        global $url;

        global $c_darkblue;

        ?>
            <div class="frame storeframe" style="height: 80px; width: 420px; padding: 20px; background-color: <?php echo $c_darkblue; ?>">
                <table style="">
                    <tr>
                        <th style="width: 180px" rowspan="2">  
                            <div style="display: inline-block; float: left; padding-left: 20px"> <img src="<?php echo $url;?>server/<?php echo $plan;?>/img/icon.png" style="width: 40px;"> </div>
                            <div style="display: inline-block; padding-top: 10px; padding-left: 10px"> <a style="font-size: 20px;" class="boldfont whitetext"> <?php echo $game; ?> </a> </div>
                        </th>

                        <td style="width: 140px">
                            <center> <a class="mainfont whitetext tinytext">  Starting at </a> </center>
                            <center> <a class="boldfont whitetext smalltext"> <b> <?php echo $price;?> € </b> / mo </a> </th> </center>
                        </td>

                        <td style="width: 130px; height: 80px" rowspan="2">
                            <center> <a id="arrow" href="<?php echo $url;?>server/<?php echo $plan?>" class="boldfont whitetext tinytext btn_store mainbtncolor" > View Plans</a> </center>
                        </td>
                    </tr>

                </table>
            </div>
        <?php
    }

    function serverFAQ($id, $q, $a) {
        ?>
            <div class="mainfont blacktext" style="margin: 20px; width: 950px">
            
                <script>

                    function toggleElement(id)
                    {
                        if(document.getElementById(id).style.display == 'none')
                        {
                            document.getElementById(id).style.display = '';
                        }
                        else
                        {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                </script>

                <div style="cursor: pointer; padding: 20px;" onclick="toggleElement('<?php echo $id; ?>')">
                    <p>
                        <a style="text-decoration: none" class="boldfont smalltext"> <?php echo $q; ?> </a> <a style="float: right"> <i class="arrow down"></i> </a>
                        <div style="background-color: black; width: 100%; height: 2px; margin-top: 20px"> </div>
                    </p>
                </div>

                <div id="<?php echo $id; ?>" style="display:none; padding: 20px; padding-top: 0px" class="smalltext">
                    <?php echo $a; ?> 
                </div>

            </div>
        <?php
    }

    function showcaseReason($title, $text) {
        global $url;
        ?>
            <div class="reasonframe" style="width: 430px; margin-bottom: 60px">
                <table style="">
                    <tr style="background-color: #ECECECs">
                        <th style="width: 400px; padding: 20px; background-color: #212121; border-radius: 30px 30px 10px 10px;">  
                            <center style="width: 100%"> <a style="font-size: 30px;" class="boldfont whitetext"> <?php echo $title; ?> </a> </center>
                        </th>

                    </tr>

                    <tr>
                        <td style="width: 400px; padding-top: 10px; padding: 20px; padding-top: 20px; padding-bottom: 40px; border-radius: 10px">
                            <a class="mainfont blacktext smalltext">  <?php echo $text; ?> </a>
                        </td>
                    </tr> 

                </table>
            </div>
        <?php
    }

    function showSpecialNeedsServer() {
        ?>
            <!-- DISCORD SECTION -->
            <section style="background-color: white; height: 340px; margin-top: 0px; padding-bottom: 50px">
                <div style="width: 1000px; margin: auto; padding-left: 10px; padding-right: 10px; padding-top: 50px">  <!-- DIV ALLES HIER MITTIG LOL -->

                    <div class="framewhite" style="width: 800px; padding: 50px; padding-top: 30px; background-color: #7289da; margin: auto">
                        <table>
                            <tr>
                                <th rowspan="3" style="padding-right: 45px">
                                    <img src="../../img/discord_logo.png" style="width: 180px; padding-top: 20px">
                                </th>

                                <th style="width: 800px">  
                                    <a style="float: left" class="mediumtext boldfont whitetext"> Special Configuration </a>
                                </th>

                            </tr>

                            <tr>
                                <td style="width: 600px; padding-top: 10px; float: left; text-align: left">
                                    <a class="mainfont whitetext smalltext tinytext"> Do you need more Performance or a special configuration for the server? Create a ticket on our Discord Server and contact us! </a>
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
        <?php
    }

    function showAboutOurNodes() {
        ?>
            <!-- About our Nodes -->
            <section id="us" style="">
                <div style="width: 900px; margin: auto; padding-left: 10px; padding-right: 10px; padding-bottom: 30px; ">  <!-- DIV ALLES HIER MITTIG LOL -->
                    <div style="display: inline-block; float-left; padding-top: 10px;">

                        <center style="width: 100%; height: 60px"> <a class="boldfont mediumtext"> About our Nodes</a> </center>

                        <div class="flex-container" style="width: 100%">
                            <?php showcaseReason("Location", "All our Gameserver are equipped with the newest Generation Ryzen Processors to provide the best performance." ); ?>

                            <?php showcaseReason("Hardware", "To ensure best safety for our Customers we offer free L4 DDOS Protection for everybody." ); ?>

                            <?php showcaseReason("Uptime", "Other than the competition we do not limit or charge for slots and traffic of our Service." ); ?>

                            <?php showcaseReason("Panel & Features", "As we value our customers privacy, we completely delete all data on request and keep no logs of any server activity or files." ); ?>

                            <?php showcaseReason("Setup", "Everybody knows how frustrating it can be to reset a Server, in order to provide the best experience we offer free backups." ); ?>

                            <?php showcaseReason("Protection", "No need to wait for the Server, once the order has been approved your Server will be installed and activated." ); ?>


                        </div>

                    </div>
                </div>
            </section>
        <?php
    }
?>