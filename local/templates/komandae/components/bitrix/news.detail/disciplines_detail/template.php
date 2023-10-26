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

    <div class="main-section">
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
    </div>
</div>
<?php $helper->saveCache(); ?>