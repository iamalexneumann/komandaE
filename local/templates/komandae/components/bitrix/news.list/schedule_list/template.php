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
<nav class="schedule-nav">
    <?php foreach ($arResult['ITEMS'] as $arItem_key => $arItem): ?>
    <a class="schedule-nav__item btn btn-sm btn-outline-primary" href="#<?= $arItem['CODE']; ?>"><?= $arItem['NAME']; ?></a>
    <?php endforeach; ?>
</nav>
<?php endif; ?>
<?php if (count($arResult['ITEMS']) > 0): ?>
<div class="schedule-list">
    <?php
    foreach ($arResult['ITEMS'] as $arItem_key => $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            [
                'CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'),
            ]
        );
        ?>

    <?php endforeach; ?>
    <?php
    foreach ($arResult['ITEMS'] as $arItem_key => $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            [
                'CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'),
            ]
        );
    ?>
    <section class="schedule-item" id="<?= $this->GetEditAreaId($arItem['ID']) ;?>">
        <h<?=$param_small_card_tag_title; ?> class="schedule-item__title" id="<?= $arItem['CODE']; ?>">
            <?= $arItem['NAME']; ?>
        </h<?=$param_small_card_tag_title; ?>>
        <?php if ($arItem['DISPLAY_PROPERTIES']['ATT_SCHEDULE']['~VALUE']): ?>
        <div class="schedule-item__table">
            <?php
            $APPLICATION->IncludeComponent(
                "sprint.editor:blocks",
                ".default",
                Array(
                    "JSON" => $arItem['DISPLAY_PROPERTIES']['ATT_SCHEDULE']['~VALUE'],
                ),
                $component,
                Array(
                    "HIDE_ICONS" => "Y"
                )
            ); ?>
        </div>
        <?php endif; ?>
        <div class="schedule-item__btns">
            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="btn btn-outline-primary"><?= Loc::getMessage('SCHEDULE_LIST_BTN_MORE_TEXT'); ?></a>
            <button type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#callbackModal"
                    data-bs-modal-title="<?= Loc::getMessage('SCHEDULE_LIST_CALLBACK_MODAL_TITLE'); ?>"
                    data-bs-modal-service="<?= $arItem['NAME']; ?>"><?= Loc::getMessage('SCHEDULE_LIST_BTN_ORDER_TEXT'); ?></button>
        </div>
    </section>
    <?php endforeach; ?>
</div>
<?php
if ($arParams['DISPLAY_BOTTOM_PAGER']) {
    echo $arResult['NAV_STRING'];
}
?>
<?php endif; ?>