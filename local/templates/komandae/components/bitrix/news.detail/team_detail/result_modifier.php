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
 * @var CBitrixComponentTemplate $this
 */

$item_picture = $arResult['DETAIL_PICTURE'];
if ($item_picture) {
    $arResultPictureFileTmp = \CFile::ResizeImageGet(
        $item_picture,
        [
            'width' => 430,
            'height' => 650,
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    $arResultPictureLqipFileTmp = \CFile::ResizeImageGet(
        $item_picture,
        [
            'width' => 86,
            'height' => 130,
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    if ($arResultPictureFileTmp['src']) {
        $arResultPictureFileTmp['src'] = \CUtil::GetAdditionalFileURL($arResultPictureFileTmp['src'], true);
    }

    if ($arResultPictureLqipFileTmp['src']) {
        $arResultPictureLqipFileTmp['src'] = \CUtil::GetAdditionalFileURL($arResultPictureLqipFileTmp['src'], true);
    }

    $arResult['PICTURE'] = array_change_key_case($arResultPictureFileTmp, CASE_UPPER);
    $arResult['PICTURE_LQIP'] = array_change_key_case($arResultPictureLqipFileTmp, CASE_UPPER);
}