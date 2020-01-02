<?php
$language["ACP_BAN_IP"]="Ban IPs";
$language["ACP_FORUM"]="Forum's Settings";
$language["ACP_USER_GROUP"]="Users Group Settings";
$language["ACP_STYLES"]="Styles Settings";
$language["ACP_LANGUAGES"]="Languages Settings";
$language["ACP_CATEGORIES"]="Categories Settings";
$language["ACP_TRACKER_SETTINGS"]="Tracker's Settings";
$language["ACP_OPTIMIZE_DB"]="Optimize your Database";
$language["ACP_CENSORED"]="Censored words Settings";
$language["ACP_DBUTILS"]="Database Utilities";
$language["ACP_HACKS"]="Hacks";
$language["ACP_HACKS_CONFIG"]="Hacks Settings";
$language["ACP_MODULES"]="Modules";
$language["ACP_MODULES_CONFIG"]="Modules Settings";
$language["ACP_MASSPM"]="Mass Private Mail";
$language["ACP_PRUNE_TORRENTS"]="Prune Torrents";
$language["ACP_PRUNE_USERS"]="Prune Users";
$language["ACP_SITE_LOG"]="View Site Log";
$language["ACP_SEARCH_DIFF"]="Search Diff.";
$language["ACP_BLOCKS"]="Block Settings";
$language["ACP_POLLS"]="Poll Settings";
$language["ACP_MENU"]="Admin Menu";
$language["ACP_FRONTEND"]="Content Settings";
$language["ACP_USERS_TOOLS"]="User's Tools";
$language["ACP_TORRENTS_TOOLS"]="Torrent's Tools";
$language["ACP_OTHER_TOOLS"]="Others Tools";
$language["ACP_MYSQL_STATS"]="MySql Statistics";
$language["XBTT_BACKEND"]="xbtt Option";
$language["XBTT_USE"]="Use <a href=\"http://xbtt.sourceforge.net/tracker/\" target=\"_blank\">xbtt</a> as backend?";
$language["XBTT_URL"]="xbtt base url e.g. http://localhost:2710";
$language["GENERAL_SETTINGS"]="General settings";
$language["TRACKER_NAME"]="Site's Name";
$language["TRACKER_BASEURL"]="Base Tracker's URL (without last /)";
$language["TRACKER_ANNOUNCE"]="Tracker's Announce URLS (one url per row)".($XBTT_USE?"<br />\n<span style=\"color:#FF0000; font-weight: bold;\">Check your announce urls twice, you've enable xbtt backend...</span>":"");
$language["TRACKER_EMAIL"]="Tracker's/owner email";
$language["TORRENT_FOLDER"]="Torrent folder";
$language["ALLOW_EXTERNAL"]="Allow External torrents";
$language["ALLOW_GZIP"]="enabled GZIP";
$language["ALLOW_DEBUG"]="Show Debug infos on page's bottom";
$language["ALLOW_DHT"]="Disable DHT (private flag in torrent)<br />\nwill be set only on  new uploaded torrents";
$language["ALLOW_LIVESTATS"]="Enable Live Stats (warning to high server load!)";
$language["ALLOW_SITELOG"]="Enable Basic Site Log (log change on torrents/users)";
$language["ALLOW_HISTORY"]="Enable Basic History (torrents/users)";
$language["ALLOW_PRIVATE_ANNOUNCE"]="Private Announce";
$language["ALLOW_PRIVATE_SCRAPE"]="Private Scrape";
$language["SHOW_UPLOADER"]="Show Uploader's nick";
$language["USE_POPUP"]="Use Popup for Torrents details/peers";
$language["DEFAULT_LANGUAGE"]="Default Language";
$language["DEFAULT_CHARSET"]="Default Charset Encoding<br />\n(if your language don't display correctly, try UTF-8)";
$language["DEFAULT_STYLE"]="Default Style";
$language["MAX_USERS"]="Max Users (numeric, 0 = no limits)";
$language["MAX_TORRENTS_PER_PAGE"]="Torrents per page";
$language["SPECIFIC_SETTINGS"]="Tracker's specific settings";
$language["SETTING_INTERVAL_SANITY"]="Sanity interval (numeric seconds, 0 = disabled)<br />Good value, if enabled, is 1800 (30 minutes)";
$language["SETTING_INTERVAL_EXTERNAL"]="Update External interval (numeric seconds, 0 = disabled)<br />Depending of how many external torrents";
$language["SETTING_INTERVAL_MAX_REANNOUNCE"]="Maximum reannounce interval (numeric seconds)";
$language["SETTING_INTERVAL_MIN_REANNOUNCE"]="Minimum reannounce interval (numeric seconds)";
$language["SETTING_MAX_PEERS"]="Max N. of peers for request (numeric)";
$language["SETTING_DYNAMIC"]="Allow Dynamic Torrents (not recommended)";
$language["SETTING_NAT_CHECK"]="NAT checking";
$language["SETTING_PERSISTENT_DB"]="Persistent connections (Database, not recommended)";
$language["SETTING_OVERRIDE_IP"]="Allow users to override detected ip";
$language["SETTING_CALCULATE_SPEED"]="Calculate Speed and Downloaded bytes";
$language["SETTING_PEER_CACHING"]="Table caches (should decrease a little load)";
$language["SETTING_SEEDS_PID"]="Max num. of seeds with same PID";
$language["SETTING_LEECHERS_PID"]="Max num. of leechers with same PID";
$language["SETTING_VALIDATION"]="Validation Mode";
$language["SETTING_CAPTCHA"]="Secure Registration (use ImageCode, GD+Freetype libraries needed)";
$language["SETTING_FORUM"]="Forum link, can be:<br /><li><font color='#FF0000'>internal</font> or empty (no value) for internal forum</li><li><font color='#FF0000'>smf</font> for integrated <a target='_new' href='http://www.simplemachines.org'>Simple Machines Forum</a></li><li>Your own forum solution (Specify url in the box)</li>";
$language["BLOCKS_SETTING"]="Index/Blocks page settings";
$language["SETTING_CLOCK"]="Clock type";
$language["SETTING_NUM_NEWS"]="Limit for Latest News block (numeric)";
$language["SETTING_NUM_POSTS"]="Limit for Forum block (numeric)";
$language["SETTING_NUM_LASTTORRENTS"]="Limit for Latest Torrents block (numeric)";
$language["SETTING_NUM_TOPTORRENTS"]="Limit for Most Popular Torrents block (numeric)";
$language["SETTING_MIN_DLRATIO"]="Minimum ratio to download torrents";
$language["SETTING_CUSTOM_SETTINGS"]="Custom Settings";
$language["BYPASS_DLCHECK"]="No DL check";
$language["CLOCK_ANALOG"]="Analog";
$language["CLOCK_DIGITAL"]="Digital";
$language["CONFIG_SAVED"]="The configuration has been saved correctly!";
$language["CACHE_SITE"]="Cache interval (numeric seconds, 0 = disabled)";
$language["ALL_FIELDS_REQUIRED"]="All fields are required!";
$language["SETTING_CUT_LONG_NAME"]="Cut long torrent's name after x chars (0 = don't cut)";
$language["MAILER_SETTINGS"]="Mailer";
$language["SETTING_MAIL_TYPE"]="Mail Type";
$language["SETTING_SMTP_SERVER"]="SMTP Server";
$language["SETTING_SMTP_PORT"]="SMTP Port";
$language["SETTING_SMTP_USERNAME"]="SMTP Username";
$language["SETTING_SMTP_PASSWORD"]="SMTP Password";
$language["SETTING_SMTP_PASSWORD_REPEAT"]="SMTP Password (Repeat)";
$language["XBTT_TABLES_ERROR"]="You should have to import xbtt tables (look at xbtt installation instructions) into your database before activate xbtt backend!";
$language["XBTT_URL_ERROR"]="xbtt base url is mandatory!";
// BAN FORM
$language["BAN_NOTE"]="In this part of the admin panel, you can see the banned IPs and ban new IPs from accessing the tracker.<br />\nYou must insert a range from (first IP) to (last IP).";
$language["BAN_NOIP"]="There are no banned IPs";
$language["BAN_FIRSTIP"]="First IP";
$language["BAN_LASTIP"]="Last IP";
$language["BAN_COMMENTS"]="Comments";
$language["BAN_REMOVE"]="Remove";
$language["BAN_BY"]="By";
$language["BAN_ADDED"]="Date";
$language["BAN_INSERT"]="Insert New Banned IP Range";
$language["BAN_IP_ERROR"]="Bad IP address.";
$language["BAN_NO_IP_WRITE"]="You haven't wrote an IP address. Sorry!";
$language["BAN_DELETED"]="The IP range has been deleted from database.<br />\n<br />\n<a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=banip&amp;action=read\">Go back to Ban IP</a>";
// LANGUAGES
$language["LANGUAGE_SETTINGS"]="Language Settings";
$language["LANGUAGE"]="Language";
$language["LANGUAGE_ADD"]="Insert new Language";
$language["LANGUAGE_SAVED"]="Congratulations, language has been modified";
// STYLES
$language["STYLE_SETTINGS"]="Style/Themes Settings";
$language["STYLE_EDIT"]="Edit Style";
$language["STYLE_ADD"]="Insert new Style";
$language["STYLE_NAME"]="Style Name";
$language["STYLE_URL"]="Style URL";
$language["STYLE_FOLDER"]="Style's folder ";
$language["STYLE_NOTE"]="In this section you can manage your style settings, but you must upload files by ftp or sftp.";
// CATEGORIES
$language["CATEGORY_SETTINGS"]="Categories Settings";
$language["CATEGORY_IMAGE"]="Category Image";
$language["CATEGORY_ADD"]="Insert new Category";
$language["CATEGORY_SORT_INDEX"]="Sort Index";
$language["CATEGORY_FULL"]="Category";
$language["CATEGORY_EDIT"]="Edit Category";
$language["CATEGORY_SUB"]="Sub-Category";
$language["CATEGORY_NAME"]="Category";
// CENSORED
$language["CENSORED_NOTE"]="Write <b>one word per line</b> to ban it (will be changed into *censored*)";
$language["CENSORED_EDIT"]="Edit Censored Words";
// BLOCKS
$language["BLOCKS_SETTINGS"]="Block Configuration";
$language["ENABLED"]="Enabled";
$language["ORDER"]="Order";
$language["BLOCK_NAME"]="Block's name";
$language["BLOCK_POSITION"]="Position";
$language["BLOCK_TITLE"]="Language title (will be used to display the translated title)";
$language["BLOCK_USE_CACHE"]="Cache this block?";
$language["ERR_BLOCK_NAME"]="You must select one of the enabled file in the name's dropdown!";
$language["BLOCK_ADD_NEW"]="Add a New Block";
// POLLS (more in lang_polls.php)
$language["POLLS_SETTINGS"]="Poll Configuration";
$language["POLLID"]="Pollid";
$language["INSERT_NEW_POLL"]="Add new Poll";
$language["CANT_FIND_POLL"]="Can't find poll";
$language["ADD_NEW_POLL"]="Add Poll";
// GROUPS
$language["USER_GROUPS"]="Users Group Settings (click on group's name to edit)";
$language["VIEW_EDIT_DEL"]="View/Edit/Del";
$language["CANT_DELETE_GROUP"]="This Level/Group can't be canceled!";
$language["GROUP_NAME"]="Group's name";
$language["GROUP_VIEW_NEWS"]="View News";
$language["GROUP_VIEW_FORUM"]="View Forum";
$language["GROUP_EDIT_FORUM"]="Edit Forum";
$language["GROUP_BASE_LEVEL"]="Choose base level";
$language["GROUP_ERR_BASE_SEL"]="Error on base level select!";
$language["GROUP_DELETE_NEWS"]="Delete News";
$language["GROUP_PCOLOR"]="Prefix Color (like ";
$language["GROUP_SCOLOR"]="Suffix Color (like ";
$language["GROUP_VIEW_TORR"]="View Torrents";
$language["GROUP_EDIT_TORR"]="Edit Torrents";
$language["GROUP_VIEW_USERS"]="View Users";
$language["GROUP_DELETE_TORR"]="Delete Torrents";
$language["GROUP_EDIT_USERS"]="Edit Users";
$language["GROUP_DOWNLOAD"]="Can Download";
$language["GROUP_DELETE_USERS"]="Delete Users";
$language["GROUP_DELETE_FORUM"]="Delete Forum";
$language["GROUP_GO_CP"]="Can access Admin CP";
$language["GROUP_EDIT_NEWS"]="Edit News";
$language["GROUP_ADD_NEW"]="Add New Group";
$language["GROUP_UPLOAD"]="Can Upload";
$language["GROUP_WT"]="Waitingtime if Ratio <1";
$language["GROUP_EDIT_GROUP"]="Edit Group";
$language["GROUP_VIEW"]="View";
$language["GROUP_EDIT"]="Edit";
$language["GROUP_DELETE"]="Delete";
$language["INSERT_USER_GROUP"]="Insert new User Group";
$language["ERR_CANT_FIND_GROUP"]="Can't find this group!";
$language["GROUP_DELETED"]="The group has been deleted!";
// MASS PM
$language["USERS_FOUND"]="users found";
$language["USERS_PMED"]="users PMed";
$language["WHO_PM"]="Who will the pm be sent to?";
$language["MASS_SENT"]="Mass PM sent!!!";
$language["MASS_PM"]="Mass PM";
$language["MASS_PM_ERROR"]="It maybe a good idea to actually write something before submitting it!!!!";
$language["RATIO_ONLY"]="this ratio only";
$language["RATIO_GREAT"]="greater then this ratio";
$language["RATIO_LOW"]="lower then this ratio";
$language["RATIO_FROM"]="From";
$language["RATIO_TO"]="To";
$language["MASSPM_INFO"]="Info";
// PRUNE USERS
$language["PRUNE_USERS_PRUNED"]="Pruned users";
$language["PRUNE_USERS"]="Prune users";
$language["PRUNE_USERS_INFO"]="Input the number of days which the users are to be considered as \"dead\" (not connected from x days OR has signed from x days and still validating)";
// SEARCH DIFF
$language["SEARCH_DIFF"]="Upload";
$language["SEARCH_DIFF_MESSAGE"]="Message";
$language["DIFFERENCE"]="Upload";
$language["SEARCH_DIFF_CHANGE_GROUP"]="Change User Group";
// PRUNE TORRENTS
$language["PRUNE_TORRENTS_PRUNED"]="Pruned torrents";
$language["PRUNE_TORRENTS"]="Prune torrents";
$language["PRUNE_TORRENTS_INFO"]="Input the number of days which the torrents are to be considered as \"dead\"";
$language["LEECHERS"]="leecher(s)";
$language["SEEDS"]="seed(s)";
// DBUTILS
$language["DBUTILS_TABLENAME"]="Table Name";
$language["DBUTILS_RECORDS"]="Records";
$language["DBUTILS_DATALENGTH"]="Data Length";
$language["DBUTILS_OVERHEAD"]="Overhead";
$language["DBUTILS_REPAIR"]="Repair";
$language["DBUTILS_OPTIMIZE"]="Optimize";
$language["DBUTILS_ANALYSE"]="Analyse";
$language["DBUTILS_CHECK"]="Check";
$language["DBUTILS_DELETE"]="Delete";
$language["DBUTILS_OPERATION"]="Operation";
$language["DBUTILS_INFO"]="Info";
$language["DBUTILS_STATUS"]="Status";
$language["DBUTILS_TABLES"]="Tables";
// MYSQL STATUS
$language["MYSQL_STATUS"]="MySQL Status";
// SITE LOG
$language["SITE_LOG"]="Site Log";
// FORUMS
$language["FORUM_MIN_CREATE"]="Min Class Create";
$language["FORUM_MIN_WRITE"]="Min Class Write";
$language["FORUM_MIN_READ"]="Min Class Read";
$language["FORUM_SETTINGS"]="Forum's Settings";
$language["FORUM_EDIT"]="Edit Forum";
$language["FORUM_ADD_NEW"]="Add New Forum";
$language["FORUM_PARENT"]="Parent's Forum";
$language["FORUM_SORRY_PARENT"]="(Sorry, I can't have parent, because I'm myself a parent forum)";
$language["FORUM_PRUNE_1"]="There are topics and/or posts in this forum!<br />You will lose all data...<br />";
$language["FORUM_PRUNE_2"]="If you're sure to cancel this forum";
$language["FORUM_PRUNE_3"]="else go back.";
$language["FORUM_ERR_CANNOT_DELETE_PARENT"]="You cannot delete a forum which have childs, move child to other forum and try again";
// MODULES
$language["ADD_NEW_MODULE"]="Add New Module";
$language["TYPE"]="Type";
$language["DATE_CHANGED"]="Date Changed";
$language["DATE_CREATED"]="Date Created";
$language["ACTIVE_MODULES"]="Active Modules: ";
$language["NOT_ACTIVE_MODULES"]="Non-Active Modules: ";
$language["TOTAL_MODULES"]="Total Modules: ";
$language["DEACTIVATE"]="Deactivate";
$language["ACTIVATE"]="Activate";
$language["STAFF"]="Staff";
$language["MISC"]="Miscellaneous";
$language["TORRENT"]="Torrent";
$language["STYLE"]="Style";
$language["ID_MODULE"]="ID";
// HACKS
$language["HACK_TITLE"]="Title";
$language["HACK_VERSION"]="Version";
$language["HACK_AUTHOR"]="Author";
$language["HACK_ADDED"]="Added";
$language["HACK_NONE"]="There is no hacks installed";
$language["HACK_ADD_NEW"]="Add new hack";
$language["HACK_SELECT"]="Select";
$language["HACK_STATUS"]="Status";
$language["HACK_INSTALL"]="Install";
$language["HACK_UNINSTALL"]="UnInstall";
$language["HACK_INSTALLED_OK"]="Hack has been installed with success!<br />\nTo see which hacks are installed go back to <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">adminCP (Hacks)</a>";
$language["HACK_BAD_ID"]="Error getting hack's info with this ID.";
$language["HACK_UNINSTALLED_OK"]="Hack has been UnInstalled with success!<br />\nTo see which hacks are installed go back to <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">adminCP (Hacks)</a>";
$language["HACK_OPERATION"]="Operation";
$language["HACK_SOLUTION"]="Solution";
// added rev 520
$language["HACK_WHY_FTP"]="Some of the files the hack's installer needs to modify are not writable. <br />\nThis needs to be changed by logging into FTP and using it to chmod or create the files and folders. <br />\nYour FTP information may be temporarily cached for proper operation of the hack's installer.";
$language["HACK_FTP_SERVER"]="FTP Server";
$language["HACK_FTP_PORT"]="FTP Port";
$language["HACK_FTP_USERNAME"]="FTP Username";
$language["HACK_FTP_PASSWORD"]="FTP Password";
$language["HACK_FTP_BASEDIR"]="Local path for xbtit (path from the root when you login using FTP)";
// USERS TOOLS
$language["USER_NOT_DELETE"]="You cannot delete Guest user or yourself!";
$language["USER_NOT_EDIT"]="You cannot edit Guest user or yourself!";
$language["ACP_BIRTHDAY"]="Birthday Hack Settings";
$language["BIRTHDAY_LOWER_LIMIT"]="Minimum User Age";
$language["BIRTHDAY_UPPER_LIMIT"]="Maximum User Age";
$language["BIRTHDAY_BONUS"]="Birthday Bonus per year (GB)";
$language["BIRTHDAY_UPDATED"]="Thank you, your Birthday Hack settings have now been updated";
$language["ACP_SEEDBONUS"]="SeedBonus Settings";
$language["BONUS"]="Points per torrent in hour";
$language["PRICE_VIP"]="Price for rank VIP";
$language["PRICE_CT"]="Price for CustomTitle";
$language["PRICE_NAME"]="Price for change username";
$language["PRICE_GB"]="Price for GB";
$language["POINTS"]="Boonuspunktid";
$language["SEEDBONUS_UPDATED"]="SeedBonus settings updated";
$language["ACP_LOTTERY"]="Lottery";
$language["LOTT_SETTINGS"]="Loterii seaded";
$language["EXPIRE_DATE"]="Expire date";
$language["EXPIRE_TIME"]="Expire time";
$language["EXPIRE_DATE_VIEW"]="(0000-00-00 must be this format)";
$language["EXPIRE_TIME_VIEW"]="in whole hours";
$language["IS_SET"]="is current date and time)";
$language["NUM_WINNERS"]="Number of winners";
$language["TICKET_COST"]="Amount to pay (per ticket)";
$language["MIN_WIN"]="Min Amount to win";
$language["LOTTERY_STATUS"]="Lottery enabled";
$language["VIEW_SELLED"]="Vaata müüdud pileteid";
$language["ACP_SELLED_TICKETS"]="Müüdud piletid";
$language["NO_TICKET_SOLD"]="No tickets sold";
$language["TICKETS"]="tickets";
$language["PURCHASE"]="Purchase";
$language["SOLD_TICKETS"]="Tickets Sold";
$language["LOTTERY"]="Lottery";
$language["MAX_BUY"]="Maximun amount user can buy";
$language["LOTT_ID"] = "ID";
$language["LOTT_USERNAME"] = "Kasutaja";
$language["LOTT_NUMBER_OF_TICKETS"] = "Pileteid";
$language["BACK_TO_LOTTERY"]="Tagasi";
$language["LOTT_SENDER_ID"]="Sender ID for PM";
$language["ACP_RATIO_EDITOR"] = "Ratio Editor";
$language["RATIO_USERNAME"] = "Username";
$language["RATIO_UPLOADED"] = "Uploaded";
$language["RATIO_DOWNLOADED"] = "Downloaded";
$language["RATIO_INPUT_MEASURE"] = "Select input measure:";
$language["RATIO_BYTES"] = "Bytes";
$language["RATIO_K_BYTES"] = "KBytes";
$language["RATIO_M_BYTES"] = "MBytes";
$language["RATIO_G_BYTES"] = "GBytes";
$language["RATIO_T_BYTES"] = "TBytes";
$language["RATIO_ACTION"] = "Action:";
$language["RATIO_ADD"] = "Add";
$language["RATIO_REMOVE"] = "Remove";
$language["RATIO_REPLACE"] = "Replace";
$language["RATIO_HEADER"] = "Update users ratio";
$language["RATIO_SUCCES"] = "Succes";
$language["RATIO_UPDATE_SUCCES"] = "You succesfully updated this users ratio";
// NEW USER DONATE UPLOAD
$language["SETTINGS_UPLOAD"]="Donations of items for new members";
$language["VALUE_UPLOAD"]="Enter a value and choose a unit";
$language["KB"]="KB";
$language["MB"]="MB";
$language["GB"]="GB";
$language["TB"]="TB";
$language["DUPLICATES"]="Duplicates";
$language["ERROR"]="Error";
$language["ERR_USERS_NOT_FOUND"]="No users found!";
$language["ACP_ISPY"]="Message Spy";
$language["BLACKJACK_ADMIN"]="Blackjack Administration";
$language["BLACKJACK_STAKE"]="Cost per game (MB)";
$language["BLACKJACK_PRIZE"]="Beating the dealer with Blackjack pays";
$language["NORMAL_PRIZE"]="Beating the dealer normally pays";
$language["BLACKJACK_UPDATED"]="Blackjack settings updated, please note the new settings may take a minute to apply.<br /><br /><a href='javascript: history.go(-1);'>Return to previous page</a>";
$language["BLACKJACK_INFO"]="<br />Typical Blackjack pays 1:1 for beating the dealer or 3:2 (1.5:1) for beating the dealer with Blackjack<br />however you can set the prize to whatever you like. These are the prizes for the current settings:<br /><br /><li>On a stake of ".makesize($btit_settings["bj_blackjack_stake"])." Beating the dealer with Blackjack pays ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_blackjack_prize"])+$btit_settings["bj_blackjack_stake"])."</li><li>On a stake of ".makesize($btit_settings["bj_blackjack_stake"])." Beating the dealer pays ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_normal_prize"])+$btit_settings["bj_blackjack_stake"])."</li>";
//IRC
$language["IRC_SETTINGS"]="Irc settings";
$language["SETTING_IRC_SERVER"]="Irc Server (without irc://)";
$language["SETTING_IRC_PORT"]="Irc Port";
$language["SETTING_IRC_CHANNEL"]="Irc Channel (without #)";
//INVITATION SYSTEM
$language['ACP_INVITATION_SYSTEM']='Invitation System';
$language['ACTIVE_INVITATIONS']='Activate Invitation System:';
$language['PRIVATE_TRACKER']='Private Tracker';
$language['PRIVATE_TRACKER_INFO']='For improved security, when setting the tracker to "Private",<br />"Max users" will also be changed to "1".';
$language['ACP_INVITATIONS']='Invitations';
$language['VALID_INV_MODE']='Inviter Confirmation Required';
$language['INVITE_TIMEOUT']='Dead time for invitations<br />( on days )';
$language['INVITED_BY']='Invited by';
$language['SENT_TO']='Sent to';
$language['DATE_SENT']='Date Sent';
$language['INV_WELCOME']='Welcome to Invitation System Panel.<br />Activating this option will prevent users from<br />signing up without an invitation code.';
$language['HASH']='Hash';
$language['VALID_INV_MODE']='Confirmation needed';
$language['VALID_INV_EXPL']='<i>Inviter will have to confirm invited user account</i>';
$language['INVITE_TIMEOUT']='Dead time for invitations<br />( on days )';
$language['GIVE_INVITES_TO']='Give Invitations';
$language['NUM_INVITES']='Number of Invitations';
$language['INVITES_SETTINGS']='Settings';
$language['INVITES_LIST']='Invitation List';
$language['SENDINV_CONFIRM']='Are you sure you want to send this invitation?';
$language['ERR_SENDINVS']='Please, choose username or user level.';
$language['SENDINV_EXPL']='If username is not inserted, rank will be chosen instead.';
$language['RECYCLE_DATE']='Recycle period';
$language['RECYCLE_EXPL']='<i>Period in <u>days</u> after which invitations will be recycled</i>';
// --------> modpanel
$language['ACP_MODPANEL']='Staff Panel Settings';
$language['MODCP_SECTION']='Section (the section you want to allow your mod/admin, its the do-xxxx part in the link):';
$language['MODCP_DESC']='Description (if you use a language definition, then language string will be used, else the string you wrote.:';
$language['MODCP_URL']='URL (the url to access the resource, {uid} will be replaced by users id and {ucode} eg: link for banip is http://localhost/xbtit/index.php?page=admin&user={uid}&code={ucode}&do=category&action=read):';
$language['MODCP_NEWSECTION']='Add a new section';
$language['NO_SECTION_ACCESS']='You cant access this section.';
// --------> modpanel
$language['BAN_CLIENT']='Ban BitTorrent Client';
$language['REMOVE_CLIENTBAN']='Remove BitTorrent Client Ban';
$language['CLIENT_REMOVED']='This client has been removed from the banned list.<br /><br />';
$language['RETURN']='Return';
$language['UNBAN_MAIN']='By visiting this page you are indicating that you wish to remove the ban on the following client:';
$language['CONFIRM_ACTION']='Are you sure you want to do this? (you will receive no further confirmation).';
$language['CLIENT_ALREADY_BANNED']='This client is already banned!';
$language['ALL_VERSIONS']='All versions';
$language['CLIENT_ADDED']='This client has been added to the banned list<br /><br />';
$language['NEED_A_REASON']='You must enter a reason!';
$language['BAN_MAIN']='By visiting this page you are indicating that you want to ban the following client:';
$language['BAN_ALL_VERSIONS']='Ban all versions?';
$language['REASON']='Reason';
$language['ACP_FREECTRL']='Freeleech Control';
?>