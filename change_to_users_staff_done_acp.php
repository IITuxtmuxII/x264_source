<?php
require_once(dirname(__FILE__) . "/include/bittorrent.php");
dbconn(false);
loggedinorreturn();

$trackerconfig = explode("|",htmlentities(trim(get_config_data('TRACKERCONF'))));
if ($trackerconfig[3] == "off")
  stderr("Zur Zeit gesperrt","Profilbearbeiten ist zur Zeit deaktiviert!");

function puke($text = "w00t")
{
  stderr("w00t", $text);
} 

check_access();

$action = $_POST["action"];

if ($action == "edituser")
{
  $userid        = intval($_POST["userid"]);
  $info          = htmlentities(trim($_POST['info']));
  $user          = htmlentities(trim($_POST['username']));
  $title         = htmlentities(trim($_POST["title"]));
  $secure_code   = htmlentities(trim($_POST["secure_code"]));
  $email         = htmlentities(trim($_POST["email"]));
  $chpassword    = htmlentities(trim($_POST["chpassword"]));
  $passagain     = htmlentities(trim($_POST["passagain"]));
  $avatar        = htmlentities(trim($_POST["avatar"]));
  $chpasskey     = ($_POST["chpasskey"] == "1" ? "yes" : "no");
  $enabled       = ($_POST["enabled"] == "yes"?"yes":"no");
  $warned        = ($_POST["warned"] == "yes"?"yes":"no");
  $webseed       = ($_POST["webseed"]=="yes"?"yes":"no");
  $vdsl          = ($_POST["vdsl"]=="yes"?"yes":"no");
  $adsl          = ($_POST["adsl"]=="yes"?"yes":"no");
  $warnlength    = intval($_POST["warnlength"]);
  $warnpm        = trim($_POST["warnpm"]);
  $anon          = ($_POST["anon"]=="yes"?"yes":"no");
  $donor         = ($_POST["donor"] == "yes"?"yes":"no");
  $team          = intval($_POST["team"]);
  $modcomment    = trim($_POST["modcomment"]);
  $shoutpost     = ($_POST["shoutpost"]=="yes"?"yes":"no");
  $waittime      = $_POST["wait"];
  $beobachtung   = ($_POST["beobachtung"] == "1" ? "yes" : "no");
  $seedbonus     = $_POST["seedbonus"];
  $acceptrules   = $_POST["acceptrules"];
  $baduser       = $_POST["baduser"];
  $allowupload   = ($_POST["denyupload"] == "yes"?"no":"yes");
  $allowdownload = ($_POST["denydownload"] == "yes"?"no":"yes");
  $class         = 0 + $_POST["class"];
  $seedbonus     = 0 + $_POST["seedbonus"];
  $all_seed      = ($_POST["all_seed"]    == "yes" ? "1" : "0");
  $seed_wo_star  = ($_POST["seed_wo_st"]  == "no" ? 0 : intval($_POST["seed_wo_st"]));
  $seed_wo_end   = ($_POST["seed_wo_end"] == "no" ? 0 : intval($_POST["seed_wo_end"]));
  $seed_we_star  = ($_POST["seed_we_st"]  == "no" ? 0 : intval($_POST["seed_we_st"]));
  $seed_we_end   = ($_POST["seed_we_end"] == "no" ? 0 : intval($_POST["seed_we_end"]));
  $prang         = htmlentities(trim($_POST['pcenter1']));
  $ptracker      = intval($_POST['pcenter2']);
  $poclass       = intval($_POST['pcenter3']);
  $javaalert     = trim($_POST['javaalert']);

  if ($javaalert)
  {
    $time = time();
    mysql_query("INSERT INTO javaalert (id, added, absender, empfanger, msg) VALUES ( NULL, ".$time.", ".$CURUSER['id']." , ".$userid." , ".sqlesc($javaalert).")") or sqlerr(__FILE__, __LINE__);
  }
     
  if (get_user_class() >= UC_ADMINISTRATOR)
  {
    $altacp        = ($_POST['altacp'] == "yes"?"yes":"no");
    $altrea        = trim($_POST['altacpreason']);
    $uploadtoadd   = $_POST["amountup"];
    $downloadtoadd = $_POST["amountdown"];
    $formatup      = $_POST["formatup"];
    $formatdown    = $_POST["formatdown"];
    $mpup          = $_POST["upchange"];
    $mpdown        = $_POST["downchange"];
  }

  if ($baduser == "yes")
  {
    $allowdownload = "no";
    $allowupload   = "no";
  }

  if (!is_valid_id($userid) || !is_valid_user_class($class))
    stderr("Fehler", "Falsche User ID oder Klassen ID.");

  $res              = mysql_query("SELECT email, donor, title, warned, secure_code, enabled, username, class, webseed, vdsl, adsl, tlimitall, tlimitseeds, tlimitleeches, allowupload, allowdownload, uploaded, downloaded FROM users WHERE id=$userid") or sqlerr(__FILE__, __LINE__);
  $arr              = mysql_fetch_assoc($res) or puke();

  $curenabled       = $arr["enabled"];
  $curclass         = $arr["class"];
  $curwarned        = $arr["warned"];
  $curallowupload   = $arr["allowupload"];
  $curallowdownload = $arr["allowdownload"];
  $curtitle         = $arr["title"];
  $cursecure_code   = $arr["secure_code"];
  $curdownloaded    = $arr["downloaded"];
  $curuploaded      = $arr["uploaded"];
  $username         = $arr["username"];
  $curemail         = $arr["email"];
  $curdonor         = $arr["donor"];

  if (get_user_class() >= UC_TECH && $curclass >= get_user_class())
    puke();



  $config    = explode("|",htmlentities(trim(get_config_data("ALTACPCONF"))));
  if ($config[0] == "on" && $altacp == "yes")
  {
    if ($altrea)
    {
      $altacpres = mysql_query("SELECT username, email, ip FROM users WHERE id=".$userid) or sqlerr(__FILE__, __LINE__);
      $altacparr = mysql_fetch_assoc($altacpres);
      get_altacp("adduser",array("username=".$altacparr['username'],"email=".$altacparr['email'],"ip=".$altacparr['ip'],"reason=".$altrea));
      write_modcomment($userid, $CURUSER["id"], "User wurde in die ALTACP Datenbank eingetragen[br]Grund:".$altrea);
    }
    else
      stderr("Fehler","Beim eintragen in der ALTACP Datenbank muss ein Grund eingetragen werden");
  }

  if($uploadtoadd > 0)
  {
    if($mpup == "plus")
      $newupload = $arr["uploaded"] + ($formatup == mb ? ($uploadtoadd * 1048576) : ($uploadtoadd * 1073741824));
    else
      $newupload = $arr["uploaded"] - ($formatup == mb ? ($uploadtoadd * 1048576) : ($uploadtoadd * 1073741824));
    $updateset[] =  "uploaded = $newupload";
  }
    
  if($downloadtoadd > 0)
  {
    if($mpdown == "plus")
      $newdownload = $arr["downloaded"] + ($formatdown == mb ? ($downloadtoadd * 1048576) : ($downloadtoadd * 1073741824));
    else
      $newdownload = $arr["downloaded"] - ($formatdown == mb ? ($downloadtoadd * 1048576) : ($downloadtoadd * 1073741824));
    $updateset[] = "downloaded = $newdownload";
  }

  if ($warnlength && $warnpm == "")
    stderr("Fehler", "Du musst einen Verwarnungsgrund angeben (z.B. \"Zu niedrige Ratio\" oder \"Ich mag Dich einfach nicht!\").");

  if ($enabled != $curenabled && $enabled == true && $_POST["disablereason"] == "")
    stderr("Fehler", "Du musst einen Grund f�r die Deaktivierung angeben (z.B. \"Verwarnungsbedingungen nicht erf�llt\" oder \"Cheating\"). Der Benutzer erh�lt den Grund als E-Mail zugesandt.");

  switch ($_POST["limitmode"])
  {
    case "auto":
    default:
      $maxtotal = 0;
      $maxseeds = 0;
      $maxleeches = 0;
      break;
    case "unlimited":
      $maxtotal = -1;
      $maxseeds = 0;
      $maxleeches = 0;
      break;
    case "manual":
      $maxtotal = intval($_POST["maxtotal"]);
      $maxseeds = intval($_POST["maxseeds"]);
      $maxleeches = intval($_POST["maxleeches"]);
      if ($maxseeds > $maxtotal)
        $maxseeds = $maxtotal;
      if ($maxleeches > $maxtotal)
        $maxleeches = $maxtotal;
      if ($maxtotal <= 0 || $maxleeches < 0 || $maxseeds <= 0)
        stderr("Fehler", "Die Torrentbegrenzung muss bei Seeds und Gesamt min. 1 sein, bei Leeches 0 oder h�her.");
      break;
  }

  if ($modcomment != "")
    write_modcomment($userid, $CURUSER["id"], $modcomment);

  if ($maxtotal <> intval($arr["tlimitall"]) || $maxseeds <> intval($arr["tlimitseeds"]) || $maxleeches <> intval($arr["tlimitleeches"]))
  {
    $updateset[] = "tlimitall = " . $maxtotal;
    $updateset[] = "tlimitseeds = " . $maxseeds;
    $updateset[] = "tlimitleeches = " . $maxleeches;
    write_modcomment($userid, $CURUSER["id"], "Torrentbegrenzung ge�ndert: $maxleeches Leeches, $maxseeds Seeds, $maxtotal Gesamt");
  }

  if ($curtitle != $title)
    write_modcomment($userid, $CURUSER["id"], "Titel ge�ndert auf '" . $title . "'.");

  if ($cursecure_code != $secure_code)
    write_modcomment($userid, $CURUSER["id"], "Secure Code ge�ndert auf '" . $secure_code . "'.");

  if ($curclass != $class)
  {
    $what = ($class > $curclass ? "bef�rdert" : "degradiert");
    $type = ($class > $curclass ? "promotion" : "demotion");
    $msg = sqlesc(($class > $curclass?"[b]Herzlichen Gl�ckwunsch![/b]":"") . "Du wurdest soeben von [b]" . $CURUSER["username"] . "[/b] zum  '" . get_user_class_name($class) . "' $what.Wenn etwas an dieser Aktion nicht in Ordnung sein sollte, melde Dich bitte bei dem angegebenen Teammitglied!");
    $added = sqlesc(get_date_time());
    sendPersonalMessage(0, $userid, "Du wurdest zum '" . get_user_class_name($class) . "' $what", $msg, PM_FOLDERID_SYSTEM, 0);
    write_log($type, "Der Benutzer '<a href=\"userdetails.php?id=$userid\">$username</a>' wurde von $CURUSER[username] zum " . get_user_class_name($class) . " $what.");
    $updateset[] = "class = $class";
    $what = ($class > $curclass ? "Bef�rderung" : "Degradierung");
    write_modcomment($userid, $CURUSER["id"], "$what zum '" . get_user_class_name($class) . "'.");
    if ($class > UC_VIP && $curclass < $class)
      $updateset[] = "shoutpost = " . sqlesc($shoutpost);
    $updateset[] = "accept_rules = 'no'";
  }

  if ($curemail != $email)
    write_modcomment($userid, $CURUSER["id"], "E-Mail ge�ndert auf '" . $email . "'.");

  if ($warned && $curwarned != $warned)
  {
    $updateset[] = "warned = " . sqlesc($warned);
    $updateset[] = "warneduntil = '0000-00-00 00:00:00'";
    $updateset[] = "timeswarned = timeswarned-1";
    $updateset[] = "systemwarn = 'no'";
    
    if ($warned == 'no')
    {
      $msg = "Deine Verwarnung wurde von " . $CURUSER['username'] . " zur�ckgenommen.\n\nFalls die Verwarnung nicht wegen Unrechtm��igkeit zur�ckgenommen wurde, achte bitte in Zukunft darauf, die Tracker-Regeln ernstzunehmen.";
      write_log("remwarn", "Die Verwarnung f�r Benutzer '<a href=\"userdetails.php?id=$userid\">$username</a>' wurde von $CURUSER[username] zur�ckgenommen.");
      write_modcomment($userid, $CURUSER["id"], "Die Verwarnung wurde zur�ckgenommen.");
      sendPersonalMessage(0, $userid, "Deine Verwarnung wurde zur�ckgenommen", $msg, PM_FOLDERID_SYSTEM, 0);
    }
  }
  elseif ($warnlength)
  {
    if ($_POST["addwarnratio"] == "yes")
      $warnratio = "\nRuntergeladen: " . mksize($curdownloaded) . "\nHochgeladen: " . mksize($curuploaded) . "\nRatio: " . number_format($curuploaded / $curdownloaded, 3);
    else
      $warnratio = "";
    if ($warnlength == 255)
    {
      $msg = "Du wurdest von " . $CURUSER['username'] . " verwarnt]." . ($warnpm ? "\n\nGrund: $warnpm" : "");
      write_modcomment($userid, $CURUSER["id"], "Verwarnung erteilt.\nGrund: $warnpm" . $warnratio);
      $updateset[] = "warneduntil = '0000-00-00 00:00:00'";
    }
    else
    {
      $warneduntil = get_date_time(time() + $warnlength * 604800);
      $dur = $warnlength . " Woche" . ($warnlength > 1 ? "n" : "");
      $msg = "Du wurdest f�r $dur von " . $CURUSER['username'] . " verwarnt." . ($warnpm ? "\n\nGrund: $warnpm" : "");
      write_modcomment($userid, $CURUSER["id"], "Verwarnt f�r $dur.\nGrund: $warnpm" . $warnratio);
      $updateset[] = "warneduntil = '$warneduntil'";
    }
    $added = sqlesc(get_date_time());
    write_log("addwarn", "Der Benutzer '<a href=\"userdetails.php?id=$userid\">$username</a>' wurde von $CURUSER[username] verwarnt ($warnpm).");
    sendPersonalMessage(0, $userid, "Du wurdest verwarnt", $msg . "\n\nFalls Du diese Verwarnung ungerechtfertigt findest, melde Dich bitte bei dem Teammitglied der Dich verwarnt hat!", PM_FOLDERID_SYSTEM, 0);
    $updateset[] = "warned = 'yes'";
    $updateset[] = "timeswarned = timeswarned+1";
    $updateset[] = "warnedby = ".$CURUSER['id'];
    $updateset[] = "lastwarned = $added";
  }

    $sandllength = 0 + $_POST['sandllength'];
if ( ( isset( $_POST['sandllength'] ) ) && ( $soulength = 0 + $_POST['sandllength'] ) ) {
    if ( $sandllength == 255 ) {
        $modcomment = "S&L Befreiung aktiviert von " . $CURUSER['username'] . "f�r $dur.\n" . $modcomment;
        $msg = sqlesc( "F�r Dich wurde von " . $CURUSER['username'] . "eine S&L Befreiung aktiviert" );
        $subject = sqlesc( "S&L Befreiung !" );
        $sandl = '0000-00-00 00:00:00';
    } else {
        $sandl = get_date_time( time() + $sandllength * 604800 );
        $dur = $soulength . " Woche" . ( $sandllength > 1 ? "n" : "" );
        $msg = "Hallo " . $user['username'] . "\n
Du wurdest  S&L befreit!\n
Du bist S&L befreit ;)

Viel Spa�,\n
Staff" ;

        $subject = "S&L Befreiung !" ;
        write_modcomment($userid, $CURUSER["id"], "S&L Befreiung aktiviert von " . $CURUSER['username'] . " f�r $dur .\n");
    }
    $added = sqlesc( get_date_time() );
    sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
    $updateset[] = "usernosl = 'yes'";
    $updateset[] = "sandl = '$sandl'";
}
if ( ( isset( $_POST['sandllengthadd'] ) ) && ( $sandllengthadd = 0 + $_POST['sandllengthadd'] ) ) {
    $sandl = $user["sandl"];
    $dur = $sandllength . " Woche" . ( $sandllength > 1 ? "n" : "" );
    $msg = "Hallo " . $user['username'] . "\n
S&L Befreiung!\n
Deine S&L Befreiung wurde vom Staff verl�ngert. ;) !!!


Viel Spa�,\n
Staff" ;

    $subject = "Wieder S&L frei !" ;
    write_modcomment($userid, $CURUSER["id"], "S&L Befreiung verl�ngert von " . $CURUSER['username'] . " f�r $dur .\n");
    $sandllengthadd = $sandllengthadd * 7;
    sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
    mysql_query( "UPDATE users SET sandl = IF(sandl='0000-00-00 00:00:00', ADDDATE(NOW(), INTERVAL $sandllengthadd DAY ), ADDDATE( sandl, INTERVAL $sandllengthadd DAY)) WHERE id = $userid" ) or sqlerr( __FILE__, __LINE__ );
    $added = sqlesc( get_date_time() );
}

if ( isset( $_POST['usernosl'] ) && ( ( $usernosl = $_POST['usernosl'] ) != $arr['usernosl'] ) ) {
    $updateset[] = "usernosl = " . sqlesc( $usernosl );
    $updateset[] = "sandl = '0000-00-00 00:00:00'";
    if ( $usernosl == 'no' ) {
        write_modcomment($userid, $CURUSER["id"], "S&L Befreiung wurde entfernt von " . $CURUSER['username'] . ".\n" );
        $msg = "Deine S&L Befreiung ist zu ende, oder wurde entfernt." ;
        $added = get_date_time() ;
        $subject = "Deine S&L Befreiung ist abgelaufen...." ;
        sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
    }
}

if ( ( isset( $_POST['soulength'] ) ) && ( $soulength = 0 + $_POST['soulength'] ) ) {
 if ( $soulength == 255 ) {
  $modcomment = "User OnlyUp aktiviert von " . $CURUSER['username'] . "f�r $dur.\n" . $modcomment;
  $msg = sqlesc( "F�r Dich wurde von " . $CURUSER['username'] . "dein pers�nliches OnlyUp aktiviert" );
  $subject = sqlesc( "OnlyUp f�r Dich !" );
  $updateset[] = "souuntil = '0000-00-00 00:00:00'";
 } else {
  $souuntil = get_date_time( time() + $soulength * 604800 );
  $dur = $soulength . " Woche" . ( $soulength > 1 ? "n" : "" );
  $msg = "Hallo " . $user['username'] . "\n
Du hast OnlyUp bekommen!\n
Dir wurde vom Staff, f�r $dur, OnlyUp bei allen Torrents gegeben. Du kannst also Saugen bis die Leitung gl�ht !!!
Nutz es aus, so etwas bekommt nicht jeder !!!
 
Viel Spa�,\n
Staff" ;
  $subject = "OnlyUp f�r Dich !" ;
  write_modcomment($userid, $CURUSER["id"], "User OnlyUp aktiviert von " . $CURUSER['username'] . " f�r $dur .\n");
 }
 $added = sqlesc( get_date_time() );
 sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
 $updateset[] = "userfree = 'yes'";
 $updateset[] = "souuntil = '$souuntil'";
}
if ( ( isset( $_POST['soulengthadd'] ) ) && ( $soulengthadd = 0 + $_POST['soulengthadd'] ) ) {
 $souuntil = $user["souuntil"];
 $dur = $soulength . " Woche" . ( $soulength > 1 ? "n" : "" );
 $msg = "Hallo " . $user['username'] . "\n
Du hast auf unserem Tracker OnlyUp!\n
Dein OnlyUp wurde von Staff verl�ngert. Du kannst also auch weiterhin saugen bis der Arzt kommt !!!
Viel Spa� weiterhin ;) !!!
 
Viel Spa�,\n
Staff" ;
 $subject = "Und wieder OnlyUp f�r Dich !" ;
 write_modcomment($userid, $CURUSER["id"], "OnlyUp verl�ngert von " . $CURUSER['username'] . ".\n");
 $soulengthadd = $soulengthadd * 7;
 sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
 mysql_query( "UPDATE users SET souuntil = IF(souuntil='0000-00-00 00:00:00', ADDDATE(NOW(), INTERVAL $soulengthadd DAY ), ADDDATE( souuntil, INTERVAL $soulengthadd DAY)) WHERE id = $userid" ) or sqlerr( __FILE__, __LINE__ );
 $added = sqlesc( get_date_time() );
}
// === Remove Single User OnlyUp by R3nat3 if they were bad
if ( isset( $_POST['userfree'] ) && ( ( $userfree = $_POST['userfree'] ) != $arr['userfree'] ) ) {
 $updateset[] = "userfree = " . sqlesc( $userfree );
 $updateset[] = "souuntil = '0000-00-00 00:00:00'";
 if ( $userfree == 'no' ) {
  write_modcomment($userid, $CURUSER["id"], "Single User OnlyUp wurde entfernt von " . $CURUSER['username'] . ".\n" );
  $msg = "Dein pers�nliches OnlyUp ist zu ende, oder wurde entfernt." ;
  $added = get_date_time() ;
  $subject = "Dein OnlyUp ist abgelaufen...." ;
  sendPersonalMessage( 0, $userid, $subject, $msg, PM_FOLDERID_SYSTEM, 0 );
 }
}

  if ($donor && $curdonor != $donor)
  {
    $updateset[] = "donor = " . sqlesc($donor);
    $updateset[] = "donoruntil = '0000-00-00 00:00:00'";
    if ($donor == "yes")
    {
      $donoruntil = get_date_time(time() + 2592000);
      $updateset[] = "donoruntil = '$donoruntil'";
			$msg = "Da du f�r den Tracker gespendet hast bekommst du nun einen Donorstern f�r genau 30 Tage";
			sendPersonalMessage(0, $userid, "Vielen Dank f�r deine Spende!", $msg . "Falls du dich nun fragst h�? wieso nur f�r 30 Tage...Dann kann ich dir nur sagen absolut kein Plan :D", PM_FOLDERID_SYSTEM, 0);
	   }
	}

  if (is_array($waittime))
  {
    foreach($waittime as $torrent => $ack)
    {
      $torrent = intval($torrent);
      $res = mysql_query("SELECT name FROM torrents WHERE id=$torrent");
      if (mysql_num_rows($res))
      {
        $arr = mysql_fetch_assoc($res);
        $torrent_name = $arr["name"];
        $new_status = "";
        if ($ack == "yes")
        {
          $msg = "Dein Antrag auf Aufhebung der Wartezeit f�r den Torrent '" . $torrent_name . "' wurde von " . $CURUSER['username'] . " angenommen. Du kannst nun beginnen, diesen Torrent zu nutzen.";
          $new_status = "granted";
          $log_type = "waitgrant";
          $log_msg = "akzeptiert";
        }
        elseif ($ack == "no")
        {
          $msg = "Dein Antrag auf Aufhebung der Wartezeit f�r den Torrent '" . $torrent_name . "' wurde von " . $CURUSER['username'] . " abgelehnt. Bitte beachte, dass eine erneute Antragstellung f�r diesen Torrent nicht m�glich ist!\n\nEbenso solltest Du Dir noch einmal die Regeln bzw. das FAQ zum Thema Wartezeitaufhebung durchlesen, bevor Du eine weitere Aufhebung beantragst. Beachte, dass h�ufige, nicht regelkonforme Antr�ge zu Verwarnungen f�hren k�nnen!";
          $new_status = "rejected";
          $log_type = "waitreject";
          $log_msg = "abgelehnt";
        }
        if ($new_status)
        {
          mysql_query("UPDATE nowait SET `status`='$new_status',grantor=$CURUSER[id] WHERE user_id=$userid AND torrent_id=$torrent AND `status`='pending'");
          if (mysql_affected_rows())
          {
            write_log($log_type, "Antrag auf Wartezeitaufhebung von '<a href=\"userdetails.php?id=$userid\">$username</a>' f�r Torrent '<a href=\"details.php?id=$torrent\">$torrent_name</a>' wurde von $CURUSER[username] $log_msg.");
            sendPersonalMessage(0, $userid, "Dein Antrag auf Wartezeitaufhebung wurde $log_msg", $msg, PM_FOLDERID_SYSTEM, 0);
            write_modcomment($userid, $CURUSER["id"], "Wartezeitaufhebung f�r Torrent '" . $torrent_name . " '$log_msg.");
          }
        }
      }
    }
  }

  if ($allowupload != $curallowupload)
  {
    $updateset[] = "allowupload = '$allowupload'";
    write_modcomment($userid, $CURUSER["id"], "Torrentupload " . ($allowupload == "yes"?"erlaubt":"gesperrt"));
  }

  if ($allowdownload != $curallowdownload)
  {
    $updateset[] = "allowdownload = '$allowdownload'";
    write_modcomment($userid, $CURUSER["id"], "Torrentdownload " . ($allowdownload == "yes"?"erlaubt":"gesperrt"));
  }

  if ($allowdownload == "yes")
  {
    $msg = "Dein Torrentdownload wurde von " . $CURUSER['username'] . " aktiviert.";
    $dl_msg = "aktiviert";
  }
  elseif ($allowdownload == "no")
  {
    $msg = "Dein Torrentdownload wurde von " . $CURUSER['username'] . " deaktiviert. Dies kann mit einem Regelverstoss zusammenh�ngen. Bitte wende dich bei Fragen an den User, der dir den Torrentdownload deaktiviert hat.";
    $dl_msg= "deaktiviert";
  }

  if ($enabled != $curenabled)
  {
    if ($enabled == 'yes')
    {
      write_modcomment($userid, $CURUSER["id"], "Account aktiviert. Grund:\n" . ($_POST["disablereason"] != ""?$_POST["disablereason"]:""));
      write_log("accenabled", "Benutzeraccount '<a href=\"userdetails.php?id=$userid\">$username</a>' wurde von $CURUSER[username] aktiviert.");
    }
    else
    {
      write_modcomment($userid, $CURUSER["id"], "Account deaktiviert. Grund:\n" . $_POST["disablereason"]);
      write_log("accdisabled", "Benutzeraccount '<a href=\"userdetails.php?id=$userid\">$username</a>' wurde von $CURUSER[username] deaktiviert (Grund: " . $_POST["disablereason"] . ").");
      $mailbody = "Dein Account auf " . $GLOBALS["SITENAME"] . " wurde von einem Moderator deaktiviert.
Du kannst dich ab sofort nicht mehr einloggen. Grund f�r diesen Schritt:

" . $_POST["disablereason"] . "

Bitte sehe in Zukunft davon ab, Dir einen neuen Account zu erstellen. Dieser
wird umgehend und ohne weitere Warnung deaktiviert werden.

Bei Fragen besuche uns im IRC.";
      mail($email, "Account $username auf " . $GLOBALS["SITENAME"] . " wurde deaktiviert", $mailbody);
      
      mysql_query("DELETE FROM downloadtickets WHERE userid = ".$userid) or sqlerr(__FILE__,__LINE__);
    }
  }

  $acctdata = mysql_fetch_assoc(mysql_query("SELECT baduser,chash FROM accounts WHERE userid=$userid"));
  if (!is_array($acctdata))
  {
    $hash = md5(mksecret());
    mysql_query("INSERT INTO `accounts` (`userid`,`chash`,`lastaccess`,`username`,`email`,`baduser`) VALUES (" . $row["id"] . "," . sqlesc($hash) . ", NOW(), " . sqlesc($username) . ", " . sqlesc($email) . ", " . ($baduser == "yes"?1:0) . ")");
  }
  else
  {
    $oldbaduser = ($acctdata["baduser"] == 1 ? "yes" : "no");
    if ($oldbaduser != $baduser)
    {
      mysql_query("UPDATE accounts SET baduser=" . ($baduser == "yes"?1:0) . " WHERE userid=$userid OR chash=" . sqlesc($acctdata["chash"]));
      write_modcomment($userid, $CURUSER["id"], "BAD-Flag " . ($baduser == "yes"?"gesetzt":"entfernt"));
    }
  }

  if ($_POST['delseed'] == '1')
  {
    $seed_angaben    = "0,0,0,0,0";
    write_modcomment($userid, $CURUSER["id"], "Seed Zeit Angaben gel�scht");
  }
  else
  {
    $seed_angaben    = $all_seed . "," . $seed_wo_star . "," . $seed_wo_end . "," . $seed_we_star . "," . $seed_we_end;
  }
    
  if($beobachtung == 'yes')
  {
    $beobachter=$CURUSER["username"];
    $updateset[] = "beobachtung = " . sqlesc($beobachtung);
    $updateset[] = "beobachtet_von = " . sqlesc($beobachter);
  }

  if ($chpasskey == 'yes')
  {
    $updateset[] = "passkey = " . sqlesc(mksecret(8));
    $resetterid=$CURUSER["id"];
    $resettername=$CURUSER["username"];
    write_log("passkeyadminreset","Der PassKey von <a href=\"userdetails.php?id=$userid\">$username</a> wurde neu generiert von <a href=\"userdetails.php?id=$resetterid\">$resettername</a>");
  }

  if ($chpassword != "")
  {
    if (strlen($chpassword) > 40)
      stderr("Error", "Sorry, password is too long (max is 40 chars)");
    if ($chpassword != $passagain)
      stderr("Error", "You dumb ass the passwords dont match!");

    $sec = mksecret();
    $passhash = md5($sec . $chpassword . $sec);
    $updateset[] = "secret = " . sqlesc($sec);
    $updateset[] = "passhash = " . sqlesc($passhash);
  }

  $updateset[] = "username = " . sqlesc($user);
  $updateset[] = "email = " . sqlesc($email);
  $updateset[] = "donor = " . sqlesc($donor);
  $updateset[] = "webseed = " . sqlesc($webseed);
  $updateset[] = "vdsl = " . sqlesc($vdsl);
  $updateset[] = "adsl = " . sqlesc($adsl);
  $updateset[] = "info = " . sqlesc($info);
  $updateset[] = "avatar = " . sqlesc($avatar);
  $updateset[] = "title = " . sqlesc($title);
  $updateset[] = "secure_code = " . sqlesc($secure_code);
  $updateset[] = "shoutpost = " . sqlesc($shoutpost);
  $updateset[] = "accept_rules = " . sqlesc($acceptrules);
  $updateset[] = "seed_angaben = " . sqlesc($seed_angaben);
  $updateset[] = "enabled = " . sqlesc($enabled);
  
  mysql_query("UPDATE users SET  " . implode(", ", $updateset) . " WHERE id=$userid") or sqlerr(__FILE__, __LINE__);
  
  $returnto = $_POST["returnto"];

  if (get_user_class() >= UC_ADMINISTRATOR)
  {
    if (($_POST["delmodcom"]))
    {
      $do="DELETE FROM modcomments WHERE id IN (" . implode(", ", $_POST[delmodcom]) . ")";
      $res=mysql_query($do);
    }
    if($team>0)
    {
      $anz=mysql_query("select * from teammembers where teamid=$team and userid=$userid");
      if(mysql_num_rows($anz)==0)
      {
        mysql_query("insert into teammembers (userid,teamid) values (".sqlesc($userid).",".sqlesc($team).")");
        write_modcomment($userid, $CURUSER["id"], "Zum Team $team hinzugef�gt");
      }
    }
  }

  header("Location: ".$GLOBALS["BASEURL"]."/$returnto");
  die;
} 
puke();
?>