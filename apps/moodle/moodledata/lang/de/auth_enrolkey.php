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
 * Strings for component 'auth_enrolkey', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_enrolkey
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noemail'] = 'Der Versuch, Ihnen eine E-Mail zu schicken, ist leider fehlgeschlagen!';
$string['pluginname'] = 'Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata'] = 'Das Plugin "Selbstregistrierung mit Einschreibeschlüssel" speichert keine personenbezogenen Daten.';
$string['recaptcha'] = 'Fügt der Anmeldeseite für die Selbstregistrierung ein visuelles/audiographisches Bestätigungsfeld hinzu. Dies schützt Ihre Website vor Spammern und trägt zu einer sinnvollen Sache bei. Weitere Infos: <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a>.';
$string['recaptcha_key'] = 'reCAPTCHA-Element aktivieren';
$string['settings_content'] = '<p>Die "Selbstregistrierung mit Einschreibeschlüssel" ermöglicht es Nutzer/innen, über die Schaltfläche \'Neues Konto erstellen\' auf der Anmeldeseite ein eigenes Konto zu erstellen. Es wird eine E-Mail mit einem sicheren Link zu einer Seite verschickt, auf der das Konto bestätigt werden muss. Bei allen zukünftigen Anmeldungen werden Anmeldename und Kennwort mit den gespeicherten Werten in der Moodle-Datenbank abgeglichen.</p><p>Wenn bei der Selbstregistrierung ein Einschreibeschlüssel in das entsprechende Feld eingegeben wird, werden neue Nutzer/innen automatisch für den passenden Kurs eingeschrieben. Der Einschreibeschlüssel wird aktiviert in "Kurs-Administration > Nutzer/innen > Einschreibemethoden > Methode hinzufügen > Selbsteinschreibung".</p><p>Hinweis: Zusätzlich zur Aktivierung des Plugins muss die "Selbstregistrierung mit Einschreibeschlüssel" auch aus dem Dropdown-Menü für die Selbstregistrierung unter "Website-Administration > Plugins > Authentifizierung > Übersicht" ausgewählt werden.</p>';
$string['settings_email_description'] = 'Bevor Nutzer/innen auf ihren eingeschriebenen Kurs zugreifen können, müssen sie ihr Konto mit einer E-Mail bestätigen.';
$string['settings_email_title'] = 'E-Mail-Bestätigung erforderlich';
$string['settings_heading'] = 'Allgemeine Einstellungen';
$string['settings_required_description'] = 'Der Einschreibeschlüssel ist ein Pflichtfeld für die Validierung.';
$string['settings_required_title'] = 'Der Einschreibeschlüssel ist für die Validierung erforderlich.';
$string['settings_visible_description'] = 'Fügt der Anmeldeseite für Benutzer mit Selbstregistrierung ein neues Formularelement hinzu. Dieses wird mit verfügbaren Einschreibeschlüsseln abgeglichen und meldet den Benutzer für die entsprechenden Kurse an.';
$string['settings_visible_title'] = 'Einschreibeschlüssel aktivieren';
$string['signup_auth_instructions'] = 'Hallo! Um vollen Zugang zu den Kursen zu erhalten, müssen Sie sich eine Minute Zeit nehmen, um ein neues Konto für sich auf dieser Website anzulegen.
Jeder der einzelnen Kurse kann auch über einen einmaligen
"Einschreibeschlüssel" verfügen, den Sie während dieser Anmeldung verwenden können:
<ol>
<li>Füllen Sie das Formular <a href="{$a}">Neues Nutzerkonto</a> mit Ihren Angaben aus.</li>
<li>Sie werden aufgefordert, einen "Einschreibeschlüssel" einzugeben - benutzen Sie den, den Ihnen Ihr Trainer gegeben hat. Dieser wird Sie für den Kurs "einschreiben".</li>
<li>Ihr Konto wird erstellt und Sie werden eingeloggt.</li>
<li>Sie haben jetzt Zugriff auf den gesamten Kurs.</li>
<li>Es wurde auch sofort eine E-Mail an Ihre E-Mail-Adresse geschickt.</li>
<li>Lesen Sie Ihre E-Mail, und klicken Sie auf den darin enthaltenen Link.</li>
<li>Von nun an brauchen Sie nur noch Ihren persönlichen
Anmeldenamen und Kennwort (im Formular auf dieser Seite) zum Einloggen und haben Zugang zu allen Kursen, für die Sie sich angemeldet haben.</li>
</ol>';
$string['signup_failure'] = 'Opps! Da ist ein Fehler aufgetreten. Möglicherweise sind Sie nicht richtig eingeschrieben worden. Gehen Sie zur <a href="{$a->href}">Startseite</a>';
$string['signup_field_title'] = 'Einschreibeschlüssel';
$string['signup_missing'] = 'Einschreibeschlüssel fehlt';
$string['signup_token_invalid'] = 'Der eingegebene Einschreibeschlüssel ist ungültig';
$string['signup_view'] = 'Kurseinschreibung';
$string['signup_view_message_basic'] = 'Sie haben sich als {$a->role} in den Kurs \'<a href="{$a->href}">{$a->course}</a> eingeschrieben\\';
$string['signup_view_message_basic_dates'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursbeginn: {$a->startdate}<br />Kursende: {$a->enddate}';
$string['signup_view_message_basic_dates_endonly'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursende: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursbeginn: {$a->startdate}';
