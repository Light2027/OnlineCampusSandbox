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
 * Strings for component 'ltiservice_gradebookservices', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   ltiservice_gradebookservices
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'Service für die Synchronisation von Bewertungen und die Verwaltung der Spalten nutzen.';
$string['grade_synchronization'] = 'IMS LTI Aufgaben- und Bewertungservice';
$string['grade_synchronization_help'] = 'Ob der IMS LTI Aufgaben und Bewertungsservice zur Synchronisierubg von Bewertungen genutzt wird an Stelle des Basisdienstes.

* **Service nicht nutzen** - Der Basisservice und -Konfiguration wird genutzt
* **Service nur für Bewertungssynchronisation nutzen** - Es werden die Bewertungen in die vorhandene Bewertungstabelle übernommen, jedoch keine neuen Spalten eingefügt.
* **Service für Bewertungssynchronisation und Spaltenverwaltung nutzen** - Der Service erstellt und aktualisiert Spalten in den Bewertungen und pflegt die Bewertungen ein.';
$string['ltiservice_gradebookservices'] = 'IMS LTI Zuweisungs- und Bewertungsservices';
$string['modulename'] = 'LTI Bewertungen';
$string['nevergs'] = 'Diesen Service nicht nutzen';
$string['partialgs'] = 'Service nur für Bewertungen nutzen';
$string['pluginname'] = 'LTI Aufgaben und Bewertungsservice';
$string['privacy:metadata:externalpurpose'] = 'Diese Information wird an externen LTI-Provider gesendet.';
$string['privacy:metadata:feedback'] = 'Feedback, die der Nutzer für LTI Aktivität erhalten hat';
$string['privacy:metadata:grade'] = 'Bewertung, die der Nutzer für LTI Aktivität erhalten hat.';
$string['privacy:metadata:maxgrade'] = 'Höchstbewertung, die für LTI-Aktivität vergeben wird';
$string['privacy:metadata:timemodified'] = 'Letzer Zeitpunkt an dem Bewertung aktualisiert wurde';
$string['privacy:metadata:userid'] = 'ID des Nutzers, der LTI-Consumer nutzte';
$string['taskcleanup'] = 'LTI Aufgaben und Bewertungsservicetabelle bereinigen';
