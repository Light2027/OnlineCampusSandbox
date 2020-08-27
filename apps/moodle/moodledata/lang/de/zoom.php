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
 * Strings for component 'zoom', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['addtocalendar'] = 'Zum Kalender hinzufügen';
$string['allmeetings'] = 'Alle Meetings';
$string['alternative_hosts'] = 'Alternative Veranstalter/innen';
$string['alternative_hosts_help'] = 'Diese Option erlaubt es Ihnen, Meetings zu terminieren und andere Nutzer/innen mit Pro-Lizenz desselben Accounts (z.B. gleiche Hochschule) das Meeting oder Webinar zu starten, falls Sie nicht in der Lage dazu sind. Die jeweilige Person erhält eine E-Mail, die sie darüber informiert, dass sie als alternative/r Veranstalter/in hinzugefügt wurde, mit einem Link zum Starten des Meetings.
Trennen Sie mehrere E-Mail-Adressen durch Komma (ohne Leerzeichen).';
$string['apikey'] = 'Zoom API Schlüssel';
$string['apisecret'] = 'Zoom API Geheimnis';
$string['apiurl'] = 'Zoom API URL';
$string['audio_both'] = 'VoIP und Telefon';
$string['audio_telephony'] = 'Nur Telefon';
$string['audio_voip'] = 'Nur VoIP';
$string['cachedef_sessions'] = 'Informationen aus Zoom erhalten, Nutzerbericht anfordern';
$string['cachedef_zoomid'] = 'Zoom-ID des Benutzers';
$string['calendardescriptionintro'] = '\\nBeschreibung:\\n{\\$a}';
$string['calendardescriptionURL'] = 'Meeting-URL: {$a}.';
$string['calendariconalt'] = 'Kalender-Symbol';
$string['clickjoin'] = 'Klicken Sie auf die Taste "Meeting beitreten"';
$string['connectionfailed'] = 'Verbindung fehlgeschlagen:';
$string['connectionok'] = 'Verbindung funktioniert';
$string['connectionstatus'] = 'Verbindungsstatus';
$string['defaultsettings'] = 'Zoom-Standardeinstellungen';
$string['defaultsettings_help'] = 'Diese Einstellungen definieren den Standard für alle neuen Zoom Meetings und Webinare.';
$string['downloadical'] = 'Download iCal';
$string['duration'] = 'Dauer';
$string['endtime'] = 'Beendigungszeit';
$string['err_duration_nonpositive'] = 'Die Dauer muss einen positiven Wert haben.';
$string['err_duration_too_long'] = 'Die Dauer darf 150 Stunden nicht überschreiten.';
$string['err_long_timeframe'] = 'Der abgefragte Zeitrahmen ist zu groß, angezeigt werden die Resultate des letzten Monats.';
$string['errorwebservice'] = 'Zoom-Webservice-Fehler: {$a}.';
$string['err_password'] = 'Das Kennwort darf nur folgende Zeichen enthalten:  [a-z A-Z 0-9 @ - _ *]. Maximal 10 Zeichen.';
$string['err_start_time_past'] = 'Der Startzeitpunkt darf nicht in der Vergangenheit liegen.';
$string['export'] = 'Export';
$string['firstjoin'] = 'Beitritt zu einem Meeting möglich ab';
$string['firstjoin_desc'] = 'Der früheste Zeitpunkt, zu dem ein Benutzer einem anberaumten Meeting beitreten kann (Minuten vor dem Beginn).';
$string['getmeetingreports'] = 'Meeting Report von Zoom anfordern';
$string['invalid_status'] = 'Ungültiger Status, Datenbank prüfen!';
$string['join'] = 'Beitreten';
$string['joinbeforehost'] = 'Dem Meeting vor Veranstalter/in beitreten';
$string['join_meeting'] = 'Dem Meeting beitreten';
$string['jointime'] = 'Login-Beginn';
$string['leavetime'] = 'Login-Ende';
$string['licensesnumber'] = 'Anzahl der Lizenzen';
$string['lowlicenses'] = 'Wenn die Anzahl Ihrer Lizenzen die erforderliche Anzahl übersteigt, wird bei der Erstellung jeder neuen Aktivität durch den Nutzer eine PRO-Lizenz zugewiesen, indem der Status eines anderen Nutzers herabgesetzt wird. Diese Option ist wirksam, wenn die Anzahl der aktiven PRO-Lizenzen mehr als 5 beträgt.';
$string['meeting_finished'] = 'Fertiggestellt';
$string['meeting_nonexistent_on_zoom'] = 'Das Meeting ist nicht auf Zoom verfügbar';
$string['meeting_not_started'] = 'Das Meeting hat noch nicht begonnen';
$string['meetingoptions'] = 'Meeting Optionen';
$string['meetingoptions_help'] = '*vor Veranstalter/in beitreten* erlaubt Teilnehmer/innen, dem Meeting vor dem/der Veranstalter/in beizutreten auch dann, wenn der/die Veranstalter/in am Meeting nicht teilnehmen kann.';
$string['meeting_started'] = 'In Arbeit';
$string['meeting_time'] = 'Beginnzeit';
$string['modulename'] = 'Zoom Meeting';
$string['modulename_help'] = 'Zoom ist eine Video- und Web-Plattform, die authorisierten Benutzern ermöglicht, online Meetings anzubieten.';
$string['modulenameplural'] = 'Zoom Meetings';
$string['newmeetings'] = 'Neue Meetings';
$string['nomeetinginstances'] = 'Es wurden keine Sitzungen zu diesem Meeting gefunden.';
$string['noparticipants'] = 'Zur Zeit sind noch keine Teilnehmer vorhanden.';
$string['nosessions'] = 'Keine Sitzungen im gewählten Zeitrahmen vorhanden';
$string['nozooms'] = 'Keine Meetings';
$string['off'] = 'Aus';
$string['oldmeetings'] = 'Beendete Meetings';
$string['on'] = 'Ein';
$string['option_audio'] = 'Audio-Optionen';
$string['option_host_video'] = 'Video der/des Veranstalter/in von Beginn an freigeben';
$string['option_jbh'] = 'Beitritt vor Veranstalter/in ermöglichen';
$string['option_participants_video'] = 'Video der Teilnehmer/innen von Beginn an freigeben';
$string['participants'] = 'Teilnehmer/innen';
$string['password'] = 'Kennwort';
$string['passwordprotected'] = 'kennwortgeschützt';
$string['pluginadministration'] = 'Zoom Meeting verwalten';
$string['pluginname'] = 'Zoom Meeting';
$string['privacy:metadata:zoom_meeting_details'] = 'Die Datenbanktabelle, die Informationen über jede Meeting-Instanz speichert.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Der Name des Meetings, welches die Person besucht hat.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Die Datenbank-Tabelle, welche Informationen über die Teilnehmer/innen des Meetings speichert.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Die Zeit, wie lange die Person an dem Meeting teilgenommen hat.';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Die Zeit, zu der die Person dem Meeting beigetreten ist.';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Die Zeit, zu der die Person das Meeting verlassen hat.';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Name der Person';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'E-Mail-Adresse der Person';
$string['recurringmeeting'] = 'wiederkehrend';
$string['recurringmeeting_help'] = 'Kein Enddatum vorhanden';
$string['recurringmeetinglong'] = 'wiederkehrendes Meeting (Meeting ohne Enddatum oder Schlusszeitpunkt)';
$string['redefinelicenses'] = 'Lizenzen neu definieren';
$string['report'] = 'Berichte';
$string['reportapicalls'] = 'Meldung API-Aufrufe ausgeschöpft';
$string['requirepassword'] = 'Meeting Kennwort erforderlich';
$string['resetapicalls'] = 'Anzahl der verfügbaren API-Aufrufe zurücksetzen';
$string['search:activity'] = 'Zoom-AktivitätsInformationen';
$string['sessions'] = 'Sitzungen';
$string['start'] = 'Start';
$string['starthostjoins'] = 'Video starten, wenn der Veranstalter beitritt';
$string['start_meeting'] = 'Meeting starten';
$string['startpartjoins'] = 'Video starten, sobald Teilnehmer/in beitritt';
$string['starttime'] = 'Startzeit';
$string['start_time'] = 'Wann';
$string['status'] = 'Status';
$string['title'] = 'Titel';
$string['topic'] = 'Thema';
$string['unavailable'] = 'Zur Zeit kein Beitritt möglich';
$string['updatemeetings'] = 'Aktualisiere Meeting-Einstellungen von Zoom';
$string['usepersonalmeeting'] = 'Die persönliche Meeting ID nutzen {$a}';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Diese Sitzung wurde als Meeting, nicht als Webinar angelegt. Sie können diese Einstellung nicht ändern, nachdem das Meeting angelegt wurde.</b></p>';
$string['webinar_already_true'] = '<p><b>Diese Sitzung wurde als Webinar, nicht als Meeting angelegt. Sie können diese Einstellung nicht ändern, nachdem das Webinar angelegt wurde.</b></p>';
$string['webinar_help'] = 'Diese Option ist nur für vorautorisierte Zoom-Konten verfügbar.';
$string['zoom:addinstance'] = 'Ein neues Zoom-Meeting hinzufügen';
$string['zoomerr'] = 'Ein Fehler mit Zoom ist aufgetreten.';
$string['zoomerr_apikey_missing'] = 'Zoom API Schlüssel konnte nicht gefunden werden.';
$string['zoomerr_apisecret_missing'] = 'Zoom API Geheimnis konnte nicht gefunden werden.';
$string['zoomerr_id_missing'] = 'Sie müssen eine Kursmodul-ID oder eine Instanz-ID angeben';
$string['zoomerr_meetingnotfound'] = 'Das Meeting existiert nicht mehr oder ist abgelaufen.';
$string['zoomerr_meetingnotfound_info'] = 'Dieses Meeting konnte nicht auf Zoom gefunden werden. Bei Fragen wenden Sie sich bitte an den Veranstalter.';
$string['zoomerr_usernotfound'] = 'Ihr Konto konnte auf Zoom nicht gefunden werden. Wenn Sie Zoom zum ersten Mal verwenden, müssen Sie Ihr Konto aktivieren, indem Sie sich bei Zoom <a href="{$a}" target="_blank">{$a}</a> anmelden. Sobald Sie Ihr Zoom-Konto aktiviert haben, laden Sie diese Seite erneut und fahren Sie mit der Einrichtung Ihres Meetings fort. Andernfalls stellen Sie sicher, dass Ihre E-Mail-Adresse auf Zoom mit Ihrer E-Mail Adresse in diesem System übereinstimmt.';
$string['zoomurl'] = 'URL der Zoom-Homepage';
$string['zoom:view'] = 'Zoom-Meetings ansehen';
