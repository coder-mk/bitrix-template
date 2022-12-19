<?php
use \Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();

$currentNamespace = '\Site\Main';

$eventManager->addEventHandler(
    'catalog',
    'OnSuccessCatalogImport1C',
    array( $currentNamespace.'\Catalog\Event\Import\Import1C', 'OnSuccessCatalogImport1CHandler')
);

//обработка обработка включения версии для слабовидящих
AddEventHandler("main", "OnBeforeProlog", "checkSpecial", 1);

function checkSpecial()
{
    global $APPLICATION;
    $redirect = false;
    if (isset($_REQUEST['special']) && $_REQUEST['special'] == 'Y') {
        $APPLICATION->set_cookie('SPECIAL_MODE', 'Y', false);
        $redirect = true;
    } elseif (isset($_REQUEST['special']) && $_REQUEST['special'] == 'n') {
        $APPLICATION->set_cookie('SPECIAL_MODE', 'N', false);
        $redirect = true;
    }
    if ($redirect)
        LocalRedirect($APPLICATION->GetCurPageParam('', array('special')));
}
?>


