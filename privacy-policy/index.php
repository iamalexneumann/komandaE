<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "На странице \"Политика обработки персональных данных\" ⭐ школы единоборств \"Команда Е\" представлена информация о том, как мы обрабатываем и защищаем персональные данные наших клиентов. ✨ Для записи на бесплатное пробное занятие вы можете связаться с нами по телефону ☎️ 8 (999) 999-87-57, а также через WhatsApp и Telegram.");
$APPLICATION->SetPageProperty("title", "Политика обработки персональных данных клуба единоборств");
$APPLICATION->SetTitle("Политика обработки персональных данных");
?>

<?php
$APPLICATION->IncludeComponent(
    "sprint.editor:blocks",
    ".default",
    Array(
        "JSON" => \Bitrix\Main\Config\Option::get('askaron.settings', 'UF_PAGE_PRIVACY_POLICY', '')
    )
); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>