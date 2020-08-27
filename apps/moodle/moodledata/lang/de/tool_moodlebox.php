<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_moodlebox', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_moodlebox
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['badpowersupply'] = '<p><b>Hinweis: </b> Die Stromversorgung der MoodleBox ist nicht ausreichend. Dies könnte Probleme verursachen, z.B. die Anzahl von WLAN-Clients begrenzen oder auch die MoodleBox unerwartet herunterfahren.</p>
<p>Es wird empfohlen, die offizielle <a href="https://www.raspberrypi.org/products/universal-power-supply/" target="_blank"> Stromversorgung der Raspberry Foundation </a> zu verwenden, außerdem ein hochwertiges Kabel zum Anschluss an die MoodleBox.</p>';
$string['changepassworderror'] = 'Das Kennwort für das Systemkonto (Unix) und die Datenbank wurde nicht geändert, weil die eingegebenen Kennwörter nicht übereinstimmen.';
$string['changepasswordmessage'] = 'Das Kennwort für das Systemkonto (Unix) und die Datenbank wurde geändert.<br /><br />Achtung! Das Kennwort für das Moodle-Nutzerkonto \'moodlebox\' <b>wurde nicht verändert</b>. Öffnen Sie dazu die Einstellungen für das entsprechende Moodle-Nutzerkonto.';
$string['changepasswordsetting'] = 'MoodleBox-Kennwort ändern';
$string['changewifipassword'] = 'WLAN-Kennwort ändern';
$string['changewifisettings'] = 'WLAN-Einstellungen ändern';
$string['configuration'] = 'MoodleBox-Einstellungen';
$string['cpufrequency'] = 'CPU-Frequenz';
$string['cpuload'] = 'CPU-Auslastung';
$string['cputemperature'] = 'CPU-Temperatur';
$string['currentwifipassword'] = 'WLAN-Kennwort';
$string['dashboard'] = 'MoodleBox-Dashboard';
$string['datetime'] = 'Datum und Uhrzeit';
$string['datetime_help'] = 'Wenn die MoodleBox nicht mit dem Internet verbunden ist, wird möglicherweise eine falsche Systemzeit angezeigt. Hier können Sie die Systemzeit manuell korrigieren.';
$string['datetimemessage'] = 'Die Systemzeit der MoodleBox wurde neu eingestellt. Um eine hohe Zeitgenauigkeit zu erreichen, sollten Sie die MoodleBox über ein Ethernetkabel mit dem Internet verbinden.';
$string['datetimeset'] = 'Systemzeit einstellen';
$string['datetimesetmessage'] = 'Die Systemzeit der MoodleBox scheint nicht richtig zu sein. Sie sollten unbedingt das aktuelle Datum und die richtige Uhrzeit einstellen.';
$string['datetimesetting'] = 'Systemzeit';
$string['defaultgateway'] = 'Standardgateway';
$string['dhcpclientinfo'] = 'IP-Adresse und Name';
$string['dhcpclientnumber'] = 'Anzahl';
$string['dhcpclients'] = 'DHCP-Clients';
$string['documentation'] = 'Dokumentation';
$string['documentation_desc'] = '<p>Antworten zu Ihren Support-Fragen finden Sie in der <a href="https://moodlebox.net/de/help/" title="MoodleBox-Dokumentation" target="_blank"> MoodleBox-Dokumentation </a>.</p >';
$string['ethernetdisconnected'] = 'Ethernet nicht verbunden';
$string['forum'] = 'Supportforum';
$string['forum_desc'] = '<p>Falls Sie keine Antwort auf eine Frage in der <a href="https://moodlebox.net/de/help/" title="MoodleBox-Dokumentation" target="_blank"> MoodleBox-Dokumentation </a> finden können, durchsuchen Sie das <a href="https://discuss.moodlebox.net/" title="MoodleBox-Supportforum" target="_blank"> MoodleBox-Supportforum </a> um zu sehen, ob Ihre Frage möglicherweise bereits beantwortet wurde. Ansonsten können Sie dort eine neue Diskussion beginnen.</p>';
$string['hidden'] = 'Verborgen';
$string['ihavedonated'] = 'Ich habe gespendet!  🎉';
$string['ihavedonated_desc'] = 'Setzen Sie einen Haken in die Box <a href="https://moodlebox.net/de/projekt-moodlebox-unterstuetzen/" title="MoodleBox-Projekt unterstützen" target="_blank">Ich habe gespendet!</a>, wenn Sie das MoodleBox-Projekt unterstützt haben. <br />Die Einstellung hat keinen Effekt. Es erlaubt Ihnen einfach stolz sein, einen Beitrag zum <a href="https://moodlebox.net/de/" title="MoodleBox-Website" target="_blank"> MoodleBox-Projekt </a> geleistet zu haben. Vielen Dank!';
$string['infofileerror'] = 'Information nicht verfügbar';
$string['infoheading'] = 'MoodleBox-Supportinformation';
$string['information'] = 'Information';
$string['interfacename'] = 'Schnittstelle';
$string['ipaddress'] = 'IP-Adresse';
$string['kernelversion'] = 'Kernel-Version';
$string['missingconfigurationerror'] = 'Dieser Bereich ist nicht verfügbar. Die Installation des Plugins ist unvollständig, so dass die Einstellungen der MoodleBox nicht verarbeitet werden können. Lesen Sie die <a href="https://github.com/moodlebox/moodle-tool_moodlebox/blob/master/README.md"" target="_blank">Installationshinweise</a> zum Plugin.';
$string['moodleboxinfo'] = 'MoodleBox-Version';
$string['moodleboxinfofileerror'] = 'Information nicht verfügbar';
$string['moodleboxpluginversion'] = 'MoodleBox-Plugin-Version';
$string['moodleboxsysteminfo'] = 'MoodleBox-Infos';
$string['moodleboxsysteminfo_help'] = 'Diese Übersicht enthält wichtige Informationen und Einstellungen der MoodleBox:

* Kritische Betriebsdaten
  * Freier Speicher auf der SD-Karte
  * Auslastung, Temperatur und Frequenz des Prozessors
* Aktuelle WLAN-Einstellungen der MoodleBox
* IP-Adressen und Namen aller mit der MoodleBox verbundenen Geräte
* Raspberry Pi Modell und Betriebssystem
* MoodleBox-Version und MoodleBox-Plugin-Version';
$string['moodlebox:viewbuttonsinfooter'] = 'Tasten zum Neustart und Ausschalten im Fußbereich anzeigen';
$string['networkinterface'] = 'Kabelgebundene Schnittstelle';
$string['newwifipassword'] = 'Neues WLAN-Kennwort';
$string['nopassworddefined'] = 'Kein WLAN-Kennwort festgelegt';
$string['parameter'] = 'Parameter';
$string['passwordprotected'] = 'Mit Kennwort geschützt';
$string['passwordsetting'] = 'MoodleBox-Kennwort';
$string['passwordsetting_help'] = 'Das Hauptkennwort der MoodleBox kann hier geändert werden. Es wird dringend davon abgeraten, das Standardkennwort zu behalten. Als minimale Sicherheitsmaßnahme müssen Sie das Kennwort unbedingt ändern.';
$string['pijuicebatterychargelevel'] = 'PiJuice Ladezustand';
$string['pijuicebatterystatus'] = 'PiJuice Batteriestatus';
$string['pijuicebatterytemp'] = 'PiJuice Batterietemperatur';
$string['pijuiceinfo'] = 'PiJuice Statusinfo';
$string['pijuiceisfault'] = 'PiJuice Fehler';
$string['pijuicestatuserror'] = 'PiJuice Status';
$string['pluginname'] = 'MoodleBox';
$string['pluginversion'] = 'MoodleBox-Plugin-Version';
$string['privacy:metadata'] = 'Das Moodlebox-Plugin zeigt Infos zum Raspberry Pi und ermöglicht Änderungen in der Konfiguration. Das Plugin verarbeitet oder speichert keine personenbezogenen Daten.';
$string['projectinfo'] = '<p>Das <a href="https://moodlebox.net/de/" title="MoodleBox-Website" target="_blank"> MoodleBox-Projekt </a> ist ein freiwilliges und nichtkommerzielles Open Source-Projekt, das von <a href="https://blog.martignoni.net/a-propos/" title="Nicolas Martignoni" target="_blank"> Nicolas Martignoni </a> in seiner Freizeit entwickelt. </p> <p> Wir danken Ihnen, dass Sie die MoodleBox verwenden. Sie können Ihre Anerkennung zeigen und dieses Projekt unterstützen, indem Sie <a href="https://moodlebox.net/de/projekt-moodlebox-unterstuetzen/" title="MoodleBox-Projekt unterstützen" target="_blank"> eine Spende machen </a> ❤. Ihre Spende hilft bei der Finanzierung der Ausrüstung, die zur Entwicklung der MoodleBox und zum Hosten der Dokumentation benötigt wird.</p>';
$string['raspberryhardware'] = 'Hardware';
$string['raspbianversion'] = 'Betriebssystem';
$string['resizepartition'] = 'Partitionsgröße der SD-Karte ändern';
$string['resizepartition_help'] = 'Verwenden Sie diese Taste, um die Partitionsgröße der SD-Karte zu vergrößern.';
$string['resizepartitionmessage'] = 'Die Partitionsgröße der SD-Karte wurde auf den maximalen Speicherplatz erweitert. Die MoodleBox startet neu. Das System ist nach einer kurzen Unterbrechung wieder online.';
$string['resizepartitionsetting'] = 'Partitionsgröße der SD-Karte wird geändert';
$string['restart'] = ' MoodleBox neustarten ';
$string['restartmessage'] = 'Die MoodleBox startet neu. Das System ist nach einer kurzen Unterbrechung wieder online.';
$string['restartstop'] = 'Neustarten und Ausschalten';
$string['restartstop_help'] = 'Verwenden Sie diese Tasten zum Neustarten oder Ausschalten der MoodleBox. Es wird dringend empfohlen, die MoodleBox softwaremäßig auszuschalten und erst dann die Stromversorgung zu trennen.';
$string['rpi1'] = 'Raspberry Pi 1';
$string['rpi2'] = 'Raspberry Pi 2B';
$string['rpi3'] = 'Raspberry Pi 3B';
$string['rpi3aplus'] = 'Raspberry Pi 3A+';
$string['rpi3b'] = 'Raspberry Pi 3B';
$string['rpi3bplus'] = 'Raspberry Pi 3B+';
$string['rpi4eightgb'] = 'Raspberry Pi 4B (8 GB RAM)';
$string['rpi4fourgb'] = 'Raspberry Pi 4B (4 GB RAM)';
$string['rpi4fourmb'] = 'Raspberry Pi 4B (4 GB RAM)';
$string['rpi4onegb'] = 'Raspberry Pi 4B (1 GB RAM)';
$string['rpi4onemb'] = 'Raspberry Pi 4B (1 GB RAM)';
$string['rpi4twogb'] = 'Raspberry Pi 4B (2 GB RAM)';
$string['rpi4twomb'] = 'Raspberry Pi 4B (2 GB RAM)';
$string['rpiosversion'] = 'Raspberry Pi OS';
$string['rpizerow'] = 'Raspberry Pi Zero W';
$string['sdcardavailablespace'] = 'Freier Speicher';
$string['showbuttonsinfooter'] = 'Tasten im Fußbereich anzeigen';
$string['showbuttonsinfooter_desc'] = 'Diese Option legt fest, dass die Tasten zum Neustarten und Ausschalten im Fußbereich aller Seiten angezeigt werden, wenn Sie als Administrator oder Manager angemeldet sind.';
$string['shutdown'] = 'MoodleBox ausschalten';
$string['shutdownmessage'] = 'Die MoodleBox wird ausgeschaltet. Warten Sie einige Sekunden, bevor Sie die Stromversorgung trennen.';
$string['softwareversions'] = 'Softwareversionen';
$string['systeminfo'] = 'Systeminformation';
$string['undervoltagedetected'] = '<p><b>Achtung: Die Spannung ist zu niedrig!</b> Die Stromversorgung der MoodleBox ist unzureichend. Dies kann  verschiedene Probleme verursachen, z.B. eine verminderte Anzahl von WLAN-Clients oder ein unerwartetes Herunterfahren der MoodleBox.</p><p>Es wird dringend empfohlen, die Stromversorgung zu ändern</b>, wobei Sie das offizielle <a href= "https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" target=" _ blank"> Netzteil der Raspberry Foundation </a> bevorzugen sollten.</p>';
$string['undervoltageoccurred'] = '<p>Seit dem letzten Start der MoodleBox gab es mindestens eine Situation, bei der die Spannung zu niedrig war. Dies könnte darauf hinweisen, dass die Stromversorgung der MoodleBox unzureichend ist. und verschiedene Probleme verursachen, z.B. eine verminderte Anzahl von WLAN-Clients oder ein unerwartetes Herunterfahren der MoodleBox.</p><p>Es wird dringend empfohlen, die Stromversorgung zu ändern</b>, wobei Sie das offizielle <a href= "https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" target=" _ blank"> Netzteil der Raspberry Foundation </a> bevorzugen sollten.</p>';
$string['unknownmodel'] = 'Unbekannte Hardware';
$string['unsupportedhardware'] = 'Die Hardware wird scheinbar nicht unterstützt! Dieses Plugin arbeitet nur mit einem Raspberry Pi.';
$string['uptime'] = 'Betriebsdauer';
$string['version'] = 'MoodleBox-Version';
$string['visible'] = 'Sichtbar';
$string['wifichannel'] = 'WLAN-Kanal';
$string['wifichannel_help'] = 'Normalerweise kann der WLAN-Kanal unverändert bleiben, außer wenn mehrere WLAN-Sender sich überlagern und gegenseitig stören.';
$string['wificountry'] = 'WLAN-Regulierungsland';
$string['wificountry_help'] = 'Aus rechtlichen Gründen sollten Sie hier den tatsächlichen Aufenthaltsort als WLAN-Regulierungsland eintragen.';
$string['wifipassword'] = 'WLAN-Kennwort';
$string['wifipassworderror'] = 'Das WLAN-Kennwort muss zwischen 8 und 63 Zeichen lang sein.';
$string['wifipassword_help'] = 'Wenn Sie das WLAN der MoodleBox mit einem Kennwort schützen möchten, sollten Sie das standardmäßige Kennwort ändern. Das Kennwort muss zwischen 8 und 63 druckbare ASCII-Zeichen haben. Das Kennwort darf Groß- und Kleinbuchstaben, Ziffern, Satzzeichen und auch Symbole enthalten.';
$string['wifipasswordinvalid'] = 'Das WLAN-Kennwort ist ungültig. Das Kennwort muss zwischen 8 und 63 druckbare ASCII-Zeichen haben. Das Kennwort darf Groß- und Kleinbuchstaben, Ziffern, Satzzeichen und auch Symbole enthalten.';
$string['wifipasswordmessage'] = 'Das WLAN-Kennwort wurde geändert. Denken Sie daran, allen beteiligten Personen die neuen Zugangsdaten mitzuteilen.';
$string['wifipasswordon'] = 'WLAN-Schutz';
$string['wifipasswordonhelp'] = 'Wenn diese Option aktiviert ist, muss ein WLAN-Kennwort eingegeben werden.';
$string['wifipasswordon_help'] = 'Wenn diese Option aktiviert ist, muss ein WLAN-Kennwort eingegeben werden.';
$string['wifipasswordsetting'] = 'WLAN-Kennwort ändern';
$string['wifisettings'] = 'WLAN-Einstellungen';
$string['wifisettingserror'] = 'Die WLAN-Einstellungen wurden nicht geändert, weil mindestens eine Einstellung ungültig ist.';
$string['wifisettingsmessage'] = 'Die WLAN-Einstellungen wurden geändert. Denken Sie daran, allen beteiligten Personen die neuen Zugangsdaten mitzuteilen.';
$string['wifissid'] = 'WLAN-Name (SSID)';
$string['wifissid_help'] = 'Der WLAN-Name (SSID) für die MoodleBox kann zwischen 1 und 32 Bytes lang sein. Beachten Sie, dass manche Zeichen (z.B. Emoticons) mehr als nur 1 Byte verwenden.';
$string['wifissidhidden'] = 'Verborgenes WLAN';
$string['wifissidhiddenstate'] = 'WLAN-Sichtbarkeit';
$string['wifissidhiddenstate_help'] = 'Wenn diese Option aktiviert ist, wird der WLAN-Name (SSID) verborgen. Niemand kann dann sehen, ob eine MoodleBox vorhanden ist. Dies erhöht einerseits die Sicherheit der MoodleBox, reduziert aber andererseits deren Usability.';
$string['wifissidinvalid'] = 'Der angegebene WLAN-Name (SSID) ist ungültig. Der Name kann zwischen 1 und 32 Bytes lang sein. Beachten Sie, dass manche Zeichen (z.B. Emoticons) mehr als nur 1 Byte verwenden.';
