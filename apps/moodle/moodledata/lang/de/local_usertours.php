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
 * Strings for component 'local_usertours', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   local_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['appliesto'] = 'Betrifft';
$string['backdrop'] = 'Mit Hintergrundbox anzeigen';
$string['backdrop_help'] = 'Sie können einen Hintergrundbox nutzen, um den referenzierten Teil der Seite hervorzuheben.
Hinweis: Hintergrundboxen sind nicht mit allen Teilen der Seite kompatibel, etwa dem Navigationsbereich.';
$string['block'] = 'Block';
$string['block_named'] = 'Block namens \'{$a}';
$string['bottom'] = 'Unten';
$string['confirmstepremovalquestion'] = 'Sind Sie sicher, dass Sie diesen Schritt entfernen wollen?';
$string['confirmstepremovaltitle'] = 'Bestätigen Sie das Entfernen des Schritts';
$string['confirmtourremovalquestion'] = 'Sind Sie sicher, dass Sie diese Tour entfernen wollen?';
$string['confirmtourremovaltitle'] = 'Bestätigen Sie das Entfernen der Tour';
$string['content'] = 'Inhalt';
$string['cssselector'] = 'CSS-Selektor';
$string['defaultvalue'] = 'Standard ({$a})';
$string['delay'] = 'Verzögerung vor Anzeige des Schritts';
$string['delay_help'] = 'Sie können optional eine Verzögerung definieren, bevor der Schritt angezeigt wird.
Die Verzögerung wird in Millisekunden angegeben.';
$string['done'] = 'Fertig';
$string['editstep'] = 'Am Bearbeiten von "{$a}"';
$string['enabled'] = 'Aktiviert';
$string['endtour'] = 'Tour beenden';
$string['exporttour'] = 'Tour exportieren';
$string['importtour'] = 'Tour importieren';
$string['left'] = 'Links';
$string['movestepdown'] = 'Schritt nach unten verschieben';
$string['movestepup'] = 'Schritt nach oben verschieben';
$string['movetourdown'] = 'Tour nach unten verschieben';
$string['movetourup'] = 'Tour nach oben verschieben';
$string['name'] = 'Name';
$string['newstep'] = 'Neuer Schritt';
$string['newtour'] = 'Neue Tour erstellen';
$string['next'] = 'Weiter';
$string['orphan'] = 'Anzeigen, wenn Ziel nicht gefunden';
$string['orphan_help'] = 'Zeigt den Schritt an, wenn das Ziel nicht auf der Seite gefunden werden konnte';
$string['pathmatch'] = 'Anzuwenden auf URL';
$string['pathmatch_help'] = 'Touren werden auf jeder Seite angezeigt, deren URL zu diesem Wert passt.

Sie können das % Zeichen als Platzhalter für beliebige Zeichen nutzen.
Einige Beispielswerte sind etwa:

* /my/% - passt zum Dashboard
* /course/view.php?id=2 - passt zu einem spezifischen Kurs (hier mit ID 2)
* /mod/forum/view.php% - passt zur Anzeige eine Porendiskussion
* /user/profile.php? - passt zur Nutzer-Profilseite';
$string['pausetour'] = 'Pausieren';
$string['placement'] = 'Platzierung';
$string['placement_help'] = 'Sie können Schritte entweder über, unter, links oder rechts vom Ziel anordnen.

Die besten Optionen sind "oben" und "unten", da diese besser auf mobilen Geräte umgesetzt werden können.';
$string['pluginname'] = 'Nutzertouren';
$string['reflex'] = 'Weiter bei Klick';
$string['reflex_help'] = 'Zum nächsten Schritt gehen, wenn auf das Ziel geklickt wurde.';
$string['resettouronpage'] = 'Tour für diese Seite zurücksetzen';
$string['resumetour'] = 'Fortfahren';
$string['right'] = 'Rechts';
$string['select_block'] = 'Wählen Sie einen Block aus';
$string['selector_defaulttitle'] = 'Geben Sie einen aussagekräftigen Titel an';
$string['selectordisplayname'] = 'Ein CSS-Selektor passend zu \'{$a}';
$string['select_targettype'] = 'Jeder Schritt ist verbunden mit einem von Ihnen zu wählenden Teil der Seite. Um diese Auswahl zu erleichtern, gibt es verschiedene Arten von Zielen für verschiedene Arten von Seiteninhalten.
<dl>
  <dt>Block</dt>
  <dd>Zeige den Schritt neben dem ersten passenden Block des gewählten Typs auf der Seite an.</dd>
  <dt>Selektor<dt>
  <dd>CSS-Selektoren sind ein aussagekräftiger Typ, über den Sie verschiedene Teil der Seite anhand der eingebauten Metadaten auswählen können.</dd>
  <dt>Anzeige in der Seitenmitte</dt>
  <dd>Anstatt den Schritt mit einem speziellen Seitenteil zu assoziieren, können Sie ihn auch auf der Mitte der Seite anzeigen lassen.</dd>
</dl>';
$string['selecttype'] = 'Auswahl des Schritt-Typs';
$string['sharedtourslink'] = 'Tourenverzeichnis';
$string['skip'] = 'Überspringen';
$string['target'] = 'Ziel';
$string['target_block'] = 'Block';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'CSS-Selektoren';
$string['target_selector_targetvalue_help'] = 'Sie können einen "CSS-Selektor" nutzen, um fast jedes Element einer Seite als Ziel auszuwählen.

CSS-Selektoren sind sehr mächtig; Sie können damit einfach Teile der Seite finden, indem Sie den Selektor schrittweise verfeinern.

Mozilla bietet eine [sehr gute Dokumentation] (https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors)
für Selektieren, die Ihnen beim Aufbauen der Selektoren helfen könnte.

Die Entwicklungswerkzeuge Ihres Browsers können auch sehr hilfreich sein beim Aufbau dieser Selektieren:

* [Google Chrome](https://developer.chrome.com/devtools#dom-and-styles)
* [Mozilla Firefox](https://developer.mozilla.org/en-US/docs/Tools/DOM_Property_Viewer)
* [Microsoft Edge](https://developer.microsoft.com/en-us/microsoft-edge/platform/documentation/f12-devtools-guide/)
* [Apple Safari](https://developer.apple.com/library/iad/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/ResourcesandtheDOM/ResourcesandtheDOM.html#//apple_ref/doc/uid/TP40007874-CH3-SW1)';
$string['targettype'] = 'Zieltyp';
$string['target_unattached'] = 'Anzeige in der Seitenmitte';
$string['title'] = 'Titel';
$string['top'] = 'Oben';
$string['tourconfig'] = 'Zu importierende Konfigurationsdatei der Tour';
$string['tourlist_explanation'] = 'Sie können so viele Touren anlegen wie Sie wollen und diese für verschiedene Bereiche von Moodle aktivieren. Allerdings kann pro Seite nur eine Tour erstellt werden.';
$string['tours'] = 'Touren';
$string['usertours'] = 'Nutzertouren';
$string['viewtour_info'] = 'Dies ist die \'{$a->tourname}\' Tour. Sie gehört zum Pfad \'{$a->path}\'.';
