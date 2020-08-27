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
 * Strings for component 'tool_opencast', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_opencast
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apipassword'] = 'Kennwort für API Nutzerkonto';
$string['apipassworddesc'] = 'Kennwort für den Super-Nutzer einrichten, der die API-Aufrufe macht';
$string['apipasswordempty'] = 'Das Kennwort für den API-Nutzer ist nicht korrekt angelegt. Gehen Sie zu \'Einstellungen\' von Tool Opencast, um es zu korrigieren.';
$string['apiurl'] = 'Opencast API URL';
$string['apiurldesc'] = 'Basis-URL für das Opencast-System einrichten, z.B.:
opencast.example.com';
$string['apiurlempty'] = 'URL für Opencast-API ist nicht korrekt angelegt. Gehen Sie zu \'Einstellungen\' von Tool Opencast, um dies zu korrigieren.';
$string['apiusername'] = 'Nutzerkonto für API Aufrufe';
$string['apiusernamedesc'] = 'Für alle API-Aufrufe nutzt Moodle diesen Nutzer. Autorisierung erfolgt über das Hinzufügen geeigneter Rollen zum Aufruf.';
$string['apiusernameempty'] = 'Der Nutzername für den Opencast-API-Nutzer ist nicht korrekt angelegt. Gehen Sie zu \'Einstellungen\' von Tool Opencast, um dies zu korrigieren.';
$string['connecttimeout'] = 'Timeout der Verbindung';
$string['connecttimeoutdesc'] = 'Zeit bis zum Timeout in Sekunden, während Moodle versucht, eine Verbindung zu Opencast herzustellen';
$string['needphp55orhigher'] = 'Mindestens PHP 5.5 ist notwendig.';
$string['opencast:externalapi'] = 'Zugang zu Tool-Opencast-Webservices';
$string['opencast:instructor'] = 'Gibt die Rolle eines Instructors in Opencast';
$string['opencast:learner'] = 'Gibt die Rolle eines Lernenden in Opencast';
$string['pluginname'] = 'Opencast API';
$string['privacy:metadata'] = 'Nur das Admin-Tool bietet API-Endpunkte und allgemeine Einstellungen für das Opencast-Plugin.
Es speichert, welche Opencast-Serie zu welchem Kurs gehört, aber es speichert keine personenbezogenen Daten.';
$string['serverconnectionerror'] = 'Es gab ein Problem mit der Verbindung zum Opencast-Server. Bitte kontrollieren Sie Ihre Referenzen und die Netzwerk-Einstellungen.';
$string['wrongmimetypedetected'] = 'Ein falscher MIME-Type wurde während des Uploads von {$a->filename} aus Kurs {$a->coursename} entdeckt.
Sie können nur Video-Dateien hochladen!';
