<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Ошибка 404 - страница не найдена");
?>

<div class="h5 mt-0">Выберите любую другую страницу из списка:</div>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.map",
    "main_map",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "COL_NUM" => "1",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "LEVEL" => "10",
        "SET_TITLE" => "N",
        "SHOW_DESCRIPTION" => "N"
    )
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>