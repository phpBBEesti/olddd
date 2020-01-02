<?php

$language["BLACKJACK"] = "Blackjack";
$language["BJ_WELCOME_1"] = "<p><font color='#FFFFFF'>Eesmärgiks on saada käsi võimalikult lähedale 21-le ilma lõhki minemata.<br>Mängid diileri vastu ja võitmiseks pead saama parema käe, kui temal.</font>";
$language["BJ_WELCOME_2"] = "<font color='yellow'><b><br>Iga mäng maksab ".makesize($btit_settings["bj_blackjack_stake"])." uploadi.</p></b></font><font size=2 color='#FFFFFF'><li><b>Blackjacki eest võidad ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_blackjack_prize"])+$btit_settings["bj_blackjack_stake"])."</li><li>Diilerist parema käe eest võidad ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_normal_prize"])+$btit_settings["bj_blackjack_stake"])."</li><li>Viigi puhul saad tagasi algpanuse.</li><li>Kaotades ei saa sa midagi.</li></font>";
$language["CONTINUE"] = "Jätka";
$language["DEALER_HAND"] = "<font color='#FFFFFF' face='Arial'><b>Diileri käsi (";
$language["YOUR_HAND"] = "<font color='#FFFFFF' face='Arial'><b>Sinu käsi (";
$language["HIT"] = "Lisakaart";
$language["STAND"] = "Jääb nii";
$language["ACTIVE_GAME_1"] = "Sul juba on mäng pooleli, ";
$language["ACTIVE_GAME_2"] = " jätkamiseks.";
$language["YOU_WIN"] = "<font color='lime' size='2'><b>Sina võitsid!</b></font>";
$language["YOU_LOSE"] = "<font color='red' size='2'><b>Sina kaotasid!</b></font>";
$language["PUSH"] = "<font color='orange'><b>Viik!</b></font>";
$language["INSUFFICIENT_UPLOAD_CREDIT"] = "<font color='#FF0000' size='2'><b>Sul ei ole piisavalt uploadi, et mängida!</b></font>";
$language["PLAY_AGAIN"] = "<font color='yellow' face='Arial' size='2'>Mängi uuesti</font>";


?>