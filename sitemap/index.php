<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Ознакомьтесь со структорой сайта клуба единоборств \"Команда Е\". ⭐ Мы предлагаем тренировки для детей от 4 до 17 лет и взрослых любого уровня подготовки. Станьте частью нашей команды ✊, запишитесь на бесплатное пробное занятие по ☎️ 8 (999) 999-87-57, WhatsApp и Telegram.");
$APPLICATION->SetPageProperty("title", "Карта сайта");
$APPLICATION->SetTitle("Карта сайта");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.map",
    "main_map",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "COL_NUM" => "1",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "LEVEL" => "10",
        "SET_TITLE" => "N",
        "SHOW_DESCRIPTION" => "N"
    )
); ?>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>