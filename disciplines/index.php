<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Наша школа единоборств в Москве ⭐ \"Команда Е\" предлагает увлекательные тренировки и мастер-классы, посвященные различным боевым искусствам: айкидо, бокс, бразильское джиу-джитсу (БЖЖ), дзюдо, самбо и многие другие. ⛰ Записывайтесь на бесплатное пробное занятие по ☎️ 8 (999) 999-87-57, WhatsApp и Telegram.");
$APPLICATION->SetPageProperty("title", "Дисциплины | Клуб единоборств в Москве | Школа боевых искусств");
$APPLICATION->SetTitle("Дисциплины");
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news",
    "disciplines",
    Array(
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("", ""),
        "DETAIL_PAGER_SHOW_ALL" => "N",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "",
        "DETAIL_PROPERTY_CODE" => array("ATT_PREVIEW_TEXT", "ATT_DETAIL_TEXT", "MORE_PHOTO", ""),
        "DETAIL_SET_CANONICAL_URL" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FILE_404" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "main_content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("", ""),
        "LIST_PROPERTY_CODE" => array("ATT_PREVIEW_TEXT", ""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "main_pagination",
        "PAGER_TITLE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/disciplines/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array(
            "detail" => "#ELEMENT_CODE#/",
            "news" => "",
            "section" => ""
        ),
        "SET_LAST_MODIFIED" => "Y",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_404" => "Y",
        "SHOW_FORM_BLOCK" => "N",
        "SMALL_CARD_TAG_TITLE" => "2",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N"
    )
); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>