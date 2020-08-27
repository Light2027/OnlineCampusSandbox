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
 * Strings for component 'etherpadlite', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   etherpadlite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminguests'] = 'Schreibzugriff für Gäste erlauben?';
$string['adminguestsdesc'] = 'Diese Option legt fest, dass berechtigte Nutzer/innen in dieser Aktivität für Gäste einen Schreibzugriff erteilen können.';
$string['apikey'] = 'API Schlüssel';
$string['apikeydesc'] = 'Der API Schlüssel wird vom Plugin benötigt, um sich mit Ihrem Etherpad Lite Server zu verbinden. Der API Schlüssel ist auf Ihrem Etherpad Lite Server gespeichert und kann von dort bezogen werden.';
$string['checkssl'] = 'HTTPS Zertifikat verifizieren';
$string['checkssldesc'] = 'Diese Option legt fest, dass das HTTPS Zertifikat des Etherpad Lite Servers beim Verbindungsaufbau verifiziert wird, um Man-In-The-Middle Angriffe zu unterbinden.';
$string['cookiedomain'] = 'Cookie Domain';
$string['cookiedomaindesc'] = 'Hier können Sie die Domain eingeben, welche im Session Cookie hinterlegt werden soll, damit der Etherpad Lite Server das Cookie erkennt. Wenn Moodle unter der Domain moodle.example.com und Ihr Etherpad Lite Server unter etherpadlite.example.com läuft, sollte Ihre Cookie Domain auf .example.com lauten.';
$string['cookietime'] = 'Session Gültigkeit';
$string['cookietimedesc'] = 'Geben Sie hier die Zeit (in Sekunden) ein, bis zu der die Etherpad Lite Session gültig sein soll-';
$string['etherpadlite'] = 'Etherpad Lite';
$string['etherpadlite:addinstance'] = 'Etherpad hinzufügen';
$string['etherpadliteintro'] = 'Beschreibung des Etherpads';
$string['etherpadlitename'] = 'Name des Etherpads';
$string['guestsallowed'] = 'Schreibzugriff für Gäste erlauben?';
$string['guestsallowed_help'] = 'Diese Option legt fest, dass Gäste im Etherpad schreiben dürfen. Wenn nicht, dürfen Gäste den Inhalt des Etherpads nur lesen.';
$string['modulename'] = 'Etherpad Lite';
$string['modulename_help'] = 'Mit der Aktivität \'Etherpad Lite\' können mehrere Personen kollaborativ an einem Text arbeiten. Der Text wird automatisch synchronisiert, während geschrieben wird.

Der Etherpad Lite Server, der hinter dieser Aktivität steht, ist noch im Beta-Stadium. Probleme könnten auftreten, werden aber nicht erwartet.';
$string['modulenameplural'] = 'Etherpads Lite';
$string['padname'] = 'Name für alle Etherpads';
$string['padnamedesc'] = 'Ein allgemeingültiger Pad-Name kann nützlich sein, um alle Pads dieser Moodle Installation auf Ihrem Etherpad Lite Server wiederzuerkennen. Pad-Gruppen werden dabei automatisch angelegt.';
$string['pluginadministration'] = 'Etherpad Lite Administration';
$string['pluginname'] = 'Etherpad Lite';
$string['ssl'] = 'HTTPS Weiterleitung';
$string['ssldesc'] = 'Diese Option legt fest, dass Nutzer/innen automatisch zu HTTPS weitergeleitet, wenn ein Etherpad geöffnet wird.';
$string['summaryguest'] = 'Sie sind als Gast eingeloggt, weshalb Sie nur eine Leseansicht dieses Etherpads sehen. Laden Sie die Seite neu, um Änderungen anzuzeigen.';
$string['url'] = 'Server URL';
$string['urldesc'] = 'Dies ist die URL Ihres Etherpad Lite Servers in der Form:
http[s]://Host[:Port]/[UnterVerzeichnis/]';
