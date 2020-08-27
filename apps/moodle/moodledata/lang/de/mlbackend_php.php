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
 * Strings for component 'mlbackend_php', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   mlbackend_php
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Nur ein Teil des Datensatzes wurde aufgrund seiner Größe ausgewertet. Legen Sie $CFG->mlbackend_php_no_memory_limit fest, wenn Sie sicher sind, dass Ihr System mit einem {$a} Datensatz umgehen kann.';
$string['errorcantloadmodel'] = 'Die Modelldatei {$a} existiert nicht. Stellen Sie sicher, dass das Modell trainiert wurde, bevor es zur Vorhersage genutzt wird.';
$string['errorlowscore'] = 'Die evaluierte Vorhersagegenauigkeit des Modells ist nicht sehr hoch, einige Vorhersagen könnten ungenau sein. Modellwert = {$a->score}, Minimumwert = {$a->minscore}';
$string['errornotenoughdata'] = 'Es gibt nicht genügend Daten, um dieses Modell mit der Analyseintervall zu evaluieren.';
$string['errornotenoughdatadev'] = 'Die Auswertungsergebnisse variierten zu stark. Es wird empfohlen, dass mehr Daten gesammelt werden, um sicherzustellen, dass das Modell gültig ist. Standardabweichung der Auswertungsergebnisse  = {$a->deviation}, maximal empfohlene Standardabweichung = {$a->accepteddeviation}';
$string['errorphp7required'] = 'Das PHP machine learning backend benötigt PHP 7.';
$string['pluginname'] = 'PHP machine learning backend';
$string['privacy:metadata'] = 'Das PHP machine learning Backendplugin speichert keine personenbezogenen Daten.';
