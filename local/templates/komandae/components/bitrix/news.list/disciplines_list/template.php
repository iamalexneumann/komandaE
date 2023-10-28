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
<div class="discipline-list">
    <?php
    foreach ($arResult['ITEMS'] as $arItem_key => $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            [
                'CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'),
            ]
        );
    ?>
    <article class="discipline-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"
           class="discipline-item__img-link"
           title="<?= $arItem['NAME']; ?>"
           rel="nofollow">
            <img src="<?= $arItem['PICTURE_LQIP']['SRC']; ?>"
                 data-src="<?= $arItem['PICTURE']['SRC']; ?>"
                 class="discipline-item__img lazyload blur-up"
                 alt="<?= $arItem['NAME']; ?>"
                 width="<?= $arItem['PICTURE']['WIDTH']; ?>"
                 height="<?= $arItem['PICTURE']['HEIGHT']; ?>">
        </a>
        <div class="discipline-item__wrapper">
            <header class="discipline-item__header">
                <h<?=$param_small_card_tag_title; ?> class="discipline-item__title h2">
                    <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="discipline-item__link"><?= $arItem['NAME']; ?></a>
                </h<?=$param_small_card_tag_title; ?>>
            </header>

            <?php if ($arItem['DISPLAY_PROPERTIES']['ATT_PREVIEW_TEXT']['~VALUE']): ?>
            <div class="discipline-item__preview-text">
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

            <footer class="discipline-item__footer">
                <div class="discipline-item__btns">
                    <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"
                       rel="nofollow"
                       class="btn btn-outline-primary"><?= Loc::getMessage('DISCIPLINES_LIST_BTN_MORE_TEXT'); ?></a>
                    <button type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#callbackModal"
                            data-bs-modal-title="<?= Loc::getMessage('DISCIPLINES_LIST_CALLBACK_MODAL_TITLE'); ?>"
                            data-bs-modal-service="<?= $arItem['NAME']; ?>"><?= Loc::getMessage('DISCIPLINES_LIST_BTN_ORDER_TEXT'); ?></button>
                </div>
            </footer>
        </div>
    </article>
    <?php endforeach; ?>
<?php
if ($arParams['DISPLAY_BOTTOM_PAGER']) {
    echo $arResult['NAV_STRING'];
}
?>
</div>
<?php endif; ?>