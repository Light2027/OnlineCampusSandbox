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
 * Strings for component 'subcourse', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   subcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = 'In einem neuen Fenster öffnen';
$string['blankwindow_help'] = 'Falls diese Option aktiviert ist, wird der verlinkte Kurs in einem neuen Browserfenster geöffnet.';
$string['completioncourse'] = 'Kurs muss abgeschlossen sein';
$string['completioncourse_help'] = 'Falls diese Option aktiviert ist, wird die Aktivität als abgeschlossen markiert, wenn eine Person den angegebenen Kurs abgeschlossen hat.';
$string['completioncourse_text'] = 'Teilnehmer/in muss den angegebenen Kurs abschließen, um diese Aktivität abzuschließen.';
$string['currentgrade'] = 'Ihre aktuelle Bewertung: {$a}';
$string['currentprogress'] = 'Fortschritt: {$a}%';
$string['errfetch'] = 'Bewertungen können nicht eingeholt werden: Error-Code {$a}';
$string['errlocalremotescale'] = 'Bewertungen können nicht eingeholt werden: die kursfremde Endnote verwendet eine lokale Skala.';
$string['eventgradesfetched'] = 'Bewertungen eingeholt';
$string['fetchgradesmode'] = 'Bewertungen übernehmen als';
$string['fetchgradesmode0'] = 'Originalwerte';
$string['fetchgradesmode1'] = 'Prozentwerte';
$string['fetchnow'] = 'Bewertungen jetzt einholen';
$string['gotocoursename'] = 'Zum Kurs <a href="{$a->href}">{$a->name}</a>';
$string['gotorefcourse'] = 'Gehe zu {$a}';
$string['gotorefcoursegrader'] = 'Alle Bewertungen in {$a}';
$string['gotorefcoursemygrades'] = 'Meine Bewertungen in {$a}';
$string['gradesfetching'] = 'Bewertungsformat zur Übernahme';
$string['hiddencourse'] = '*verborgen*';
$string['instantredirect'] = 'Zum angegebenen Kurs weiterleiten';
$string['instantredirect_help'] = 'Falls diese Option aktiviert ist, werden Nutzer zum angegebenen Kurs weitergeleitet, wenn sie versuchen, die Unterkurs-Modul-Seite zu öffnen. Dies trifft nicht auf Nutzer zu, die berechtigt sind, Bewertungen manuell einzuholen.';
$string['lastfetchnever'] = 'Die Bewertungen wurden bis dato nicht eingeholt';
$string['lastfetchtime'] = 'Zuletzt bezogen: {$a}';
$string['linkcontrol'] = 'Linkeinstellung für Unterkurs';
$string['modulename'] = 'Unterkurs';
$string['modulename_help'] = 'Dieses Modul fügt Ihrem Kurs eine einfache, wenngleich nützliche Funktionalität hinzu: Es verhält sich wie eine bewertete Aktivität, wobei die Bewertung sich aus den abschließenden Bewertungen der Teilnehmer aus einem anderen Kurs ergibt. In Kombination mit Meta-Kursen erlaubt dieses Modul Kursdesignern, Kurse in getrennte Module zu unterteilen.';
$string['modulenameplural'] = 'Unterkurse';
$string['nocoursesavailable'] = 'Es gibt keine Kurse, aus denen Sie Bewertungen beziehen können';
$string['nosubcourses'] = 'In diesem Kurs gibt es keine Unterkurse.';
$string['pluginadministration'] = 'Unterkurs-Administration';
$string['pluginname'] = 'Unterkurs';
$string['privacy:metadata'] = 'Der Unterkurs speichert keine personenbezogenen Daten';
$string['refcourse'] = 'Angegebener Kurs';
$string['refcoursecurrent'] = 'Behalte aktuellen Kurs bei';
$string['refcourse_help'] = 'Die Bewertung der Aktivität wird aus der Bewertung des angegebenen Kurses ermittelt. Die Teilnehmer sollten daher in dem angegebenen Kurs eingeschrieben sein.

Sie müssen für den fraglichen Kurs die Trainer-Rolle innehaben, damit dieser hier aufgelistet wird. Sie können jedoch auch den Webseiten-Adminstrator bitten, diesen Unterkurs anzulegen, um die Bewertungen eines fremden Kurses einzubinden.';
$string['refcourselabel'] = 'Hole Bewertungen von';
$string['refcoursenull'] = 'Kein Kurs angegeben';
$string['subcourse:addinstance'] = 'Einen weiteren Unterkurs anlegen';
$string['subcourse:begraded'] = 'Bewertungen aus dem angegebenen Kurses empfangen';
$string['subcourse:fetchgrades'] = 'Bewertungen manuell aus dem angegebenen Kurs einholen';
$string['subcoursename'] = 'Name des Unterkurses';
$string['taskcheckcompletedrefcourses'] = 'Abschluss von angegebenen Kursen prüfen';
$string['taskfetchgrades'] = 'Bewertungen des Unterkurses einholen';
