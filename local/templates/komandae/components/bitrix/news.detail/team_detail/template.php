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
?>
<div class="team-detail">
    <div class="team-item">
        <a href="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>"
           class="team-item__img-link"
           data-fancybox="team-item"
           title="<?= $arResult['NAME']; ?>"
           data-caption="<?= $arResult['NAME']; ?>">
            <img src="<?= $arResult['PICTURE_LQIP']['SRC']; ?>"
                 data-src="<?= $arResult['PICTURE']['SRC']; ?>"
                 class="team-item__img lazyload blur-up"
                 alt="<?= $arResult['NAME']; ?>"
                 width="<?= $arResult['PICTURE']['WIDTH']; ?>"
                 height="<?= $arResult['PICTURE']['HEIGHT']; ?>">
        </a>
        <div class="team-item__wrapper">
            <div class="team-item__header">
                <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_EXPERIENCE']['VALUE']): ?>
                <div class="team-item__experience">
                    <span><?= Loc::getMessage('TEAM_DETAIL_ATT_EXPERIENCE_TITLE'); ?>:</span>
                    <?= get_text_with_declension(
                        Loc::getMessage('TEAM_DETAIL_ATT_EXPERIENCE_DECLENSION_ONE'),
                        Loc::getMessage('TEAM_DETAIL_ATT_EXPERIENCE_DECLENSION_FOUR'),
                        Loc::getMessage('TEAM_DETAIL_ATT_EXPERIENCE_DECLENSION_FIVE'),
                        $arResult['DISPLAY_PROPERTIES']['ATT_EXPERIENCE']['VALUE']
                    ); ?>
                </div>
                <?php endif; ?>

                <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_DISCIPLINE']['VALUE']): ?>
                <div class="team-item__disciplines">
                    <span><?= Loc::getMessage('TEAM_DETAIL_ATT_DISCIPLINE_TITLE'); ?>:</span>
                    <ul class="disciplines-list">
                        <?php foreach ($arResult['DISPLAY_PROPERTIES']['ATT_DISCIPLINE']['LINK_ELEMENT_VALUE'] as $discipline): ?>
                        <li class="disciplines-list__item">
                            <a href="<?= $discipline['DETAIL_PAGE_URL']; ?>" class="disciplines-list__link"><?= $discipline['NAME']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE']): ?>
            <div class="team-item__preview-text">
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

            <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_DETAIL_TEXT']['~VALUE']): ?>
            <div class="team-item__detail-text">
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
    </div>

    <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_SCHEDULE']['~VALUE']): ?>
    <section class="team-section">
        <h2 class="team-section__title"><?= Loc::getMessage('TEAM_DETAIL_SCHEDULE_SECTION_TITLE'); ?></h2>
        <?php
        $APPLICATION->IncludeComponent(
            "sprint.editor:blocks",
            ".default",
            array(
                "JSON" => $arResult['DISPLAY_PROPERTIES']['ATT_SCHEDULE']['~VALUE'],
            ),
            $component,
            array(
                "HIDE_ICONS" => "Y"
            )
        );  ?>
    </section>
    <?php endif; ?>

    <?php if ($arResult['DISPLAY_PROPERTIES']['ATT_PRICE']['~VALUE']): ?>
    <section class="team-section">
        <h2 class="team-section__title"><?= Loc::getMessage('TEAM_DETAIL_PRICE_SECTION_TITLE'); ?></h2>
        <?php
        $APPLICATION->IncludeComponent(
            "sprint.editor:blocks",
            ".default",
            array(
                "JSON" => $arResult['DISPLAY_PROPERTIES']['ATT_PRICE']['~VALUE'],
            ),
            $component,
            array(
                "HIDE_ICONS" => "Y"
            )
        ); ?>
    </section>
    <?php endif; ?>
</div>