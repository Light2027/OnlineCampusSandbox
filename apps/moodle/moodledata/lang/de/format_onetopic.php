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
 * Strings for component 'format_onetopic', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   format_onetopic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asbrother'] = 'Tab auf gleicher Ebene';
$string['aschild'] = 'Tab auf untergeordneter Ebene';
$string['asprincipal'] = 'Tab auf oberster Ebene';
$string['bgcolor'] = 'Hintergrundfarbe';
$string['bgcolor_help'] = 'Diese Option legt die Hintergrundfarbe des Tabs fest. Der Wert muss eine gültige CSS-Angabe sein. <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['cantcreatesection'] = 'Fehler beim Anlegen eines neuen Abschitts';
$string['coursedisplay'] = 'Darstellung von Abschnitt 0';
$string['coursedisplay_help'] = 'Diese Option legt fest, ob der Abschnitt 0 als erster Tab in der Tableiste oder als Bereich oberhalb der Tableiste angezeigt wird.';
$string['coursedisplay_multi'] = 'Oberhalb der Tableiste';
$string['coursedisplay_single'] = 'Als Tab in der Tableiste';
$string['creating_section'] = 'Neuer Abschnitt wird angelegt';
$string['cssstyles'] = 'CSS-Anpassung';
$string['cssstyles_help'] = 'Diese Option legt CSS-Eigenschaften für den Tab fest. Verwenden Sie einen Standardwert für das Attribut <em>style</em> in einem HTML-Tag, z.B. <ul><li>font-weight: bold; font-size: 16px;</li></ul>';
$string['currentsection'] = 'Dieser Abschnitt';
$string['disable'] = 'Deaktivieren';
$string['disableajax'] = 'Synchron verschieben';
$string['disableajax_help'] = 'Deaktivieren Sie das synchrone Verschieben (Ajax), um Ressourcen zwischen den einzelnen Abschnitten austauschen zu können.';
$string['duplicate'] = 'Duplizieren';
$string['duplicate_confirm'] = 'Möchten Sie wirklich den aktuellen Abschnitt duplizieren? Je nach Größe und Anzahl der enthaltenen Ressourcen könnte der Vorgang länger dauern.';
$string['duplicatesection'] = 'Abschnitt duplizieren';
$string['duplicatesection_help'] = 'Der aktuelle Abschnitt und alle darin enthalten Aktivitäten werden in einem neuen Abschnitt dupliziert.';
$string['duplicating'] = 'Wird dupliziert';
$string['enable'] = 'Aktivieren';
$string['error_nosectioninfo'] = 'Der angegebene Abschnitt enthält keine Informationen.';
$string['firsttabtext'] = 'Name des ersten Tabs auf der untergeordneten Ebene';
$string['firsttabtext_help'] = 'Wenn dieser Tab eine untergeordnete Ebene hat, ist dies der Name des ersten untergeordneten Tabs.';
$string['fontcolor'] = 'Schriftfarbe';
$string['fontcolor_help'] = 'Diese Option legt die Schriftfarbe des Tabs fest. Der Wert muss eine gültige CSS-Angabe sein. <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['hidefromothers'] = 'Abschnitt verbergen';
$string['hidetabsbar'] = 'Tableiste verbergen';
$string['hidetabsbar_help'] = 'Tableiste auf der Kursseite verbergen. Die Navigation erfolgt über die Navigationselemente \'Vorheriger Abschnitt\' bzw. \'Nächster Abschnitt\'.';
$string['index'] = 'Index';
$string['level'] = 'Tab-Ebene';
$string['level_help'] = 'Ebene für Tab ändern';
$string['movesectionto'] = 'Abschnitt verschieben';
$string['movesectionto_help'] = 'Der aktuelle Abschnitt (schwarz) wird durch Mausklick auf einen Tab verschoben. Wenn Sie den Abschnitt nach rechts verschieben, landet er rechts vom angeklickten Tab. Wenn Sie den Anschnitt nach links verschieben, landet er links davon. Falls der angeklickte Tab eine untergeordneter Ebene hat, wird der aktuelle Abschnitt auf den ersten untergeordneten Tab geschoben.';
$string['page-course-view-topics'] = 'Jede Kurshauptseite im Ein-Themen-Format';
$string['page-course-view-topics-x'] = 'Jede Kursseite im Ein-Themen-Format';
$string['pluginname'] = 'Ein-Themen-Format';
$string['progress_counter'] = 'Aktivitäten duplizieren ({$a->current}/{$a->size})';
$string['progress_full'] = 'Der Abschnitt wird dupliziert';
$string['rebuild_course_cache'] = 'Cache erneuern';
$string['sectionname'] = 'Abschnitt';
$string['showfromothers'] = 'Abschnitt anzeigen';
$string['subtopictoright'] = 'Als Unterpunkt nach rechts verschieben';
$string['templatetopic'] = 'Beschreibung als Zusammenfassung verwenden';
$string['templatetopic_help'] = 'Diese Option wird verwendet, um die Themenzusammenfassung als Vorlage zu benutzen. Wenn die Zusammenfassung als Vorlage verwendet wird, können Sie die Ressourcen in den Inhalt einbinden, nicht nur als herkömmliche Moodle-Liste. <br /> Um eine Ressource einzubinden, schreiben Sie den Namen der Ressource zwischen doppelte eckigen Klammern, z.B. [[Nachrichtenforum]]. Diese Funktionalität ist ähnlich wie der Aktivitätsnamen-Filter, wobei man aber entscheiden kann, ob die Ressource-Icons oder die Aktivitäten einbezogen werden.';
$string['templatetopic_icons'] = 'Icons von Ressourcen in der Beschreibung anzeigen';
$string['templatetopic_icons_help'] = 'Diese Option legt fest, ob die Ressorce-Icons in der Zusammenfassung angezeigt werden, wenn letztere als Template dient.';
$string['templetetopic_list'] = 'Ja, Zusammenfassung als Template verwenden und nicht eingebundene Ressourcen auflisten';
$string['templetetopic_not'] = 'Nein, standardmäßig anzeigen';
$string['templetetopic_single'] = 'Ja, Zusammenfassung als Template verwenden';
$string['utilities'] = 'Werkzeuge zur Bearbeitung der Tabs';
