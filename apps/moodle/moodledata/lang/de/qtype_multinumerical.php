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
 * Strings for component 'qtype_multinumerical', language 'de', branch 'MOODLE_37_STABLE'
 *
 * @package   qtype_multinumerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Ihre Antwort: {$a}';
$string['badfeedbackperconditionsyntax'] = 'Jede Zeile muss die Form haben: &quot;Feedback bei richtiger Antwort (true) | Feedback bei falscher Antwort (false)&quot;';
$string['badnumfeedbackperconditions'] = 'Die Anzahl der bedingten Feedbacks kann nicht höher sein, als die Zahl der Bedingungen.';
$string['binarygrade'] = 'Bewertungsberechnung';
$string['conditionnotverified'] = 'Nichtüberprüfte Bedingung';
$string['conditions'] = 'Bedingungen';
$string['conditionverified'] = 'Überprüfte Bedingung';
$string['displaycalc'] = 'Ergebnis anzeigen';
$string['feedbackperconditions'] = 'Feedback zur Bedingung';
$string['gradebinary'] = 'Alles oder nichts';
$string['gradefractional'] = 'gebrochen';
$string['helponquestionoptions'] = 'Für weitere Informationen zu diesem Fragetyp klicken Sie auf das Fragezeichen oben auf dieser Seite.';
$string['noncomputable'] = '(es können keine richtigen Antworten berechnet werden)';
$string['onlyforcalculations'] = 'Nur für Berechnungen';
$string['parameters'] = 'Parameter';
$string['pleaseenterananswer'] = 'Geben Sie eine Antwort ein.';
$string['pluginname'] = 'Multinumerisch';
$string['pluginnameadding'] = 'Multinumerical-Frage hinzufügen';
$string['pluginnameediting'] = 'Multinumerical-Frage bearbeiten';
$string['pluginname_help'] = '<h2>So funktioniert es:</h2>
<p>Eine multinumerical Frage erlaubt Aufgaben mit mehrene (numerischen) Eingaben.</p>
<p><strong>Beispiel:</strong> ermittle <span style="font-family:monospace">X</span> und <span style="font-family:monospace">Y</span>, so dass gilt </p>
<ul><li>X + Y < 20</li><li>X * Y > 35</li></ul>
<p>Es gibt <em>möglicherweise</em> mehrere richtige Antworten und jede dieser Antworten muss als \'richtig\' bewertet werden.</p>
<p>Der Fragetyp erlaubt die Festlegung der Parameter (hier, <span style="font-family:monospace">X</span> und <span style="font-family:monospace">Y</span>) und die vorgegebenen Bedingungen.</p>
<h2>Anwendung:</h2>
<ul>
	<li>Geben Sie eine Liste kommagetrennter Paramter vor (im Beispiel"<span style="font-family:monospace">X,Y</span>").<br />
	<strong>Achtung :</strong> Einheiten können hinter jedem Paramter angegeben werden:
	"<span style="font-family:monospace">X [m],Y [h]</span>" (ein Leerzeichen muss zwischen Parameter und Einheit stehen).</li>
	<li>Gib zeilenweise die Bedingungen an; im Beispiel: <pre>X + Y < 20
X * Y > 35</pre>(Leerzeilen werden ignoriert)
    <p>Mögliche Operatoren : <ul>
        <li>"<span style="font-family:monospace">=</span>" (istgleich)</li>
        <li>"<span style="font-family:monospace"><</span>" (kleiner als)</li>
        <li>"<span style="font-family:monospace"><=</span>" (kleiner oder gleich)</li>
        <li>"<span style="font-family:monospace">></span>" (größer als)</li>
        <li>"<span style="font-family:monospace">>=</span>" (größer oder gleich)</li>
        <li>Intervalle:
            <pre><span style="font-family:monospace">X = [1;5]</span></pre> (geschlossen)
            <pre><span style="font-family:monospace">X = ]1;5[</span></pre> (offen)
        </li>
    </ul></p></li>
	<li>Wenn gewünscht, kann man für jede Bedingung ein Feedback eingeben. Im Beispiel könnte Folgendes stehen:
    <pre>Prima : X + Y < 20 | Nein, X + Y >= 20 !
OK : X * Y > 35 | Nein, X + Y <= 35 !</pre>
    </li>
    <li>Wenn "Ergebnis anzeigen" angehakt ist, wird als Feedback die Berechnung angezeigt, wenn Feedback eingegeben wurde.<br />
    Wenn "Nur für Berechnungen" ausgewählt wurde, wird dies nicht für Unberechnetes (wie <span style="font-family:monospace">X > 5</span>) ausgegeben, damit die Antwort nicht gezeigt wird.</li>
    <li>Die Option "Bewertungsberechnung" legt die Anteile fest, wenn alles richtig, nur teilweise korrekt oder gar nicht richtig geantwortet wurde.</li>
</ul>';
$string['pluginnamesummary'] = 'Mit diesem Fragentyp können Aufgaben erstellen, bei denen Gleichungen oder Ungleichungen mehrere richtige Ergebnisse haben können.';
$string['qtypeoptions'] = 'Spezielle Optionen für Multinumerische Aufgaben.';
$string['usecolorforfeedback'] = 'Bedingtes Feedback farbig hervorheben';
