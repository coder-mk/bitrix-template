<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="site-wrap">
	<header>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"horizontal_multilevel",
			Array(
				"ROOT_MENU_TYPE" => "top", 
				"MAX_LEVEL" => "3", 
				"CHILD_MENU_TYPE" => "left", 
				"USE_EXT" => "Y", 
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => Array()
			)
		);?>
	</header>
    <div class="site-content-wrap clear">
	  	<div class="site-content">
	  		<div class="site-content-middle">
	  			<h1><?$APPLICATION->ShowTitle(false)?></h1>