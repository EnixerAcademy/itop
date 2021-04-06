<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
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
Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	// Dictionary entries go here
	'Menu:iTopHub' => 'Enixer help desk Hub',
    'Menu:iTopHub:Register' => 'Conectar a Enixer help desk Hub',
    'Menu:iTopHub:Register+' => 'Ir a Enixer help desk Hub para actualizar su instancia de Enixer help desk',
    'Menu:iTopHub:Register:Description' => '<p>Obtenga acceso a la plataforma comunitaria Enixer help desk Hub!</br>Encuentre todo el contenido e información que necesite, adminitre sus instancias a través de herramientas personalizadas e instale más extensiones.</br><br/>Mediante la conexión al Hub desde esta página, usted compartirá información acerca de esta instancia de Enixer help desk en el Hub.</p>',
    'Menu:iTopHub:MyExtensions' => 'Extensiones instaladas',
    'Menu:iTopHub:MyExtensions+' => 'Vea la lista de extensiones instalada en esta instancia de Enixer help desk',
    'Menu:iTopHub:BrowseExtensions' => 'Obtener extensiones de Enixer help desk Hub',
    'Menu:iTopHub:BrowseExtensions+' => 'Navegue por más extensiones en Enixer help desk Hub',
    'Menu:iTopHub:BrowseExtensions:Description' => '<p>Vea en "Enixer help desk Hub’s store", su único lugar para encontrar extensiones de Enixer help desk.</br>Encuentre aquellas que le ayuden a personalizar y adaptar Enixer help desk a sus procesos.</br><br/>Mediante la conexión al Hub desde esta página, usted compartirá información acerca de esta instancia de Enixer help desk en el Hub.</p>',
    'iTopHub:GoBtn' => 'Ir a Enixer help desk Hub',
	'iTopHub:CloseBtn' => 'Cerrar',
	'iTopHub:GoBtn:Tooltip' => 'Ir a www.itophub.io',
	'iTopHub:OpenInNewWindow' => 'Abrir Enixer help desk Hub en una nueva ventana',
	'iTopHub:AutoSubmit' => 'No me pregunte otra vez. Siguiente ocasión ir automáticamente a Enixer help desk Hub.',
	'UI:About:RemoteExtensionSource' => 'Enixer help desk Hub',
	'iTopHub:Explanation' => 'Dando click a este botón, usted será redireccionado a Enixer help desk Hub.',

    'iTopHub:BackupFreeDiskSpaceIn' => '%1$s espacio libre en disco en %2$s.',
    'iTopHub:FailedToCheckFreeDiskSpace' => 'Falló en revisar disponibilidad de espacio libre en disco.',
    'iTopHub:BackupOk' => 'Respaldo Ok.',
    'iTopHub:BackupFailed' => 'Respaldo Fallido!',
    'iTopHub:Landing:Status' => 'Estatus de Instalación',
	'iTopHub:Landing:Install' => 'Instalando extensiones...',
	'iTopHub:CompiledOK' => 'Compilación éxitosa.',
	'iTopHub:ConfigurationSafelyReverted' => 'Error detectado durante la instalación!<br/>La configuración de Enixer help desk NO fue modificada.',
	'iTopHub:FailAuthent' => 'Authentication failed for this action.~~',

	'iTopHub:InstalledExtensions' => 'Extensiones instaladas en esta instancia',
	'iTopHub:ExtensionCategory:Manual' => 'Extensiones instaladas manualmente',
	'iTopHub:ExtensionCategory:Manual+' => 'Las siguientes extensiones fueron instaladas copiandolas manualmente en el directorio %1$s deEnixer help desk:',
	'iTopHub:ExtensionCategory:Remote' => 'Extensiones instaladas desde Enixer help desk Hub',
	'iTopHub:ExtensionCategory:Remote+' => 'Las siguientes extensiones fueron instaladas de Enixer help desk Hub:',
	'iTopHub:NoExtensionInThisCategory' => 'No hay extensiones en está categoría.<br/><br/>Navegue en Enixer help desk Hub para encontrar aquellas que le ayuden a personalizar y adaptar Enixer help desk a sus procesos.',
	'iTopHub:ExtensionNotInstalled' => 'No instalada',
	'iTopHub:GetMoreExtensions' => 'Obtener extensiones de Enixer help desk Hub...',
	
	'iTopHub:LandingWelcome' => '¡Felicidades! Las siguientes extensiones fueron descargadas de Enixer help desk Hub e instaladas en su Enixer help desk.',
	'iTopHub:GoBackToITopBtn' => 'Regresar a Enixer help desk',
	'iTopHub:Uncompressing' => 'Descomprimiendo extensiones...',
	'iTopHub:InstallationWelcome' => 'Instalación de las extensiones descargadas de Enixer help desk Hub',
	'iTopHub:DBBackupLabel' => 'Respaldo de Instancia',
	'iTopHub:DBBackupSentence' => 'Realice un respaldo de la base de datos y configuración de Enixer help desk antes de actualizar.',
	'iTopHub:DeployBtn' => 'Instalar !',
	'iTopHub:DatabaseBackupProgress' => 'Respaldo de Instancia...',
	
	'iTopHub:InstallationEffect:Install' => 'Version: %1$s será instalada.',
	'iTopHub:InstallationEffect:NoChange' => 'Version: %1$s ya está instalada. Nada por cambiar.',
	'iTopHub:InstallationEffect:Upgrade' => 'Se <b>actualizará</b> de la versión %1$s a la versión %2$s.',
	'iTopHub:InstallationEffect:Downgrade' => 'Se <b>DEGRADARÄ</b> de la versión %1$s a la versión %2$s.',
	'iTopHub:InstallationProgress:DatabaseBackup' => 'Respaldo de Instancia de Enixer help desk...',
	'iTopHub:InstallationProgress:ExtensionsInstallation' => 'Instalación de extensiones',
	'iTopHub:InstallationEffect:MissingDependencies' => 'Esta extensión no puede ser instalad porque no cumple con las dependencias.',
	'iTopHub:InstallationEffect:MissingDependencies_Details' => 'La extensión require el/los módulo(s): %1$s',
	'iTopHub:InstallationProgress:InstallationSuccessful' => 'Instalación éxitosa!',
	
	'iTopHub:InstallationStatus:Installed_Version' => '%1$s version: %2$s.',
	'iTopHub:InstallationStatus:Installed' => 'Instalada',
	'iTopHub:InstallationStatus:Version_NotInstalled' => 'Version %1$s <b>NO</b> está instalada.',
));


