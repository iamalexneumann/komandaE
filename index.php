<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
    <div>
        <h1>Зал единоборств для всей семьи</h1>
        <div>Учим "держать удар" перед трудностями и достигать поставленной цели</div>
        <button type="button"
                class="btn btn-sm btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#callbackModal"
                data-bs-modal-title="Бесплатная пробная тренировка">Бесплатная пробная тренировка</button>
    </div>
    <section>
        <h2>Дисциплины</h2>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news",
            ".default",
            array(
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
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "DETAIL_PAGER_SHOW_ALL" => "N",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "",
                "DETAIL_PROPERTY_CODE" => array(
                    0 => "ATT_LINKED_SCHEDULE",
                    1 => "ATT_PREVIEW_TEXT",
                    2 => "ATT_DETAIL_TEXT",
                    3 => "MORE_PHOTO",
                    4 => "ATT_LINKED_FEATURES",
                    5 => "ATT_LINKED_PRICES",
                ),
                "DETAIL_SET_CANONICAL_URL" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FILTER_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "FILTER_PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "main_content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "LIST_PROPERTY_CODE" => array(
                    0 => "",
                    1 => "ATT_PREVIEW_TEXT",
                    2 => "",
                    3 => "",
                ),
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "15",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "SEF_FOLDER" => "/disciplines/",
                "SEF_MODE" => "Y",
                "SET_LAST_MODIFIED" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
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
                "USE_SEARCH" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => ".default",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "SEF_URL_TEMPLATES" => array(
                    "news" => "",
                    "section" => "",
                    "detail" => "#ELEMENT_CODE#/",
                )
            ),
            false
        );?>
    </section>
    <section>
        <h2>Команда</h2>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news",
            ".default",
            array(
                "ADD_ELEMENT_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
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
                "DETAIL_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "DETAIL_PAGER_SHOW_ALL" => "N",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "",
                "DETAIL_PROPERTY_CODE" => array(
                    0 => "ATT_EXPERIENCE",
                    1 => "ATT_DISCIPLINE",
                    2 => "ATT_DETAIL_TEXT",
                    3 => "",
                ),
                "DETAIL_SET_CANONICAL_URL" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "main_content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "LIST_PROPERTY_CODE" => array(
                    0 => "ATT_EXPERIENCE",
                    1 => "ATT_DISCIPLINE",
                    2 => "ATT_PREVIEW_TEXT",
                    3 => "",
                ),
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "15",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "SEF_FOLDER" => "/team/",
                "SEF_MODE" => "Y",
                "SET_LAST_MODIFIED" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
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
                "USE_SEARCH" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => ".default",
                "SEF_URL_TEMPLATES" => array(
                    "news" => "",
                    "section" => "",
                    "detail" => "#ELEMENT_CODE#/",
                )
            ),
            false
        );?>
    </section>
    <section>
        <h2>Отзывы</h2>
        <?= \Bitrix\Main\Config\Option::get('askaron.settings', 'UF_YANDEX_REVIEWS', ''); ?>
    </section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>