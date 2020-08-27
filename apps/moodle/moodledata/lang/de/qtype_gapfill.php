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
 * Strings for component 'qtype_gapfill', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_gapfill
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Dem Bearbeitungsformular einen Hinweistext hinzufügen';
$string['addhinttext_text'] = 'Automatisch Hinweistext zu den ersten Hinweisfeldern hinzufügen';
$string['additemsettings'] = 'Lückeneinstellungen hinzufügen';
$string['answerdisplay'] = 'Antworten anzeigen';
$string['answerdisplay_help'] = '"Dragdrop" zeigt eine Liste von Wörtern an, die in die Lücken gezogen werden. "Gapfill" zeigt Lücken ohne vorgegebene Wortauswahl an, "Dropdown" zeigt die gleiche Liste mit korrekten (und möglicherweise unkorrekten) Anwortmöglichkeiten für jedes Feld an.';
$string['blank'] = 'leer';
$string['cannotimport'] = 'Import nicht möglich';
$string['casesensitive'] = 'Groß- und Kleinschreibung beachten';
$string['casesensitive_help'] = 'Groß- und Kleinschreibung wird beachtet, wenn diese Option aktiviert wird. D.h. wenn die korrekte Antwort "Ball" ist, dann wird "ball" als falsche Antwort gewertet.';
$string['correct'] = 'Feedback für richtige Antwort';
$string['correctanswer'] = 'Richtige Antwort';
$string['course'] = 'Hilfe Import';
$string['coursenotfound'] = 'Kurs nicht gefunden, überprüfen Sie den kurzen Kursnamen';
$string['courseshortname'] = 'Kurzer Kursname';
$string['courseshortname_help'] = 'Geben sie den kurzen Kursnamen ein, um die Frage zu Importieren. Dies führt einen Standard-xml-Fragenimport aus der Datei example_questions.xml in den Gapfill-Fragentyp-Ordner durch.';
$string['delimitchars'] = 'Abgrenzungszeichen';
$string['delimitchars_help'] = 'Ändert die Abgrenzungszeichen - Standard [ ]- , die ein Feld deklarieren. Sinnvoll bei Fragen, die sich inhaltlich mit Programmiersprachen auseinandersetzen.';
$string['delimitset_text'] = 'Setzt die Abgrenzungszeichen der Lücken fest, sodass man z.B. %%- Zeichen einsetzen könnte. z.B.: Die %Katze% sind auf der%Matte%';
$string['disableregex'] = 'Deaktiviere reguläre Ausdrücke';
$string['disableregex_help'] = 'Deaktiviert die reguläre Verarbeitung von Ausdrücken und lässt eine einfachen Zeichenvergleich zu. Dies kann sinnvoll sein, wenn HTML-Code in Fragen vorliegt und HTML Ausdrücke, wie z.B. (< and >) buchstäblich angezeigt werden soll. Des Weiteren sinnvoll bei mathematischen Kontext, wenn Symbole wie * buchstäblich angezeigt werden sollen, statt als als mathematische Formel ausgeführt werden soll.';
$string['disableregexset_text'] = 'Deaktiviert die reguläre Verarbeitung von Ausdrücken im Antworttext';
$string['displaydragdrop'] = 'dragdrop';
$string['displaydropdown'] = 'dropdown';
$string['displaygapfill'] = 'Erweiterter Lückentext';
$string['distractor1'] = 'blau, Schuh, klein';
$string['distractor2'] = 'blau, Schuh, klein';
$string['duplicatepartialcredit'] = 'Punkte sind anteilig, da Sie doppelte Antworten vorliegen haben.';
$string['editquestiontext'] = 'Fragentext bearbeiten';
$string['example1'] = 'Ziehen Sie die Verben in die Lücken. Er [lachte] und [setzte] sich hin.';
$string['example2'] = 'Wählen Sie die Verben aus der Dropdown-Liste. Er [lachte] und [setzte] sich hin.';
$string['example3'] = 'Woher kommt das Känguruh? [Australien]. Die nächste Lücke akzeptiert entweder Katze oder Hund [Katze | Hund]';
$string['fixedgapsize'] = 'Fixierte Lückengröße';
$string['fixedgapsize_help'] = 'Bei Versuchen, die Frage zu lösen, werden alle Lücken so breit dargestellt wie die breiteste Auswahlmöglichkeit lang ist. Das verhindert, dass die Größe der Lücke als Hilfe für die erwartete Antwort dient. Z.B. Wenn die Lücke [Rot] und [Magenta] ist, würde aufgrund der Länge der Antwortmöglichkeit die Lösung klar sein, falls sich die Lückengröße an der Länge der Antwortoption orientiert.';
$string['fixedgapsizeset_text'] = 'Die Breite der Lücke entspricht dem breitetesten Eintrag.';
$string['gapfill'] = 'Erweiterter Lückentext';
$string['importexamples'] = 'Import';
$string['incorrect'] = 'Feedback für falsche Antwort.';
$string['itemsettingsbutton'] = 'Lückeneinstellungen';
$string['itemsettings_button'] = 'Elementeinstellungen';
$string['itemsettings_button_help'] = 'Beim Klick auf diese Schaltfläche, wird der Bearbeitungsmodus für die Eingabe von Lückeneinstellungen (z.B. Feedback für korrekte oder falsche Antworten) eingeschaltet. Der Klick auf ein begrenztes Lückenwort öffnet das Einstellungsformular';
$string['itemsettingserror'] = 'Funktioniert nur mit dem Atto Editor. Gehen Sie zu den Editor-Einstellungen um auf den Atto Editor umzuschalten';
$string['letterhint0'] = 'Der erste Buchstabe der richtigen Antwort wird in jeder falsch ausgefüllten Lücke angezeigt, wenn Sie auf erneut versuchen klicken.';
$string['letterhint1'] = 'Der nächste Buchstabe der richtigen Antwort wird hinzugefügt, wenn Sie auf erneut versuchen klicken.';
$string['moreoptions'] = 'Mehr Optionen';
$string['noduplicates'] = 'Keine Duplikate';
$string['noduplicates_help'] = 'Wenn aktiviert, muss jede Antwortoption einmalig sein. Sinnvoll wenn jedes Feld einen | Operator beinhaltet, z.B. was sind die Farben der olympischen Medaillen und jedes Feld hat [Gold|Silber|Bronze] als Auswahlmöglichkeit. Wenn der Student "Gold" eingibt, dann wird, in diesem Fall, in jedem Feld die 1. Option markiert (die anderen Optionen sind weiterhin verfügbar). Es ist vergleichbar mit dem Verwerfen von Antwortmöglichkeiten in Folge von Markierung zuvor genutzter Antwortmöglichkeiten.';
$string['or'] = 'oder';
$string['pleaseenterananswer'] = 'Bitte geben Sie eine Antwort ein.';
$string['pluginname'] = 'Erweiterter Lückentext';
$string['pluginnameadding'] = 'Füge eine erweiterte Lückentext-Frage hinzu';
$string['pluginnameediting'] = 'Erweiterten Lückentext bearbeiten';
$string['pluginname_help'] = 'Platzieren Sie  die Worte, welche hinzugefügt werden sollen, in eckige Klammern, z.B. Der [Ball] wurde ins [Tor] geschossen. Wenn "Matte" oder "Teppich" richtig sind, dann ist folgende Syntax richtig: [Matte|Teppich]. "Dropdown" und "Drag&Drop" Modus erlauben das Vermischen der Antwortliste, welche angezeigt wird. Diese Liste kann auch falsche Antwortmöglichkeiten beinhalten, die von den richtigen Antworten ablenken sollen.';
$string['pluginnamesummary'] = 'Eine Fragentyp, der sich mit dem Ausfüllen von Lücken beschäftigt. Erlaubt "drag&drop" und "drop down" Antwortmöglichkeiten mit dem Einblenden von falschen Antwortmöglichkeiten, welche zur Ablenkung bei der Beantwortung der Frage dienen. Eine sehr einfach zu erlernende Syntax zur Erstellung der Frage.';
$string['questionsmissing'] = 'Sie haben bisher keine Felder in Ihren Fragentext eingefügt.';
$string['wronganswers'] = 'Falsche Antwortoptionen';
$string['wronganswers_help'] = 'Eine Liste von falschen Antwortoptionen, welche von den richtigen Antwortoptionen ablenken soll. Die Wörter werden durch Komma getrennt. Kommt nur im "dragdrop" und "dropdown" Modus zum Einsatz.';
$string['yougotnrightcount'] = 'Die Anzahl der korrekt ausgefüllten Lücken ist {$a->num}.';
