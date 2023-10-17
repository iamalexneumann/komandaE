<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
require($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/variables.php');
/**
 * @var CMain $APPLICATION
 * @var CMain $CurDir
 * @var CSite $arSite
 * @var COption $siteparam_logo_name
 * @var COption $siteparam_logo_description
 * @var COption $siteparam_scripts_head
 * @var COption $siteparam_scripts_body_before
 * @var COption $siteparam_main_logo
 * @var COption $siteparam_main_phone
 * @var COption $siteparam_main_phone_tel
 * @var COption $siteparam_schedule
 * @var COption $siteparam_whatsapp_number
 * @var COption $siteparam_whatsapp_number_tel
 * @var COption $siteparam_whatsapp_message
 * @var COption $siteparam_telegram_link
 * @var COption $siteparam_address
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
        <title><?php $APPLICATION->ShowTitle(); ?> | <?= htmlspecialchars($arSite['NAME']); ?></title>
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
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <a <?php if ($CurDir !== '/'): ?> href="/"<?php endif; ?>
                class="navbar__logo logo"
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false"
                    data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-label="<?= Loc::getMessage('HEADER_NAVBAR_ARIA_LABEL'); ?>">
                <span class="navbar-toggler__text"><?= Loc::getMessage('HEADER_NAVBAR_TOGGLER_TEXT'); ?></span>
                <span class="navbar-toggler__icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="navbar-wrapper">
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "main_submenu",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "main_menu",
                            "USE_EXT" => "Y",
                            "COMPONENT_TEMPLATE" => "main_menu"
                        ),
                        false
                    ); ?>
                    <div class="navbar-contacts">
                        <div class="navbar-contacts__wrapper">
                            <a class="navbar-contacts__main-phone" href="tel:<?= $siteparam_main_phone_tel; ?>"
                               title="<?= Loc::getMessage('HEADER_MAIN_PHONE_TITLE'); ?>"><?= $siteparam_main_phone; ?></a>
                            <?php if ($siteparam_whatsapp_number || $siteparam_telegram_link): ?>
                            <ul class="navbar-contacts__messengers messengers">
                                <?php if ($siteparam_whatsapp_number): ?>
                                <li class="messengers__item">
                                    <a href="https://wa.me/<?php echo $siteparam_whatsapp_number_tel; echo $siteparam_whatsapp_message ?: '' ?>"
                                       target="_blank"
                                       class="messengers__link messengers__link_whatsapp"
                                       title="<?= Loc::getMessage('HEADER_MESSENGERS_WHATSAPP_TITLE'); ?>">WhatsApp</a>
                                </li>
                                <?php endif; ?>
                                <?php if ($siteparam_telegram_link): ?>
                                <li class="messengers__item">
                                    <a href="https://t.me/<?= $siteparam_telegram_link; ?>"
                                       target="_blank"
                                       class="messengers__link messengers__link_telegram"
                                       title="<?= Loc::getMessage('HEADER_MESSENGERS_TELEGRAM_TITLE'); ?>">Telegram</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <?php if ($siteparam_address): ?>
                        <div class="navbar-contacts__address"><?= $siteparam_address; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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