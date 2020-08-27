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
 * Strings for component 'block_opencast', language 'de', branch 'MOODLE_39_STABLE'
 *
 * @package   block_opencast
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesspolicies'] = 'Zugriffsrechte';
$string['aclgroupdeleted'] = 'Zugriff für das Video \'{$a->title}\' wurde eingeschränkt';
$string['aclnothingtobesaved'] = 'Es wurden keine Änderungen an der Sichtbarkeit vorgenommen.';
$string['aclrolesadded'] = 'Die Sichtbarkeit wurde geändert, so dass Teilnehmer/innen dieses Kurses Zugriff auf das folgendes Video haben: {$a->title}

Laden Sie diese Seite nach einiger Zeit neu, um den aktuellen Status der Sichtbarkeit zu sehen.';
$string['aclrolesaddedgroup'] = 'Die Sichtbarkeit wurde geändert, so dass Teilnehmer/innen der gewählten Gruppe Zugriff auf das folgendes Video haben: {$a->title}

Laden Sie diese Seite nach einiger Zeit neu, um den aktuellen Status der Sichtbarkeit zu sehen.';
$string['aclroleschangeerror'] = 'Es ist ein Fehler während der Sichtbarkeitsänderung für folgendes Video aufgetreten: {$a->title}

Einige Änderungen wurden möglicherweise nicht gespeichert.
Sollte das Problem wiederholt auftreten, wenden Sie an Ihren Support.

Laden Sie diese Seite nach einiger Zeit neu, um den aktuellen Status der Sichtbarkeit zu sehen.';
$string['aclrolesdeleted'] = 'Die Sichtbarkeit wurde geändert, so dass keine Teilnehmer/innen mehr Zugriff auf das folgendes Video haben: {$a->title}

Laden Sie diese Seite nach einiger Zeit neu, um den aktuellen Status der Sichtbarkeit zu sehen.';
$string['aclrolesname'] = 'Rollen';
$string['aclrolesnamedesc'] = 'Der Platzhalter [COURSEID] kann im Rollennamen verwendet werden und wird automatisch ersetzt.';
$string['actions'] = 'kommagetrennte Liste von Aktionen';
$string['addcatalog'] = 'Neues Metadatum hinzufügen';
$string['additional_settings'] = 'Zusätzliche Funktionen';
$string['addlti_addbuttonexplanation'] = 'Die Videos, die zu diesem Kurs hinzugefügt werden bzw. in diesem verfügbar sind, werden den Teilnehmer/innen nicht automatisch angezeigt.</br>Hier können Sie eine Opencast-Serien-Aktivität zum Kurs hinzufügen, welche den Teilnehmer/innen alle sichtbaren Videos anbietet.';
$string['addlti_addbuttontitle'] = 'Opencast-Serien-Aktivität zum Kurs hinzufügen';
$string['addlti_defaulttitle'] = 'Opencast Videos';
$string['addlti_formltititle'] = 'Titel der Opencast-Serien-Aktivität';
$string['addlti_header'] = 'Videos zur Verfügung stellen';
$string['addlti_modulecreated'] = 'Die Serien-Aktivität \'{$a}\' wurde zum Kurs hinzugefügt.';
$string['addlti_moduleexists'] = 'Es gibt bereits eine Opencast-Serien-Aktivität in diesem Kurs. Es ist nicht notwendig eine zweite hinzuzufügen.';
$string['addlti_modulenotcreated'] = 'Die Serien-Aktivität \'{$a}\' konnte nicht zum Kurs hinzugefügt werden. Versuchen Sie es erneut oder kontaktieren Sie Ihren Support.';
$string['addlti_noemptytitle'] = 'Sie müssen einen Namen für die Opencast-Serien-Aktivität angeben oder den standardmäßigen Namen "{$a}" verwenden.';
$string['addlti_settingdefaulttitle'] = 'Standard-Titel der LTI-Aktivität.';
$string['addlti_settingdefaulttitle_desc'] = 'Der standardmäßige Titel der LTI-Aktivität wird verwendet, wenn eine neue Opencast LTI-Aktivität angelegt wird.';
$string['addlti_settingenabled'] = '"LTI-Aktivität hinzufügen" aktivieren';
$string['addlti_settingenabled_desc'] = 'Wenn diese Option aktiv ist, können die Trainer/innen eine Opencast-LTI-Aktivität zum Kurs hinzufügen. Diese LTI-Aktivität wird die Opencast-Serie des Kurses anzeigen.';
$string['addlti_settingheader'] = 'Opencast-LTI-Aktivität zum Kurs hinzufügen';
$string['addlti_settingpreconfiguredtool'] = 'Vorkonfiguriertes LTI-Tool';
$string['addlti_settingpreconfiguredtool_desc'] = 'Das vorkonfiguriertes LTI-Tool wird verwendet, wenn eine neue Opencast-LTI-Aktivität zum Kurs hinzugefügt wird.';
$string['addlti_settingpreconfiguredtool_notools'] = 'Kein vorkonfiguriertes LTI-Tool gefunden. Legen Sie zuerst ein Opencast-LTI-Tool über die Einstellungsseite unter {$a} an.';
$string['addlti_viewbuttonexplanation'] = 'Eine Opencast-Serien-Aktivität, die alle verfügbaren Videos im Kurs anzeigt, wurde bereits hinzugefügt.';
$string['addlti_viewbuttontitle'] = 'Opencast-Serien-Aktivität im Kurs anzeigen';
$string['addrole'] = 'Neue Rolle hinzufügen';
$string['addvideo'] = 'Video hinzufügen';
$string['adhocfiledeletion'] = 'Videodatei in Moodle löschen';
$string['adminchoice_noworkflow'] = '-- kein Workflow --';
$string['allowunassign'] = 'Erlauben, die Zuordnung zum Kurs aufzuheben';
$string['allowunassigndesc'] = 'Die Zuordnung einer Serie löschen, um die Sichtbarkeit in Datei-Browser und Kurs-Listen zu kontrollieren. Dieses Feature steht nur zur Verfügung, wenn Episoden unabhängig von einer Serie in Opencast möglich sind. Bitte fragen Sie vor der Aktivierung den Administrator Ihres Opencast-Systems.';
$string['blocksettings'] = 'Einstellungen für einen Opencast-Block';
$string['changevisibility'] = 'Sichtbarkeit ändern';
$string['changevisibility_group'] = 'Das Video ist für alle Teilnehmer/innen ausgewählter Gruppen sichtbar. Bitte klicken, um die Sichtbarkeit zu ändern.';
$string['changevisibility_header'] = 'Sichtbarkeit für {$a->title} ändern';
$string['changevisibility_hidden'] = 'Das Video ist für Teilnehmer/innen nicht sichtbar. Bitte klicken, um die Sichtbarkeit zu ändern.';
$string['changevisibility_mixed'] = 'Der Sichtbarkeitsstatus des Videos ist ungültig. Bitte klicken, um die richtige Sichtbarkeit auszuwählen.';
$string['changevisibility_visible'] = 'Das Video ist für alle Teilnehmer/innen des Kurses sichtbar. Bitte klicken, um die Sichtbarkeit zu ändern.';
$string['contributor'] = 'Mitwirkende';
$string['created'] = 'Erstellt am';
$string['createdby'] = 'Hochgeladen von';
$string['createseriesforcourse'] = 'Neue Serie anlegen';
$string['creator'] = 'Vortragende(r)';
$string['cronsettings'] = 'Einstellungen für das Hochladen';
$string['date'] = 'Startdatum';
$string['deleteaclgroup'] = 'Video aus dieser Liste löschen.';
$string['deleteevent'] = 'Eine Episode in Opencast löschen';
$string['deleteeventdesc'] = 'Sie sind im Begriff, dieses Video dauerhaft und irreversibel aus Opencast zu löschen. Alle eingebetteten Links zu diesem Video werden ungültig. Bitte fahren Sie nicht fort, es sei denn, Sie sind sich absolut sicher.';
$string['deletegroupacldesc'] = 'Sie sind im Begriff, den Zugang zu diesem Video aus diesem Kurs zu löschen. Wenn der Zugang gelöscht ist, wird das Video nicht im Datei-Browser und in der Übersicht der verfügbaren Videos angezeigt. Bereits eingebettete Videos sind davon nicht betroffen. Sie werden in Opencast nicht gelöscht.';
$string['deleteworkflow'] = 'Bevor eine Episode gelöscht wird, Workflow starten';
$string['deleteworkflowdesc'] = 'Bevor ein Video gelöscht wird, kann ein Workflow definiert werden, der die Verbindungen der Episode zu den verschiedenen Publikationskanälen kappt.';
$string['deleting'] = 'Wird gelöscht';
$string['description'] = 'Beschreibung';
$string['dodeleteaclgroup'] = 'Videozugriff aus diesem Kurs löschen';
$string['dodeleteevent'] = 'Video endgültig löschen';
$string['duration'] = 'Dauer';
$string['editseriesforcourse'] = 'Serie bearbeiten';
$string['emptyvideouploaderror'] = 'Sie müssen entweder ein Präsentator-Video oder ein Präsentations-Video hochladen.';
$string['errorgetblockvideos'] = 'Liste kann nicht geladen werden (Error: {$a})';
$string['eventdeleted'] = 'Das Video wurde gelöscht.';
$string['eventdeletedfailed'] = 'Löschen der Episode fehlgeschlagen';
$string['eventdeletionstarted'] = 'Das Video wird in Kürze gelöscht.';
$string['eventuploadfailed'] = 'Hochladen fehlgeschlagen';
$string['eventuploadsucceeded'] = 'Hochladen erfolgreich';
$string['form_seriesid'] = 'Serien-ID';
$string['form_seriestitle'] = 'Serientitel';
$string['gotooverview'] = 'Zum Überblick...';
$string['groupcreation'] = 'Gruppe anlegen';
$string['groupcreationdesc'] = 'Falls ausgewählt, wird eine Gruppe während des Uploads angelegt.';
$string['groupname'] = 'Gruppenname';
$string['groupnamedesc'] = 'Gruppe, zu der das Video hinzugefügt wird. Wichtig: Die Länge des Gruppennamens ist auf 128 Bytes beschränkt. Sie können die Platzhalter [COURSEID] und [COURSENAME] nutzen, die automatisch ersetzt werden.';
$string['group_name_empty'] = 'Das Feld für den Gruppennamen darf nicht leer sein, wenn eine Gruppe angelegt werden soll.';
$string['heading_actions'] = 'Aktionen';
$string['heading_delete'] = 'Löschen';
$string['heading_permanent'] = 'Endgültig';
$string['heading_role'] = 'Rolle';
$string['hend_date'] = 'Enddatum';
$string['hlocation'] = 'Ort';
$string['hpublished'] = 'Veröffentlicht';
$string['hstart_date'] = 'Anfangsdatum';
$string['htitle'] = 'Name';
$string['hvisibility'] = 'Sichtbarkeit';
$string['hworkflow_state'] = 'Status';
$string['invalidacldata'] = 'Ungültige ACL-Daten';
$string['language'] = 'Sprache';
$string['license'] = 'Lizenz';
$string['limituploadjobs'] = 'Uploads durch den Cron-Job begrenzen';
$string['limituploadjobsdesc'] = 'Anzahl der Uploads begrenzen, die von einem Cron-Job vorgenommen werden können. Der Cron-Job kann hier eingestellt werden: {$a}';
$string['limitvideos'] = 'Anzahl von Videos';
$string['limitvideosdesc'] = 'Maximale Anzahl von Videos, die in diesem Block angezeigt werden';
$string['location'] = 'Raum';
$string['metadata'] = 'Metadaten';
$string['metadata_autocomplete_noselectionstring'] = 'Kein {$a} angegeben!';
$string['metadata_autocomplete_placeholder'] = '{$a} eingeben';
$string['missingevent'] = 'Anlegen des Termins fehlgeschlagen';
$string['missinggroup'] = 'Fehlende Gruppe in Opencast';
$string['missingseries'] = 'Fehlende Serie in Opencast';
$string['missingseriesassignment'] = 'Fehlende Serienzuweisung';
$string['morevideos'] = 'Weitere Videos...';
$string['mstatecreatingevent'] = 'Hochladen...';
$string['mstatecreatinggroup'] = 'Opencast-Gruppe anlegen...';
$string['mstatecreatingseries'] = 'Opencast-Serie anlegen...';
$string['mstatereadytoupload'] = 'Fertig zum Hochladen';
$string['mstatetransferred'] = 'Übertragen';
$string['mstateunknown'] = 'Status unbekannt';
$string['mstateuploaded'] = 'Es werden Post-Upload-Aufgaben verarbeitet...';
$string['noseriesid'] = 'Die Serien-ID ist bisher nicht festgelegt.';
$string['nothingtodisplay'] = 'Keine Videos';
$string['notpublished'] = 'Nicht veröffentlicht';
$string['novideosavailable'] = 'Keine Videos';
$string['ocstatecapturing'] = 'Aufzeichnen';
$string['ocstatefailed'] = 'Fehlgeschlagen';
$string['ocstateneedscutting'] = 'Schnitt erforderlich';
$string['ocstateprocessing'] = 'Wird verarbeitet';
$string['ocstatesucceeded'] = 'Erfolgreich';
$string['opencast:addinstance'] = 'Neuen Block \'Opencast Videos\' hinzufügen';
$string['opencast:addlti'] = 'Opencast-Serien-Aktivität zum Kurs hinzufügen';
$string['opencast:addvideo'] = 'Neues Video zum Block \'Opencast Videos\' hinzufügen';
$string['opencast:createseriesforcourse'] = 'In Opencast eine neue Serie für einen Moodle-Kurs anlegen';
$string['opencast:defineseriesforcourse'] = 'Existierende Opencast-Serie mit einem Moodle-Kurs verbinden';
$string['opencast:deleteevent'] = 'Video (Episode) endgültig in Opencast löschen';
$string['opencast:myaddinstance'] = 'Neuen Block \'Opencast Videos\' im Dashboard hinzufügen';
$string['opencaststudiointegration'] = 'Opencast Studio Integration';
$string['opencast:unassignevent'] = 'Zuweisung eines Videos im Kurs aufheben, in dem es hochgeladen wurde.';
$string['opencast:viewunpublishedvideos'] = 'Alle Videos auf dem Opencast-Server ansehen, auch wenn sie noch nicht veröffentlicht sind.';
$string['overview'] = 'Überblick';
$string['planned'] = 'Geplant';
$string['pluginname'] = 'Opencast Videos';
$string['presentation'] = 'Präsentation';
$string['presentationdesc'] = 'Ein Video der Folienpräsentation (Keynote, Powerpoint, usw.).';
$string['presenter'] = 'Präsentator';
$string['presenterdesc'] = 'Ein Video einer Person, die zu einem Publikum spricht.';
$string['privacy:metadata:block_opencast_uploadjob'] = 'Information zu Video-Uploads';
$string['privacy:metadata:block_opencast_uploadjob:courseid'] = 'ID des Kurses, in dem das Video hochgeladen wird';
$string['privacy:metadata:block_opencast_uploadjob:fileid'] = 'ID der Datei/des Videos, das hochgeladen wird';
$string['privacy:metadata:block_opencast_uploadjob:opencasteventid'] = 'ID der Opencast-Episode, die durch den Upload angelegt wird';
$string['privacy:metadata:block_opencast_uploadjob:status'] = 'Status des Upload-Prozesses';
$string['privacy:metadata:block_opencast_uploadjob:timecreated'] = 'Datum des Uploads';
$string['privacy:metadata:block_opencast_uploadjob:timemodified'] = 'Datum der letzten Modifizierung des Uploads';
$string['privacy:metadata:block_opencast_uploadjob:userid'] = 'ID der Person, die das Video hochgeladen hat';
$string['privacy:metadata:core_files'] = 'Der Block \'Opencast Videos\' speichert Dateien (Videos), die von einer Person hochgeladen werden.';
$string['privacy:metadata:opencast'] = 'Der Block \'Opencast Videos\' interagiert mit einer Opencast-Instanz, mit der Daten ausgetauscht werden.';
$string['privacy:metadata:opencast:file'] = 'Die ausgewählte Datei wird nach Opencast hochgeladen.';
$string['processdelete'] = 'Löschen verarbeiten';
$string['processupload'] = 'Upload verarbeiten';
$string['publisher'] = 'Herausgeber';
$string['publishtoengage'] = 'Zum Engage Player veröffentlichen';
$string['publishtoengagedesc'] = 'Diese Option wählen, um das Video nach dem Upload zum Engage Player zu veröffentlichen. Der eingestellte Workflow muss dies unterstützen.';
$string['recordvideo'] = 'Video aufnehmen';
$string['reuseexistingupload'] = 'Bereits existierende Uploads nutzen';
$string['reuseexistinguploaddesc'] = 'Falls aktiviert, werden Videos mit demselben content hash nur einmal nach Opencast hochgeladen. Dies spart Speicherplatz und Rechenleistung, aber es könnte Probleme verursachen, wenn Sie mit spezifischen Zugangsrichtlinien zu Opencast-Serien arbeiten.';
$string['rights'] = 'Rechte';
$string['rightsHolder'] = 'Rechte';
$string['rolename'] = 'Rollenname';
$string['series_already_exists'] = 'Dieser Kurs wurde bereits einer Serie zugewiesen.';
$string['seriescreated'] = 'Die Serie wurde angelegt';
$string['series_does_not_exist'] = 'Die diesem Kurs zugewiesene Serie ist nicht gültig. Bitte kontaktieren Sie den Administrator.';
$string['series_does_not_exist_admin'] = 'Die Serie mit dem identifier \'{$a}\' konnte nicht von Opencast abgerufen werden.';
$string['seriesidnotvalid'] = 'Die Serie gibt es nicht.';
$string['seriesidsaved'] = 'Die Serien-ID wurde gespeichert.';
$string['seriesidunset'] = 'Die Serien-ID wurde entfernt.';
$string['seriesname'] = 'Serienname';
$string['seriesnamedesc'] = 'Serie, zu der das Video hinzugefügt wird. Sie können die Platzhalter [COURSEID] und [COURSENAME] nutzen, die automatisch ersetzt werden.';
$string['series_name_empty'] = 'Serienname darf nicht leer sein.';
$string['seriesnotcreated'] = 'Serie konnte nicht angelegt werden.';
$string['setting_permanent'] = 'Ist permanent';
$string['settings'] = 'Opencast Videos';
$string['source'] = 'Quelle';
$string['startDate'] = 'Datum';
$string['startTime'] = 'Zeit';
$string['subjects'] = 'Betreff';
$string['submit'] = 'Änderungen speichern';
$string['title'] = 'Titel';
$string['type'] = 'Medientyp';
$string['updatemetadata'] = 'Metadaten für dieses Video aktualisieren';
$string['updatemetadatasaved'] = 'Metadaten wurden aktualisiert.';
$string['upload'] = 'Datei hochladen';
$string['uploadfileextensions'] = 'Akzeptierte Dateitypen';
$string['uploadfileextensionsdesc'] = 'Kommaseparierte Liste der akzeptierten Dateitypen (die Dateitypen müssen in der <a href="{$a}">Liste der Dateitypen</a> existieren). Falls die Einstellung leer gelassen wird, werden alle Dateitypen der Dateitypgruppe \'Video\' zugelassen (Details siehe wieder in der <a href="{$a}">Liste der Dateitypen</a>).';
$string['uploadingeventfailed'] = 'Anlegen einer Episode fehlgeschlagen';
$string['uploadjobssaved'] = 'Uploads gesichert';
$string['uploadqueuetoopencast'] = 'Videos, die gerade zum Streaming-Server hochgeladen werden';
$string['uploadworkflow'] = 'Nach Upload Workflow starten';
$string['uploadworkflowdesc'] = 'Den eindeutigen Kurznamen des Workflows einrichten, der nach dem erfolgreichen Hochladen eines Videos nach Opencast gestartet werden soll.
Wenn leer gelassen, wird der Standard-Workflow (ng-schedule-and-upload) genutzt. Fragen Sie nach weiteren Workflows, die eventuell vom Opencast-Administrator angelegt wurden.';
$string['videonotfound'] = 'Video nicht gefunden';
$string['videosavailable'] = 'Videos, die in diesem Kurs verfügbar sind';
$string['videostoupload'] = 'Videos, die nach Opencast hochgeladen werden können';
$string['visibility'] = 'Sichtbarkeit des Videos';
$string['visibility_group'] = 'Allen Kursteilnehmer/innen ausgewählter Gruppen Zugang zum Video erlauben';
$string['visibility_hide'] = 'Alle Teilnehmer/innen am Zugang zum Video hindern';
$string['visibility_show'] = 'Allen Teilnehmer/innen den Zugang zum Video erlauben';
$string['workflownotdefined'] = 'Der Workflow für das Aktualisieren von Metadaten ist nicht definiert.';
$string['workflow_not_existing'] = 'Dieser Workflow existiert nicht.';
$string['workflowrolesdesc'] = 'Dieser Workflow wird in Gang gesetzt, wenn temporäre ACL-Regeln gelöscht oder hinzugefügt werden. Falls nicht gesetzt, ist es nicht möglich, die Sichtbarkeit von hochgeladenen Videos über den Block \'Opencast Videos\' zu ändern.';
$string['workflowrolesname'] = 'Workflow, um die ACL-Regeln zu ändern';
$string['worklowisrunning'] = 'Es läuft zur Zeit ein Workflow ab. Sie können die Sichtbarkeit momentan nicht ändern.';
$string['wrongmimetypedetected'] = 'Ein ungültiger MIME-Type wurde beim Upload von Video {$a->filename} aus Kurs {$a->coursename} genutzt.
Nur Video-Dateien sind erlaubt!';
