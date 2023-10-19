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

$param_small_card_tag_title = $arParams['SMALL_CARD_TAG_TITLE'] ?? '2';
?>
<?php if (count($arResult['ITEMS']) > 0): ?>
<div class="team-list">
    <?php
    foreach ($arResult['ITEMS'] as $arItem_key => $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            [
                'CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'),
            ]
        );
    ?>
    <article class="team-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"
           class="team-item__img-link"
           title="<?= $arItem['NAME']; ?>"
           rel="nofollow">
            <img src="<?= $arItem['PICTURE_LQIP']['SRC']; ?>"
                 data-src="<?= $arItem['PICTURE']['SRC']; ?>"
                 class="team-item__img lazyload blur-up"
                 alt="<?= $arItem['NAME']; ?>"
                 width="<?= $arItem['PICTURE']['WIDTH']; ?>"
                 height="<?= $arItem['PICTURE']['HEIGHT']; ?>">
        </a>
        <div class="team-item__wrapper">
            <header class="team-item__header">
                <h<?=$param_small_card_tag_title; ?> class="team-item__title h2">
                    <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="team-item__link"><?= $arItem['NAME']; ?></a>
                </h<?=$param_small_card_tag_title; ?>>

                <?php if ($arItem['DISPLAY_PROPERTIES']['ATT_EXPERIENCE']['VALUE']): ?>
                <div class="team-item__experience">
                    <span><?= Loc::getMessage('TEAM_LIST_ATT_EXPERIENCE_TITLE'); ?>:</span>
                    <?= get_text_with_declension(
                        Loc::getMessage('TEAM_LIST_ATT_EXPERIENCE_DECLENSION_ONE'),
                        Loc::getMessage('TEAM_LIST_ATT_EXPERIENCE_DECLENSION_FOUR'),
                        Loc::getMessage('TEAM_LIST_ATT_EXPERIENCE_DECLENSION_FIVE'),
                        $arItem['DISPLAY_PROPERTIES']['ATT_EXPERIENCE']['VALUE']
                    ); ?>
                </div>
                <?php endif; ?>

                <?php if ($arItem['DISPLAY_PROPERTIES']['ATT_DISCIPLINE']['VALUE']): ?>
                <div class="team-item__disciplines">
                    <span><?= Loc::getMessage('TEAM_LIST_ATT_DISCIPLINE_TITLE'); ?>:</span>
                    <ul class="disciplines-list">
                        <?php foreach ($arItem['DISPLAY_PROPERTIES']['ATT_DISCIPLINE']['LINK_ELEMENT_VALUE'] as $discipline): ?>
                        <li class="disciplines-list__item">
                            <a href="<?= $discipline['DETAIL_PAGE_URL']; ?>" class="disciplines-list__link"><?= $discipline['NAME']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </header>

            <?php if ($arItem['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE']): ?>
            <div class="team-item__preview-text">
                <?php
                $APPLICATION->IncludeComponent(
                    "sprint.editor:blocks",
                    ".default",
                    Array(
                        "JSON" => $arItem['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE'],
                    ),
                    $component,
                    Array(
                        "HIDE_ICONS" => "Y"
                    )
                ); ?>
            </div>
            <?php endif; ?>

            <footer class="team-item__footer">
                <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"
                   rel="nofollow"
                   class="btn btn-primary team-item__btn"><?= Loc::getMessage('TEAM_LIST_BTN_MORE_TEXT'); ?></a>
            </footer>
        </div>
    </article>
    <?php endforeach; ?>
</div>
<?php
if ($arParams['DISPLAY_BOTTOM_PAGER']) {
    echo $arResult['NAV_STRING'];
}
?>
<?php endif; ?>