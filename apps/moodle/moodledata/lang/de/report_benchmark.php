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
 * Strings for component 'report_benchmark', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'System Benchmark';
$string['benchfail'] = '<b>Achtung!</b><br />Ihre Moodle-Performance ist nicht optimal.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Benchmark-Report anzeigen';
$string['benchshare'] = 'Meine Ergebnisse im Forum teilen';
$string['benchsuccess'] = '<b>Herzlichen Glückwunsch!</b><br />Ihre Moodle-Performance scheint perfekt zu sein.';
$string['cloadmoreinfo'] = 'Konfigurationsdatei "config.php" laden';
$string['cloadname'] = 'Ladezeit von Moodle';
$string['coursereadmoreinfo'] = 'Einen Kurs mehrmals lesen, um die Lesegeschwindigkeit der Datenbank zu überprüfen';
$string['coursereadname'] = 'Leseperformance eines Kurses';
$string['coursewritemoreinfo'] = 'Einen Kurs mehrmals schreiben, um die Lesegeschwindigkeit der Datenbank zu überprüfen';
$string['coursewritename'] = 'Schreibperformance eines Kurses';
$string['description'] = 'Beschreibung';
$string['duration'] = '{$a} s';
$string['during'] = 'Zeit (Sekunden)';
$string['filereadmoreinfo'] = 'Eine Datei mehrmals lesen, um die Lesegeschwindigkeit des temporären Moodle-Verzeichnisses zu überprüfen';
$string['filereadname'] = 'Leseperformance von Dateien';
$string['filewritemoreinfo'] = 'Eine Datei mehrmals schreiben, um die Schreibegeschwindigkeit des temporären Moodle-Verzeichnisses zu überprüfen';
$string['filewritename'] = 'Schreibperformance von Dateien';
$string['info'] = 'Dieser Benchmark sollte weniger als 1 Minute dauern und wird nach 2 Minuten automatisch abgebrochen. Warten Sie, bis die Ergebnisse angezeigt werden.';
$string['infoaverage'] = 'Es wird empfohlen, diesen Test mehrmals durchzuführen, um einen signifikanten Durchschnitt zu erhalten.';
$string['infodisclaimer'] = 'Es wird nicht empfohlen, diesen Benchmark auf einer produktiven Plattform zu starten.';
$string['infodisclamer'] = 'Es wird nicht empfohlen, diesen Benchmark auf einer produktiven Plattform zu starten.';
$string['limit'] = 'Akzeptables Limit';
$string['loginguestmoreinfo'] = 'Überprüfen Sie die Ladezeit der Anmeldeseite des Gastkontos';
$string['loginguestname'] = 'Performance der Anmeldezeit für das Gastkonto';
$string['loginusermoreinfo'] = 'Überprüfen Sie die Ladezeit der Anmeldeseite eines fiktiven Nutzerkontos';
$string['loginusername'] = 'Performance der Anmeldezeit für ein fiktives Nutzerkonto';
$string['modulename'] = 'Moodle Benchmark';
$string['modulenameplural'] = 'Moodle Benchmarks';
$string['over'] = 'Kritisches Limit';
$string['pluginname'] = 'Moodle Benchmark';
$string['points'] = '{$a} Punkte';
$string['privacy:no_data_reason'] = 'Das Plugin "Moodle Benchmark" speichert keine Daten. Es greift nur auf Daten anderer Plugins zu.';
$string['processormoreinfo'] = 'Eine PHP-Funktion mit einer Schleife aufrufen, um die Prozessorgeschwindigkeit zu überprüfen';
$string['processorname'] = 'Verarbeitungsgeschwindigkeit des Prozessors';
$string['querytype1moreinfo'] = 'Eine komplexe SQL-Abfrage ausführen, um die Geschwindigkeit der Datenbank zu überprüfen';
$string['querytype1name'] = 'Datenbank-Performance (#1)';
$string['querytype2moreinfo'] = 'Eine komplexe SQL-Abfrage ausführen, um die Geschwindigkeit der Datenbank zu überprüfen';
$string['querytype2name'] = 'Datenbank-Performance (#2)';
$string['redo'] = 'Den Benchmark erneut starten';
$string['score'] = 'Score';
$string['scoremsg'] = 'Benchmark Score:';
$string['seconde'] = '{$a} s';
$string['slowdatabaselabel'] = 'Die Datenbank scheint zu langsam zu sein.';
$string['slowdatabasesolution'] = '<ul><li>Überprüfen Sie <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">die Datenbankintegrität</a>.</li><li>Optimieren Sie <a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">die Datenbank</a>.</li></ul>';
$string['slowharddrivelabel'] = 'Die Festplatte scheint zu langsam zu sein.';
$string['slowharddrivesolution'] = '<ul><li>Überprüfen Sie den Status der Festplatte und/oder des temporären Ordners.</li><li>Ändern Sie die Festplatte und/oder den temporären Ordner.</ li></ul>';
$string['slowprocessorlabel'] = 'Der Prozessor scheint zu langsam zu sein.';
$string['slowprocessorsolution'] = '<ul><li>Überprüfen Sie, ob Ihre Hardwarekonfiguration hoch genug ist, um Moodle auszuführen.</li></ul>';
$string['slowserverlabel'] = 'Der Webserver scheint zu langsam zu sein.';
$string['slowserversolution'] = '<ul><li>Setzen Sie Ihren Apache in den <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">Multiprocessing</a> Modus oder wechseln Sie zu <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Wenn Ihr Moodle auf Ihrem Computer installiert ist, konfigurieren Sie Ihr Antivirus sorgfältig so, dass es die Installation von Moodle nicht überprüft.</li></ul>';
$string['slowweblabel'] = 'Die Anmeldeseite wird zu langsam geladen.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank">Den Moodle cache leeren</a>.</li></ul>';
$string['start'] = 'Benchmark starten';
$string['total'] = 'Gesamtzeit';
