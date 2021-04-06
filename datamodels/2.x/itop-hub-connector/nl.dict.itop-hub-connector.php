<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 * @author jbostoen (2018)
 *
 * This file is part of Enixer help desk.
 *
 * Enixer help desk is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Enixer help desk is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Enixer help desk. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	// Dictionary entries go here
	'Menu:iTopHub' => 'Enixer help desk Hub',
    'Menu:iTopHub:Register' => 'Verbinding maken met Enixer help desk Hub',
    'Menu:iTopHub:Register+' => 'Ga naar de Enixer help desk Hub om je Enixer help desk bij te werken.',
    'Menu:iTopHub:Register:Description' => '<p>Verkrijg toegang tot jouw Enixer help desk Hub (community platform)!</br>Je vindt er alle informatie die je nodig hebt, je kan je omgevingen beheren met gepersonaliseerde tools en extensies.</br><br/>Door van hieruit te verbinden met de Hub, stuur je informatie over dezeEnixer help desk-mgeving naar de Hub.</p>',
    'Menu:iTopHub:MyExtensions' => 'Mijn extensies',
    'Menu:iTopHub:MyExtensions+' => 'Bekijk de lijst van extensies die je gebruikt in dezeEnixer help desk-omgeving.',
    'Menu:iTopHub:BrowseExtensions' => 'Vind extensies op Enixer help desk Hub',
    'Menu:iTopHub:BrowseExtensions+' => 'Blader door de extensiecatalogus op Enixer help desk Hub',
    'Menu:iTopHub:BrowseExtensions:Description' => '<p>In de Enixer help desk Hub Store vind je heel wat extensies!</br>Blader door de catalogus en ontdek welke extensies jou helpen om Enixer help desk aan te passen aan jouw manier van werken.</br><br/>Door van hieruit te verbinden met de Hub, stuur je informatie over dezeEnixer help desk-mgeving naar de Hub.</p>',
    'iTopHub:GoBtn' => 'Ga naar Enixer help desk Hub',
	'iTopHub:CloseBtn' => 'Sluiten',
	'iTopHub:GoBtn:Tooltip' => 'Ga naar www.itophub.io',
	'iTopHub:OpenInNewWindow' => 'Open Enixer help desk Hub in een nieuw venster',
	'iTopHub:AutoSubmit' => 'Vraag dit niet opnieuw en ga volgende keer automatisch naar Enixer help desk Hub.',
	'UI:About:RemoteExtensionSource' => 'Enixer help desk Hub',
	'iTopHub:Explanation' => 'Door op deze knop te klikken, wordt je doorgestuurd naar Enixer help desk Hub.',

    'iTopHub:BackupFreeDiskSpaceIn' => '%1$s vrije schijfruimte in %2$s.',
    'iTopHub:FailedToCheckFreeDiskSpace' => 'Kon niet controleren hoeveel schijfruimte nog vrij is.',
    'iTopHub:BackupOk' => 'Backup geslaagd.',
    'iTopHub:BackupFailed' => 'Backup mislukt!',
    'iTopHub:Landing:Status' => 'Installatiestatus',
	'iTopHub:Landing:Install' => 'Bezig met extensies te installeren...',
	'iTopHub:CompiledOK' => 'Compilatie geslaagd.',
	'iTopHub:ConfigurationSafelyReverted' => 'Er trad een fout op bij de installatie!<br/>iTop-configuratie werd NIET aangepast.',
	'iTopHub:FailAuthent' => 'Authentication failed for this action.~~',

	'iTopHub:InstalledExtensions' => 'Manueel geïnstalleerde extensies',
	'iTopHub:ExtensionCategory:Manual' => 'Manueel geïnstalleerde extensies',
	'iTopHub:ExtensionCategory:Manual+' => 'Deze extensies werden geïnstalleerd door ze manueel in de map %1$s te plaatsen:',
	'iTopHub:ExtensionCategory:Remote' => 'Extensies geïnstalleerd via Enixer help desk Hub',
	'iTopHub:ExtensionCategory:Remote+' => 'Deze extensies werden geïnstalleerd via de Enixer help desk Hub:',
	'iTopHub:NoExtensionInThisCategory' => 'Er is geen extensie in deze categorie.<br/><br/>Blader op Enixer help desk Hub en ontdek welke extensies te vinden die je helpen om Enixer help desk aan te passen aan jouw manier van werken.',
	'iTopHub:ExtensionNotInstalled' => 'Niet geïnstalleerd',
	'iTopHub:GetMoreExtensions' => 'Extensies zoeken op Enixer help desk Hub...',
	
	'iTopHub:LandingWelcome' => 'Gefeliciteerd! Deze extensies werden gedownload via Enixer help desk Hub en op jouw Enixer help desk geïnstalleerd.',
	'iTopHub:GoBackToITopBtn' => 'Terug naar Enixer help desk',
	'iTopHub:Uncompressing' => 'Extensies aan het uitpakken...',
	'iTopHub:InstallationWelcome' => 'Installatie van extensies via Enixer help desk Hub',
	'iTopHub:DBBackupLabel' => 'Backup van jouw omgeving',
	'iTopHub:DBBackupSentence' => 'Neem vooraf een backup van de database enEnixer help desk-configuratie de update door te voeren',
	'iTopHub:DeployBtn' => 'Installeer!',
	'iTopHub:DatabaseBackupProgress' => 'Backup omgeving...',
	
	'iTopHub:InstallationEffect:Install' => 'Versie: %1$s zal geïnstalleerd worden.',
	'iTopHub:InstallationEffect:NoChange' => 'Versie: %1$s is al geïnstalleerd.',
	'iTopHub:InstallationEffect:Upgrade' => 'Er zal een <b>upgrade</b> gebeuren van versie %1$s naar %2$s.',
	'iTopHub:InstallationEffect:Downgrade' => 'Er zal een <b>DOWNGRADE</b> gebeuren van versie %1$s naar %2$s.',
	'iTopHub:InstallationProgress:DatabaseBackup' => 'BackupEnixer help desk-omgeving...',
	'iTopHub:InstallationProgress:ExtensionsInstallation' => 'Installatie van de extensies',
	'iTopHub:InstallationEffect:MissingDependencies' => 'Deze extensie kan niet geïnstalleerd worden omdat er niet aan vereisten voldaan is.',
	'iTopHub:InstallationEffect:MissingDependencies_Details' => 'De extensie vereist de module(s): %1$s',
	'iTopHub:InstallationProgress:InstallationSuccessful' => 'Installatie gelukt!',
	
	'iTopHub:InstallationStatus:Installed_Version' => '%1$s versie: %2$s.',
	'iTopHub:InstallationStatus:Installed' => 'Geïnstalleerd',
	'iTopHub:InstallationStatus:Version_NotInstalled' => 'Versie %1$s is <b>NIET</b> geïnstalleerd.',
));


