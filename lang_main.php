<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // if your language is  right to left then uncomment this line
// $language["charset"]="ISO-8859-1"; // uncomment this line with specific language charset if different than tracker's one
$language["ACCOUNT_CONFIRM"]="$SITENAME konto kinnitamine.";
$language["ACCOUNT_CONGRATULATIONS"]="Palju õnne, sinu konto on nüüd kehtiv!<br />Saad sisse logida <a href=index.php?page=login>login</a> kasutades oma konto andmeid.";
$language["ACCOUNT_CREATE"]="Registreeru";
$language["ACCOUNT_DELETE"]="Delete account";
$language["ACCOUNT_DETAILS"]="account details";
$language["ACCOUNT_EDIT"]="Muuda kontot";
$language["ACCOUNT_MGMT"]="Account Managment";
$language["ACCOUNT_MSG"]="Hello,\n\nThis email has been sent because someone has requested an account on our site with this email address.\nIf you aren't the requester ignore this email, otherwise please confirm the account \n\nBest regards from the staff.";
$language["ACTION"]="Action";
$language["ACTIVATED"]="Aktiivne";
$language["STOPPED"]="Peatatud";
$language["ACTIVE"]="Aktiivne";
$language["ACTIVE_ONLY"]="Active only";
$language["ADD"]="Lisa";
$language["ADDED"]="Lisatud";
$language["ADMIN_CPANEL"]="Acces ACP";
$language["ADMINCP_NOTES"]="Here you can control all settings of your tracker...";
$language["ALL"]="All";
$language["ALL_SHOUT"]="All Shouts";
$language["ANNOUNCE_URL"]="Trackeri announce'i URL:";
$language["ANONYMOUS"]="Anonüümne";
$language["ANSWER"]="Vasta";
$language["AUTHOR"]="Autor";
$language["AVATAR_URL"]="Avatar (URL): ";
$language["AVERAGE"]="Average";
$language["BACK"]="Tagasi";
$language["BAD_ID"]="Bad ID!";
$language["BCK_USERCP"]="Back to User Panel";
$language["BLOCK"]="Block";
$language["BODY"]="Sisu";
$language["BOTTOM"]="bottom";
$language["BY"]="by";
$language["CANT_DELETE_ADMIN"]="It's impossible to delete another admin!";
$language["CANT_DELETE_NEWS"]="You're not authorized do delete news!";
$language["CANT_DELETE_TORRENT"]="You're not authorized to delete this torrent!...";
$language["CANT_DELETE_USER"]="You're not authorized to delete users!";
$language["CANT_DO_QUERY"]="Can't do SQL query - ";
$language["CANT_EDIT_TORR"]="You're not authorised to edit torrent!";
$language["CANT_FIND_TORRENT"]="Can't find torrent file!";
$language["CANT_READ_LANGUAGE"]="Can't read the language file!";
$language["CANT_SAVE_CONFIG"]="Can't save the settings into config.php";
$language["CANT_SAVE_LANGUAGE"]="Can't save the language file";
$language["CANT_WRITE_CONFIG"]="Warning: couldn't write config.php!";
$language["CATCHUP"]="Märgi kõik loetuks";
$language["CATEGORY"]="Kat.";
$language["CATEGORY_FULL"]="Kategooria";
$language["CENTER"]="center";
$language["CHANGE_PID"]="Muuda PID";
$language["CHARACTERS"]="characters";
$language["CHOOSE"]="Choose";
$language["CHOOSE_ONE"]="choose one";
$language["CLICK_HERE"]="vajuta siia";
$language["CLOSE"]="sulge";
$language["COMMENT"]="Com.";
$language["COMMENT_1"]="Comment";
$language["COMMENT_PREVIEW"]="Comment's Preview";
$language["COMMENTS"]="Comments";
$language["CONFIG_SAVED"]="Congratulations, new configuration was saved";
$language["COUNTRY"]="Maakond";
$language["CURRENT_DETAILS"]="Current Details";
$language["DATABASE_ERROR"]="Database error.";
$language["DATE"]="Kuupäev";
$language["DB_ERROR_REQUEST"]="Database error. Cannot complete request.";
$language["DB_SETTINGS"]="Database's settings";
$language["DEAD_ONLY"]="Dead only";
$language["DELETE"]="Kustuta";
$language["DELETE_ALL_READED"]="Delete all read";
$language["DELETE_CONFIRM"]="Are you sure you want to delete/remove this?";
$language["DELETE_TORRENT"]="Delete Torrent";
$language["DELFAILED"]="Delete Failed";
$language["DESCRIPTION"]="Kirjeldus";
$language["DONT_NEED_CHANGE"]="You don't need to change these settings!";
$language["DOWN"]="Lae alla";
$language["DOWNLOAD"]="Lae alla";
$language["DOWNLOAD_TORRENT"]="Lae torrent alla";
$language["DOWNLOADED"]="Allalaaditud";
$language["EDIT"]="Muuda";
$language["EDIT_LANGUAGE"]="Edit Language";
$language["EDIT_POST"]="Muuda postitust";
$language["EDIT_TORRENT"]="Muuda torrentit";
$language["EMAIL"]="Email";
$language["EMAIL_SENT"]="Kiri on saadetud sinu lisatud e-maili aadressile.<br />Vajuta kirjas olevale lingile, et oma konto kinnitada.";
$language["EMAIL_VERIFY"]="email account update at $SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="Verification email sent";
$language["EMAIL_VERIFY_MSG"]="Hello,\n\nThis email has been sent because you have requested a change to the email address currently held on your record, please click the link below to complete the change.\n\nBest regards from the staff.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>A verification email has been sent to:<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />You will need to click on the link contained within the email in order<br />to update your email address. The email should arrive within 10 minutes<br />(usually instantly) although some email providers may mark it as SPAM<br />so be sure to check your SPAM folder if you can't find it.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 Unauthorized access!";
$language["ERR_AVATAR_EXT"]="Sorry only gif,jpg,bmp or png allowed";
$language["ERR_BAD_LAST_POST"]="";
$language["ERR_BAD_NEWS_ID"]="Bad news ID!";
$language["ERR_BODY_EMPTY"]="Body cannot be empty!";
$language["ERR_CANT_CONNECT"]="Can't connect to local MySQL server";
$language["ERR_CANT_OPEN_DB"]="Can't open database";
$language["ERR_DB_ERR"]="Database error. Please contact an administrator about this.";
$language["ERR_DELETE_POST"]="Delete post. Sanity check: You are about to delete a post. Click";
$language["ERR_DELETE_TOPIC"]="Delete topic. Sanity check: You are about to delete a topic. Click";
$language["ERR_EMAIL_ALREADY_EXISTS"]="This Email is already in our database!";
$language["ERR_EMAIL_NOT_FOUND_1"]="The email address";
$language["ERR_EMAIL_NOT_FOUND_2"]="was not found in the database.";
$language["ERR_ENTER_NEW_TITLE"]="You must enter a new title!";
$language["ERR_FORUM_NOT_FOUND"]="Forum not found";
$language["ERR_FORUM_UNKW_ACT"]="Forum Error: Unknown action";
$language["ERR_GUEST_EXISTS"]="'Guest' is a restricted username. You can't register as 'Guest'";
$language["ERR_IMAGE_CODE"]="Pildikood ei ühti sinu sisestatud tähtedega!";
$language["ERR_INS_TITLE_NEWS"]="You must insert both title AND news";
$language["ERR_INV_NUM_FIELD"]="Invalid numerical field(s) from client";
$language["ERR_INVALID_CLIENT_EVENT"]="Invalid event= from client.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="Invalid information received from BitTorrent client";
$language["ERR_INVALID_IP_NUMB"]="Invalid IP address. Must be standard dotted decimal (hostnames not allowed)";
$language["ERR_LEVEL"]="Sorry, your level ";
$language["ERR_LEVEL_CANT_POST"]="You are not permitted to post in this forum.";
$language["ERR_LEVEL_CANT_VIEW"]="You are not permitted to view this topic.";
$language["ERR_MISSING_DATA"]="Missing data!";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="You must be logged in to shout...";
$language["ERR_NO_BODY"]="No body text";
$language["ERR_NO_NEWS_ID"]="New's ID not found!";
$language["ERR_NO_POST_WITH_ID"]="No post with ID ";
$language["ERR_NO_SPACE"]="Your username cannot contain a space, please replace with an underscore eg:<br /><br />";
$language["ERR_NO_TOPIC_ID"]="No Topic ID returned";
$language["ERR_NO_TOPIC_POST_ID"]="No topic associated with post ID";
$language["ERR_NOT_AUTH"]="You're not authorized!";
$language["ERR_NOT_FOUND"]="Not Found...";
$language["ERR_NOT_PERMITED"]="Not Permited";
$language["ERR_PASS_LENGTH"]="<font color=\"black\">Your password must be a minimum of 4 characters.</font>";
$language["ERR_PASSWORD_INCORRECT"]="Vale parool";
$language["ERR_PERM_DENIED"]="Permission denied";
$language["ERR_PID_NOT_FOUND"]="Please redownload the torrent. PID system is active and pid was not found in the torrent";
$language["ERR_RETR_DATA"]="Error retreaving data!";
$language["ERR_SEND_EMAIL"]="Unable to send mail. Please contact an administrator about this error.";
$language["ERR_SERVER_LOAD"]="The server load is very high at the moment. Retrying, please wait...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">Your username can not contain special characters like:<br /><br /><font color=\"red\"><strong>* ? < > @ $ & % etc.</strong></font></font><br />";
$language["ERR_SQL_ERR"]="SQL Error";
$language["ERR_SUBJECT"]="You must enter a subject.";
$language["ERR_TOPIC_ID_NA"]="Topic ID is N/A";
$language["ERR_TOPIC_LOCKED"]="Topic is Locked";
$language["ERR_TORRENT_IN_BROWSER"]="This file is for BitTorrent clients.";
$language["ERR_UPDATE_USER"]="Unable to update user data. Please contact an administrator about this error.";
$language["ERR_USER_ALREADY_EXISTS"]="There's already an user with this nick!";
$language["ERR_USER_NOT_FOUND"]="Sorry, User not Found";
$language["ERR_USER_NOT_USER"]="You're not autorized to access another user's panel!";
$language["ERR_USERNAME_INCORRECT"]="Vale kasutajanimi";
$language["ERROR"]="NB!";
$language["ERROR_ID"]="Torrent muudetud";
$language["FACOLTATIVE"]="optional";
$language["FILE"]="Torrent";
$language["FILE_CONTENTS"]="File Contents";
$language["FILE_NAME"]="Torrenti nimi";
$language["FIND_USER"]="Otsi kasutajat";
$language["FINISHED"]="Lõpetanud";
$language["FORUM"]="Foorum";
$language["FORUM_ERROR"]="Forum Error";
$language["FORUM_INFO"]="Forum Info";
$language["FORUM_MIN_CREATE"]="Min Class Create";
$language["FORUM_MIN_READ"]="Min Class Read";
$language["FORUM_SEARCH"]="Forums Search";
$language["FORUM_N_TOPICS"]="N. Topics";
$language["FORUM_N_POSTS"]="N. Posts";
$language["FRM_DELETE"]="Kustuta";
$language["FRM_LOGIN"]="Logi sisse";
$language["FRM_PREVIEW"]="Eelvaade";
$language["FRM_REFRESH"]="Värskenda";
$language["FRM_RESET"]="Tühjenda";
$language["FRM_SEND"]="Lisa";
$language["FRM_CONFIRM"]="Saada";
$language["FRM_CANCEL"]="Tühista";
$language["FRM_CLEAN"]="Clean";
$language["GLOBAL_SERVER_LOAD"]="Global Server Load (All websites on current server)";
$language["GO"]="Go";
$language["GROUP"]="Grupp";
$language["GUEST"]="Guest";
$language["GUESTS"]="Guests";
$language["HERE"]="siia";
$language["HISTORY"]="Ajalugu";
$language["HOME"]="Home";
$language["IF_YOU_ARE_SURE"]="if you are sure.";
$language["IM_SURE"]="I'm Sure";
$language["IN"]="in";
$language["INF_CHANGED"]="Informations changed!";
$language["INFINITE"]="Inf.";
$language["INFO_HASH"]="Info hash";
$language["INS_NEW_PWD"]="Insert NEW password!";
$language["INS_OLD_PWD"]="Insert OLD password!";
$language["INSERT_DATA"]="Sisesta kõik vajalikud andmed.";
$language["INSERT_NEW_FORUM"]="Insert new forum";
$language["INVALID_ID"]="It's not a valid ID. Sorry!";
$language["INVALID_INFO_HASH"]="Invalid info hash value.";
$language["INVALID_PID"]="Invalid PID";
$language["INVALID_TORRENT"]="Tracker error: invalid torrent";
$language["KEYWORDS"]="Otsingusõnad";
$language["LAST_EXTERNAL"]="Last External Torrents Update was done on ";
$language["LAST_NEWS"]="Uudised";
$language["LAST_POST_BY"]="Viimati postitas";
$language["LAST_SANITY"]="Last Sanity Check was done on ";
$language["LAST_TORRENTS"]="Latest Torrents";
$language["LAST_UPDATE"]="Last Update";
$language["LASTPOST"]="Viimane postitus";
$language["LEECHERS"]="Tõmbajad";
$language["LEFT"]="left";
$language["LOGIN"]="Logi sisse";
$language["LOGOUT"]="Logi välja";
$language["MAILBOX"]="Postkast";
$language["MANAGE_NEWS"]="Manage News";
$language["MEMBER"]="Kasutaja";
$language["MEMBERS"]="Kasutajad";
$language["MEMBERS_LIST"]="Kasutajate nimekiri";
$language["MINIMUM_100_DOWN"]="(vähemalt 1 GB allalaaditud)";
$language["MINIMUM_5_LEECH"]="minimaalselt 5 tõmbajat, välja arvatud surnud torrentid";
$language["MINIMUM_5_SEED"]="minimaalselt 5 jagajat";
$language["MKTOR_INVALID_HASH"]="makeTorrent: Received an invalid hash";
$language["MNU_ADMINCP"]="Administraator";
$language["MNU_FORUM"]="Foorum";
$language["MNU_INDEX"]="Avaleht";
$language["MNU_MEMBERS"]="Kasutajad";
$language["MNU_NEWS"]="Uudised";
$language["MNU_STATS"]="Top 10";
$language["MNU_TORRENT"]="Torrentid";
$language["MNU_UCP_CHANGEPWD"]="Muuda parooli";
$language["MNU_UCP_HOME"]="Minu konto";
$language["MNU_UCP_IN"]="Vastuvõetud kirjad";
$language["MNU_UCP_INFO"]="Muuda profiili";
$language["MNU_UCP_NEWPM"]="Uus kiri";
$language["MNU_UCP_OUT"]="Saadetud kirjad";
$language["MNU_UCP_PM"]="Postkast";
$language["MNU_UPLOAD"]="Lisa torrent";
$language["MORE_SMILES"]="Veel ikoone";
$language["MORE_THAN"]="More than ";
$language["MORE_THAN_2"]="items found, displaying first";
$language["NA"]="Puudub";
$language["NAME"]="Name";
$language["NEED_COOKIES"]="Märkus! Cookied peavad olema lubatud, et sisse logida!";
$language["NEW_COMMENT"]="Lisa kommentaar...";
$language["NEW_COMMENT_T"]="New Comment";
$language["NEWS"]="The News";
$language["NEWS_DESCRIPTION"]="News:";
$language["NEWS_INSERT"]="Insert your news";
$language["NEWS_PANEL"]="News Panel";
$language["NEWS_TITLE"]="Title:";
$language["NEXT"]="Next";
$language["NO"]="Ei";
$language["NO_BANNED_IPS"]="There are no banned IPs";
$language["NO_COMMENTS"]="Hetkel puuduvad...";
$language["NO_FORUMS"]="No Forums found!";
$language["NO_MAIL"]="you have no new mail.";
$language["NO_MESSAGES"]="Kirju pole...";
$language["NO_NEWS"]="no news";
$language["NO_PEERS"]="No peers";
$language["NO_RECORDS"]="Sorry, list is empty...";
$language["NO_TOPIC"]="No topics found";
$language["NO_TORR_UP_USER"]="No torrents uploaded by this user";
$language["NO_TORRENTS"]="Hetkel ei ole ühtegi...";
$language["NO_USERS_FOUND"]="No users found!";
$language["NOBODY_ONLINE"]="Nobody online";
$language["NONE"]="None";
$language["NOT_ADMIN_CP_ACCESS"]="You're not authorized to access the admin panel!";
$language["NOT_ALLOW_DOWN"]="is not allowed to download from";
$language["NOT_AUTH_DOWNLOAD"]="You're not authorized to download. Sorry...";
$language["NOT_AUTH_VIEW_NEWS"]="You're not autorized to view the news!";
$language["NOT_AUTHORIZED"]="You're not authorized to view the";
$language["NOT_AUTHORIZED_UPLOAD"]="You're not authorized to upload!";
$language["NOT_AVAILABLE"]="N/A";
$language["NOT_MAIL_IN_URL"]="This is not the email address that was in this url";
$language["NOT_POSS_RESET_PID"]="It's not possibile to reset your PID! <br />Contact an admin...";
$language["NOW_LOGIN"]="Now you will be prompted for login";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="Vana parool";
$language["ONLY_REG_COMMENT"]="Only registered users can insert comments!";
$language["OPT_DB_RES"]="Optimizing database result";
$language["OPTION"]="Valik";
$language["PASS_RESET_CONF"]="password reset confirmation";
$language["PEER_CLIENT"]="Klient";
$language["PEER_COUNTRY"]="Maakond";
$language["PEER_ID"]="Peer ID";
$language["PEER_LIST"]="Peers List";
$language["PEER_PORT"]="Port";
$language["PEER_PROGRESS"]="Progress";
$language["PEER_STATUS"]="Staatus";
$language["PEERS"]="Peere";
$language["PEERS_DETAILS"]="Click here to view peers details";
$language["PICTURE"]="Picture";
$language["PID"]="PID";
$language["PLEASE_WAIT"]="Please Wait...";
$language["PM"]="PM";
$language["POSITION"]="Position";
$language["POST_REPLY"]="Post Reply";
$language["POSTED_BY"]="Postitas";
$language["POSTED_DATE"]="Postitatud";
$language["POSTS"]="Postitused";
$language["POSTS_PER_DAY"]="%s postitust päevas";
$language["POSTS_PER_PAGE"]="Postitusi lehe kohta";
$language["PREVIOUS"]="Prev.";
$language["PRIVATE_MSG"]="Private Message";
$language["PWD_CHANGED"]="Parool muudetud!";
$language["QUESTION"]="Question";
$language["QUICK_JUMP"]="Quick Jump";
$language["QUOTE"]="Tsiteeri";
$language["RANK"]="Koht";
$language["RATIO"]="Ratio";
$language["REACHED_MAX_USERS"]="<strong><font color=\"red\">Hetkel uute liikmete vastuvõtt peatatud!</strong></font>";
$language["READED"]="Loetud";
$language["RECEIVER"]="Saaja";
$language["RECOVER_DESC"]="Parooli taastamiseks sisesta oma registreeritud email.<br />(Vajuta sinu postkasti saadetud lingile.)";
$language["RECOVER_PWD"]="Parooli taastamine";
$language["RECOVER_TITLE"]="Recover lost username or password";
$language["REDIRECT"]="Kui sinu brauseril ei ole javascript aktiveeritud, vajuta";
$language["REDOWNLOAD_TORR_FROM"]="Redownload torrent from";
$language["REGISTERED"]="Sisseloginud";
$language["REGISTERED_EMAIL"]="Registreeritud email";
$language["REMOVE"]="Remove";
$language["REPLIES"]="Vastuseid";
$language["REPLY"]="Vasta";
$language["RESULT"]="Result";
$language["RETRY"]="Retry";
$language["RETURN_TORRENTS"]="Tagasi torrentite nimekirja juurde";
$language["REVERIFY_CONGRATS1"]="<center><br />Congratulations, your email has been verified and successfully changed<br /><br /><strong>From: <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>To: <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>Sorry but this url is not valid</u></strong></font><br /><br />A new random number is generated each time you attempt to change your email so<br />if you're seeing this message then you've most likely tried to change your email<br />more than once and you are using an old url.<br /><br /><strong>Please wait until you're absolutely sure you haven't received the new<br />verification email before attempting to change your email again.</strong><br /><br />";
$language["REVERIFY_MSG"]="Kui soovid muuta oma emaili aadressi, siis saadetakse sulle uuele emailile link selle aadressi kinnitamiseks.<br /><font color=\"red\"><strong>Emaili aadress sinu andmetes ei muutu enne, kui oled selle kinnitanud.</strong></font>";
$language["RIGHT"]="right";
$language["SEARCH"]="Otsi";
$language["SEEDERS"]="Jagajad";
$language["SEEN"]="Viimati nähtud";
$language["SELECT"]="Select...";
$language["SENDER"]="Saatja";
$language["SENT_ERROR"]="Sent Error";
$language["SHORT_C"]="Lõpetanud"; //Shortname for Completed
$language["SHORT_L"]="Tõmbajad"; //Shortname for Leechers
$language["SHORT_S"]="Jagajad"; //Shortname for Seeders
$language["SHOUTBOX"]="Jutukas";
$language["SIZE"]="Suurus";
$language["SORRY"]="Sorry";
$language["SORTID"]="Sortid";
$language["SPEED"]="Kiirus";
$language["STICKY"]="NB!";
$language["SUB_CATEGORY"]="Sub-Category";
$language["SUBJECT"]="Teema";
$language["SUBJECT_MAX_CHAR"]="Subject is limited to ";
$language["SUC_POST_SUC_EDIT"]="Post was edited successfully.";
$language["SUC_SEND_EMAIL"]="A confirmation email has been mailed to";
$language["SUC_SEND_EMAIL_2"]="Please allow a few minutes for the mail to arrive.";
$language["SUCCESS"]="Success";
$language["SUMADD_BUG"]="Tracker bug calling summaryAdd";
$language["TABLE_NAME"]="Table Name";
$language["TIMEZONE"]="Ajatsoon";
$language["TITLE"]="Title";
$language["TOP"]="top";
$language["TOP_10_ACTIVE"]="10 kõige aktiivsemat torrentit";
$language["TOP_10_BEST_SEED"]="10 kõige paremini jagatud torrentit";
$language["TOP_10_BSPEED"]="10 parima kiirusega torrentit";
$language["TOP_10_DOWNLOAD"]="Top 10 Allalaadijad";
$language["TOP_10_SHARE"]="Top 10 Parim ratio";
$language["TOP_10_UPLOAD"]="Top 10 Üleslaadijad";
$language["TOP_10_WORST"]="Top 10 Halvim ratio";
$language["TOP_10_WORST_SEED"]="10 kõige halvemini jagatud torrentit";
$language["TOP_10_WSPEED"]="10 halvima kiirusega torrentit";
$language["TOP_TORRENTS"]="Most Popular Torrents";
$language["TOPIC"]="Teema";
$language["TOPICS"]="Teemad";
$language["TOPICS_PER_PAGE"]="Teemasid lehe kohta";
$language["TORR_PEER_DETAILS"]="Torrent peers details";
$language["TORRENT"]="Torrent";
$language["TORRENT_ANONYMOUS"]="Anonüümne";
$language["TORRENT_CHECK"]="Allow the tracker to retrieve and use information from the torrent file.";
$language["TORRENT_DETAIL"]="Torrenti detailid";
$language["TORRENT_FILE"]="Torrent";
$language["TORRENT_SEARCH"]="Search Torrents";
$language["TORRENT_STATUS"]="Status";
$language["TORRENT_UPDATE"]="Updating, please wait...";
$language["TORRENTS"]="Torrentid";
$language["TORRENTS_PER_PAGE"]="Torrenteid lehe kohta";
$language["TRACK_DB_ERR"]="Tracker/database error. The details are in the error log.";
$language["TRACKER_INFO"]="$users users, tracking $torrents torrents ($seeds seeds e $leechers leechers, $percent%)";
$language["TRACKER_LOAD"]="Tracker Load";
$language["TRACKER_SETTINGS"]="Tracker's Settings";
$language["TRACKER_STATS"]="Tracker Stats";
$language["TRACKING"]="tracking";
$language["TRAFFIC"]="Liiklus";
$language["UCP_NOTE_1"]="Siin saad lugeda kirju ja saata neid teistele kasutajatele,";
$language["UCP_NOTE_2"]="muuta oma konto seadeid ja profiili.";
$language["UNAUTH_IP"]="Unauthorized IP address.";
$language["UNKNOWN"]="unknown";
$language["UPDATE"]="Update";
$language["UPFAILED"]="Upload Failed";
$language["UPLOAD_IMAGE"]="Upload Image";
$language["UPLOAD_LANGUAGE_FILE"]="Upload Language File";
$language["UPLOADED"]="Üleslaaditud";
$language["UPLOADER"]="Lisaja";
$language["UPLOADS"]="Uploads";
$language["URL"]="URL";
$language["USER_CP"]="Minu konto";
$language["USER_CP_1"]="Kasutaja konto";
$language["USER_DETAILS"]="Kasutaja andmed";
$language["USER_EMAIL"]="Kehtiv email";
$language["USER_ID"]="User ID";
$language["USER_JOINED"]="Liitunud";
$language["USER_LASTACCESS"]="Viimati sisseloginud";
$language["USER_LEVEL"]="Klass";
$language["USER_LOCAL_TIME"]="User's Local Time";
$language["USER_NAME"]="Kasutaja";
$language["USER_PASS_RECOVER"]="Password/user recovery";
$language["USER_PWD"]="Parool";
$language["USERS_SEARCH"]="Users Search";
$language["VIEW_DETAILS"]="Vaata detaile";
$language["VIEW_TOPIC"]="View Topic";
$language["VIEW_UNREAD"]="Loe uusi postitusi";
$language["VIEWS"]="Vaadatud";
$language["VISITOR"]="Visitor";
$language["VISITORS"]="Visitors";
$language["WAIT_ADMIN_VALID"]="You should wait for the administrator validation...";
$language["WARNING"]="Warning!";
$language["WELCOME"]="Tere tulemast";
$language["WELCOME_ADMINCP"]="Welcome to Admin Control Panel";
$language["WELCOME_BACK"]="Tere tulemast tagasi";
$language["WELCOME_UCP"]="Welcome to your User Control Panel";
$language["WORD_AND"]="and";
$language["WORD_NEW"]="New";
$language["WROTE"]="wrote";
$language["WT"]="WT";
$language["X_TIMES"]="korda";
$language["YES"]="Jah";
$language["LAST_IP"]="Viimane IP";
$language["FIRST_UNREAD"]="Goto the first unread post";
$language["MODULE_UNACTIVE"]="The module required is not active!";
$language["MODULE_NOT_PRESENT"]="The module required do not exists!";
$language["MODULE_LOAD_ERROR"]="The module required seems to be wrong!";
$language["DOB"]="Sünniaeg";
$language["DOB_FORMAT"]="<b>päev (00) / kuu (00) / aasta (0000)</b>";
$language["USER_AGE"]="Vanus";
$language["HB_SUBJECT"]="Palju õnne sünnipäevaks!";
$language["HB_MESSAGE_1"]=":hbd:\n\nSinu kontole on lisatud ";
$language["HB_MESSAGE_2"]=" uploadi. (";
$language["HB_MESSAGE_3"]=" GB iga eluaasta eest.). $SITENAME soovib sulle palju õnne ja kõike paremat.\n\n:yay:";
$language["ERR_BORN_IN_FUTURE"]="Ajas reisija? Sa ei saa olla sündinud tulevikus!";
$language["ERR_DOB_1"]="Ma ei usu, et sa oled ";
$language["ERR_DOB_2"]=" aastat vana.";
$language["INVALID_DOB_1"]="Sisestatud sünniaeg (";
$language["INVALID_DOB_2"]=") on vale";
$language["BONUS_INFO1"]="Siin saad vahetada oma boonuspunktid uploadi vastu (hetkel ";
$language["BONUS_INFO2"]="(Kui nupud on deaktiveeritud, ei ole sul piisavalt punkte!)";
$language["BONUS_INFO3"]="Mille eest boonuspunkte saab?<br>Iga seeditud tunni eest saad ";
$language["BONUS_INFO4"]=" boonuspunkti torrenti kohta.";
$language["WHAT_ABOUT"]="Juurde lisatav upload";
$language["POINTS"]="Boonuspunktid";
$language["EXCHANGE"]="Vaheta";
$language["GB_UPLOAD"]=" GB uploadi";
$language["CHANGE_CUSTOM_TITLE"]="Eritiitli muutmine (hind - ";
$language["NO_CUSTOM_TITLE"]="puudub";
$language["UP_TO_VIP"]="Upgrade rank to VIP";
$language["NEED_MORE_POINTS"]="Pole piisavalt boonuspunkte!";
$language["CHANGE_USERNAME"]="Change username (price - ";
$language["NOT_USER_CLASS"]="<h2>Sorry</h2><p>You must be registered to be able to buy tickets.</p>";
$language["CANNOT_SELL_CLOSED"]="Sorry, I cannot sell you any tickets! The lottery is closed!";
$language["LOTTERY"]="Loterii";
$language["LOTT_LIMIT_PURCHASE"]="The max number of tickets you can purchase is";
$language["LOTT_LIMIT_BUY"]="The max number of tickets allowed to buy is";
$language["LOTTERY_PM_SUBJECT"]="Oled võitnud loteriiga";
$language["LOTTERY_PM_MESSAGE"]="Palju õnne, oled võitnud Eesti Torrenti loteriiga. Sinu auhind on lisatud sinu kontole.";
$language["ONLINE_TODAY"]="Kokku";
$language["CONNECTABLE"]="Port avatud";
$language["BONUS"]="Boonus";
$language["DONATEBONUS"]="Boonuspunktide kinkimine";
$language["GIVEBONUS"]="Kingi boonuspunkte";
$language["BONUSTRANSFER"]="Siin saad kinkida oma boonuspunkte teisele kasutajale";
$language["TO_USER"]="Kasutaja";
$language["HOW_MUCH_POINTS"]="Punkte";
$language["TRANSFER"]="Kingi";
$language["DONE"]="Tehtud!";
$language["GIVE_SUCCESS"]="Boonuspunktid edukalt saadetud kasutajale ";
$language["UP"]="Üles";
$language["DOWN"]="Alla";
$language["INVITE_CODE"]="Kutsekood";
$language["UPITUD"]="Üleslaaditud torrentid";
$language["POSTID"]="Foorumi postitusi";
$language["PLAYED"]="Mängitud";
$language["WINS"]="Võite";
$language["LOSSES"]="Kaotusi";
$language["DRAWS"]="Viike";
$language["WON_WITH_BLACKJACK"]="Võidetud Blackjackiga";
$language["WIN_LOSS_TOTAL"]="Võidud/Kaotused kokku";
$language["WIN_PERCENTAGE"]="Võiduprotsent";
$language["MNU_IRC"]="IRC";
$language["DOWNED"]="Allalaaditud";
$language["CUSTOM_TITLE"]="Eritiitel";
?>