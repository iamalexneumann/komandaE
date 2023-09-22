<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var CMain $APPLICATION
 * @var CMain $CurDir
 * @var CSite $arSite
 * @var COption $siteparam_logo_name
 * @var COption $siteparam_logo_description
 * @var COption $siteparam_scripts_head
 * @var COption $siteparam_scripts_body_before
 * @var COption $siteparam_main_logo
 * @var COption $siteparam_phone
 * @var COption $siteparam_phone_tel
 * @var COption $siteparam_mobile_phone
 * @var COption $siteparam_mobile_phone_tel
 * @var COption $siteparam_schedule
 * @var COption $siteparam_whatsapp
 * @var COption $siteparam_whatsapp_tel
 * @var COption $siteparam_whatsapp_message
 * @var COption $siteparam_telegram
 * @var COption $siteparam_address
 * @var COption $siteparam_email
 */
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);

$patterns = [
// '#^/services/([0-9a-zA-Z_-]+)/([0-9a-zA-Z_-]+)/$#',
];

$other_patterns = [

];
?>
    <!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">
    <head>
        <title><?php $APPLICATION->ShowTitle(); ?> | <?= $siteparam_logo_name; ?></title>
        <?php
        echo $siteparam_scripts_head;
        use Bitrix\Main\UI\Extension;
        use Bitrix\Main\Page\Asset;
        Extension::load(
            [
                'ui.bootstrap5',
                'ui.fonts.font-awesome',
                'ui.fonts.montserrat',
                'ui.fancybox',
                'ui.lazysizes',
                'ui.show_more',
            ]
        );
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main.js');
        $APPLICATION->ShowHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/safari-pinned-tab.svg" color="#25278b">
        <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#25278b">
        <meta name="msapplication-config" content="<?= SITE_TEMPLATE_PATH; ?>/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#25278b">
    </head>
<body id="body-area">
<?= $siteparam_scripts_body_before; ?>
<?php $APPLICATION->ShowPanel(); ?>
    <header class="main-header">
        <div class="container-fluid">
            <a <?php if ($CurDir !== '/'): ?> href="/"<?php endif; ?>
                class="main-header__logo logo"
                title="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                <img src="<?= $siteparam_main_logo; ?>"
                     class="logo__img" width="70" height="40" alt="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                <span class="logo__wrapper">
                    <?php if ($siteparam_logo_description): ?>
                    <span class="logo__description"><?= custom_lcfirst($siteparam_logo_description); ?></span>
                    <?php endif; ?>
                    <span class="logo__name"><?= $siteparam_logo_name; ?></span>
                </span>
            </a>
        </div>
    </header>
<main class="<?= (use_wide_template($CurDir, $patterns) === false) ? 'main-area' : 'wide-area'; ?>">
<?php if (!($CurDir === '/') && (use_wide_template($CurDir, $other_patterns) === false)): ?>
    <header class="page-header">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                Array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => SITE_ID,
                ),
                false
            ); ?>
            <h1 class="page-header__title"><?php $APPLICATION->ShowTitle(null, false); ?></h1>
            <?php $APPLICATION->ShowViewContent('MAIN_SUBTITLE'); ?>
        </div>
    </header>
    <?php if (use_wide_template($CurDir, $patterns) === false): ?>
        <div class="container">
    <?php endif; ?>
<?php endif; ?>