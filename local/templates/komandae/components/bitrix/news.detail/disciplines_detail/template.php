<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var array $arLangMessages
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $parentTemplateFolder
 * @var string $componentPath
 * @var array $templateData
 * @var CBitrixComponent $component
 */
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
$more_photos = $arResult['DISPLAY_PROPERTIES']['MORE_PHOTO'] ?? '';
?>
<div class="discipline-detail">
    <div class="first-screen" style="background: url(<?= $arResult['FIRST_SCREEN_PICTURE']['SRC']; ?>) 50% 50% no-repeat; background-size: cover;">
        <div class="container">
            <div class="first-screen__wrapper">
                <header class="first-screen__header">
                    <?php
                    $helper = new PHPInterface\ComponentHelper($component);
                    $helper->deferredCall('ShowNavChain', array('breadcrumb'));
                    ?>
                    <h1 class="first-screen__title"><?= $arResult['META_TAGS']['TITLE']; ?></h1>
                </header>

                <button type="button"
                        class="btn btn-warning first-screen__btn"
                        data-bs-toggle="modal"
                        data-bs-target="#callbackModal"
                        data-bs-modal-title="<?= Loc::getMessage('DISCIPLINES_DETAIL_CALLBACK_MODAL_TITLE'); ?>"><?= Loc::getMessage('DISCIPLINES_DETAIL_BTN_ORDER_TEXT'); ?></button>
            </div>
        </div>
    </div>
    <div class="main-section">
        <div class="container">
            <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE']): ?>
            <div class="discipline-detail__preview-text">
                <?php
                $APPLICATION->IncludeComponent(
                    "sprint.editor:blocks",
                    ".default",
                    Array(
                        "JSON" => $arResult['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE'],
                    ),
                    $component,
                    Array(
                        "HIDE_ICONS" => "Y"
                    )
                ); ?>
            </div>
            <?php endif; ?>

            <?php if ($more_photos):  ?>
            <figure role="group" class="photos-list">
                <div class="row photos-list__row">
                    <?php foreach ($more_photos['VALUE'] as $key => $more_photo): ?>
                    <div class="col-lg-4 col-6 photos-list__col">
                        <figure class="photos-list__item">
                            <a href="<?= $more_photos['FILE_VALUE'][$key]['SRC'] ?: $more_photos['FILE_VALUE']['SRC']; ?>"
                               data-fancybox="photos-list" class="photos-list__link"
                                title="<?= $arResult['META_TAGS']['TITLE'] .
                                ' ' . Loc::getMessage('DISCIPLINES_DETAIL_PHOTOS_ALT_TEXT') . $key + 1; ?>"
                                data-caption="<?= $arResult['META_TAGS']['TITLE'] .
                                ' ' . Loc::getMessage('DISCIPLINES_DETAIL_PHOTOS_ALT_TEXT') . $key + 1; ?>">
                                <img src="<?= $more_photos['PICTURE_LQIP'][$key]['SRC']; ?>"
                                     data-src="<?= $more_photos['PICTURE'][$key]['SRC']; ?>"
                                     alt="<?= $arResult['META_TAGS']['TITLE'] .
                                     ' ' . Loc::getMessage('DISCIPLINES_DETAIL_PHOTOS_ALT_TEXT') . $key + 1; ?>"
                                     class="photos-list__img lazyload blur-up"
                                     width="<?= $more_photos['PICTURE'][$key]['WIDTH']; ?>"
                                     height="<?= $more_photos['PICTURE'][$key]['HEIGHT']; ?>">
                            </a>
                        </figure>
                    </div>
                    <?php endforeach; ?>
                </div>
            </figure>
            <?php endif; ?>
        </div>
    </div>
    <section class="main-section main-section_light-bg-color">
        <div class="container">
            <header class="main-section__header">
                <h2 class="main-section__title"><?= Loc::getMessage('DISCIPLINES_DETAIL_SCHEDULE_SECTION_TITLE'); ?></h2>
            </header>
            <?php
            $GLOBALS['SCHEDULE_FILTER'] = ['NAME' => $arResult['NAME'], 'CODE' => $arResult['CODE']];

            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "schedule_list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "SCHEDULE_FILTER",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "main_content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "main_pagination",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ATT_SCHEDULE", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SHOW_FORM_BLOCK" => "N",
                    "SMALL_CARD_TAG_TITLE" => "2",
                    "DISCIPLINE_PAGE" => "Y",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                ),
                $component,
                Array(
                    "HIDE_ICONS" => "Y"
                )
            ); ?>
            <button type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#callbackModal"
                    data-bs-modal-title="<?= Loc::getMessage('DISCIPLINES_DETAIL_CALLBACK_MODAL_TITLE'); ?>"><?= Loc::getMessage('DISCIPLINES_DETAIL_BTN_ORDER_TEXT'); ?></button>
        </div>
    </section>
    <section class="main-section">
        <div class="container">
            <header class="main-section__header">
                <h2 class="main-section__title"><?= Loc::getMessage('DISCIPLINES_DETAIL_TEAM_SECTION_TITLE'); ?></h2>
                <div class="main-section__subtitle"><?= Loc::getMessage('DISCIPLINES_DETAIL_TEAM_SECTION_SUBTITLE'); ?></div>
            </header>
            <?php
            $GLOBALS['TEAM_FILTER'] = ['=PROPERTY_ATT_DISCIPLINE' => $arResult['ID']];

            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "team_list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "TEAM_FILTER",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "main_content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "main_pagination",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ATT_EXPERIENCE", "ATT_PREVIEW_TEXT"),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SHOW_FORM_BLOCK" => "N",
                    "SMALL_CARD_TAG_TITLE" => "3",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                ),
                $component,
                Array(
                    "HIDE_ICONS" => "Y"
                )
            ); ?>
        </div>
    </section>
    <div class="main-section main-section_light-bg-color">
        <div class="container">
            <div class="main-section__header">
                <div class="main-section__title h2"><?= Loc::getMessage('DISCIPLINES_DETAIL_REVIEWS_SECTION_TITLE'); ?></div>
                <div class="main-section__subtitle"><?= Loc::getMessage('DISCIPLINES_DETAIL_REVIEWS_SECTION_SUBTITLE'); ?></div>
            </div>
            <div class="yandex-reviews">
                <?= \Bitrix\Main\Config\Option::get('askaron.settings', 'UF_YANDEX_REVIEWS', ''); ?>
            </div>
        </div>
    </div>
    <section class="main-section">
        <div class="container">
            <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_DETAIL_TEXT']['~VALUE']): ?>
            <div class="discipline-detail__detail-text">
                <?php
                $APPLICATION->IncludeComponent(
                    "sprint.editor:blocks",
                    ".default",
                    Array(
                        "JSON" => $arResult['DISPLAY_PROPERTIES']['ATT_DETAIL_TEXT']['~VALUE'],
                    ),
                    $component,
                    Array(
                        "HIDE_ICONS" => "Y"
                    )
                ); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>
<?php $helper->saveCache(); ?>