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
 * Strings for component 'auth_saml2', language 'de', branch 'MOODLE_37_STABLE'
 *
 * @package   auth_saml2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowed_groups'] = 'Berechtigte Gruppen';
$string['alterlogout'] = 'Alternative Logout URL';
$string['alterlogout_help'] = 'Die URL, zu der ein Benutzer umgeleitet wird, nachdem alle internen Abmeldemechanismen ausgeführt wurden';
$string['anyauth_help'] = 'Ja: SAML-Login für alle Benutzer erlauben? Nein: Nur Benutzer, die saml2 als Typ haben.';
$string['attemptsignout_help'] = 'Dadurch wird versucht, mit dem IdP zu kommunizieren, um eine Abmeldeanforderung zu senden.';
$string['attrsimple_help'] = 'Verschiedene IdPs wie z.B. ADFS verwenden lange Attribut-Schlüssel wie urns oder Namespaced-XML-Schema-Namen. Wenn hier auf Ja gesetzt ist, werden diese vereinfacht, z.B. wird http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname auf \'givenname\' abgebildet.';
$string['auth_data_mapping'] = 'Daten-Mapping';
$string['auth_fieldmapping'] = 'Daten-Mapping ({$a})';
$string['autocreate'] = 'User automatisch erstellen';
$string['autocreate_help'] = 'Wenn Benutzer im IdP vorhanden sind, aber nicht in Moodle, wird ein Moodle-Konto erstellt.';
$string['availableidps'] = 'Wähle verfügbare IdPs.';
$string['availableidps_help'] = 'Wenn ein IdP-Metadaten-XML mehrere IdP-Entitäten enthält, müssen Sie auswählen, welche Entitäten für Benutzer verfügbar sind, mit denen sie sich einloggen können.';
$string['blockredirectheading'] = 'Konto-Sperraktionen';
$string['certificate'] = 'Zertifikat erneuern';
$string['certificatedetails'] = 'Zertifikatdetails';
$string['certificate_help'] = 'Erneuern Sie den privaten Schlüssel und das Zertifikat, die von diesem SP verwendet werden. | <a href=\'{$a}\'>SP-Zertifikat anzeigen</a>';
$string['countryname'] = 'Land';
$string['debug'] = 'Debuggen';
$string['duallogin_help'] = '<p>Wenn ein, dann sehen Benutzer sowohl das Handbuch als auch eine SAML-Login-Schaltfläche. Wenn aus, werden sie immer direkt zur IdP-Anmeldeseite weitergeleitet. </p>
<p>Wenn passiv, dann werden die Benutzer, die bereits im IDP authentifiziert sind, automatisch eingeloggt, andernfalls werden sie zur Moodle-Login-Seite geschickt.</p>
<p>Wenn deaktiviert, dann können Admins immer noch die manuelle Anmeldeseite über /login/index.php?saml=off</p> sehen.
<p>Wenn ein, dann können externe Seiten mit saml z.B. /course/view.php?id=45&saml=on</p> einen Deep Link in moodle setzen.';
$string['emailtaken'] = 'Es kann kein neues Konto erstellt werden, da die E-Mail-Adresse {$a} bereits registriert ist.';
$string['emailtakenupdate'] = 'Ihre E-Mail wurde nicht aktualisiert, da die E-Mail-Adresse {$a} bereits registriert ist.';
$string['errorparsingxml'] = 'Fehler beim Parsen von XML: {$a}';
$string['exception'] = 'SAML2-Exception: {$a}';
$string['flaggedresponsetypemessage'] = 'Benutzerdefinierte Nachricht anzeigen';
$string['flagmessage_default'] = 'Sie sind bei Ihrem Identitätsprovider eingeloggt, dieses Konto hat jedoch eingeschränkten Zugriff auf Moodle. Bitte wenden Sie sich an Ihren Administrator für weitere Einzelheiten.';
$string['flagmessage_help'] = '<p>Die Nachricht, die angezeigt werden soll, wenn ein Benutzer aufgrund von konfigurierten Gruppenbeschränkungen nicht auf Moodle zugreifen darf.</p>
<p>(Wird nur angezeigt, wenn \'Antworttyp\' auf \'Benutzerdefinierte Nachricht anzeigen\' steht.)</p>';
$string['flagresponsetype_help'] = 'Wenn der Zugang aufgrund von konfigurierten Gruppenbeschränkungen blockiert wird, wie solle Moodle reagieren?';
$string['idpmetadata_badurl'] = 'Ungültige Metadaten unter {$a}';
$string['idpmetadata_help'] = 'Um mehrere IdPs zu verwenden, geben Sie jede öffentliche Metadaten-URL in eine neue Zeile ein. <br/> Um einen Namen zu überschreiben, stellen Sie den Text vor das http. z.B. "Forced IdP Name http://ssp.local/simplesaml/saml2/idp/metadata.php".';
$string['idpmetadata_invalid'] = 'Das IdP XML ist ungültig';
$string['idpmetadata_noentityid'] = 'Das IdP XML hat keine entityID';
$string['idpmetadatarefresh'] = 'IdP Metadaten erneuern';
$string['idpnamedefault'] = 'Login via SAML2';
$string['idpnamedefault_varaible'] = 'Login via SAML2 ({$a})';
$string['logdir'] = 'Log-Verzeichnis';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'Das Log-Verzeichnis, in das SSPHP schreiben wird, die Datei wird simplesamlphp.log lauten.';
$string['manageidpsheading'] = 'Verfügbare IdPs verwalten';
$string['multiidpdropdown'] = 'Drop-Down Liste';
$string['nouser'] = 'Sie haben sich erfolgreich als \'{$a}\' eingeloggt, verfügen aber nicht über ein Konto in Moodle.';
$string['nullprivatecert'] = 'Erstellung des privaten Zertifikats gescheitert.';
$string['nullpubliccert'] = 'Erstellung des öffentlichen Zertifikats gescheitert.';
$string['organizationalunitname'] = 'Organisationseinheit';
$string['organizationname'] = 'Organisation';
$string['passivemode'] = 'Passiver Modus';
$string['phone1'] = 'Telefon';
$string['phone2'] = 'Mobiltelefon';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'Das SAML2-Authentifizierungs-Plugin speichert keine persönlichen Daten.';
$string['privatekeypass_help'] = 'Dies wird zum Signieren des lokalen Moodle-Zertifikats verwendet, eine Änderung führt zur Ungültigkeit des aktuellen Zertifikats.';
$string['regenerate_submit'] = 'Erneuern';
$string['rememberidp'] = 'Login-Service merken';
$string['required'] = 'Dieses Feld ist erforderlich';
$string['requireint'] = 'Dieses Feld ist erforderlich und muss eine positive ganze Zahl enthalten.';
$string['selectloginservice'] = 'Wählen Sie einen Login-Service';
$string['sha1'] = 'Veraltetes SHA1 (gefährlich)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['signaturealgorithm'] = 'Signierungs-Algorithmus';
$string['signaturealgorithm_help'] = 'Dies ist der Algorithmus, der zum Signieren von SAML-Anfragen verwendet wird. Warnung: Der SHA1-Algorithmus wird nur aus Gründen der Abwärtskompatibilität zur Verfügung gestellt. Wenn Sie ihn nicht unbedingt verwenden müssen, wird empfohlen, ihn zu vermeiden und stattdessen mindestens SHA256 zu verwenden.';
$string['spmetadata'] = 'SP Metadaten';
$string['spmetadatasign'] = 'SP Metadaten Signatur';
$string['spmetadatasign_help'] = 'Signieren Sie die SP-Metadaten.';
$string['sspversion'] = 'Die SimpleSAMLphp Version';
$string['stateorprovincename'] = 'Bundesland oder Provinz';
$string['suspendeduser'] = 'Sie haben sich erfolgreich als \'{$a}\' angemeldet, aber Ihr Konto wurde in Moodle gesperrt.';
$string['test_auth_button_login'] = 'IdP Login';
$string['test_auth_button_logout'] = 'IdP Logout';
$string['update_never'] = 'Nie';
$string['update_oncreate'] = 'Bei der Erstellung';
$string['update_onlogin'] = 'Bei jedem Login';
$string['update_onupdate'] = 'Beim Update';
$string['wrongauth'] = 'Sie haben sich erfolgreich als \'{$a}\' angemeldet, sind aber nicht berechtigt, auf Moodle zuzugreifen.';