<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
require($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/variables.php');
/**
 * @var CMain $APPLICATION
 * @var CMain $CurDir
 * @var CSite $arSite
 * @var COption $siteparam_footer_logo
 * @var COption $siteparam_logo_name
 * @var COption $siteparam_logo_description
 * @var COption $siteparam_main_phone
 * @var COption $siteparam_main_phone_tel
 * @var COption $siteparam_email
 * @var COption $siteparam_address
 * @var COption $siteparam_whatsapp_number
 * @var COption $siteparam_whatsapp_number_tel
 * @var COption $siteparam_whatsapp_message
 * @var COption $siteparam_telegram_link
 * @var COption $siteparam_scripts_body_after
 */
use Bitrix\Main\Localization\Loc;

$patterns = [
    '#^/disciplines/([0-9a-zA-Z_-]+)/$#',
];
?>
    <?php if ((!($CurDir === '/')) && !(use_wide_template($CurDir, $patterns) === true)): ?>
    </div>
    <?php endif; ?>
</main>

<div class="form-section">
    <div class="container">
        <div class="form-section__header">
            <div class="form-section__title"><?= Loc::getMessage('FORM_SECTION_TITLE'); ?></div>
            <div class="form-section__subtitle"><?= Loc::getMessage('FORM_SECTION_SUBTITLE'); ?></div>
        </div>
        <?php $APPLICATION->IncludeComponent(
            "custom.bitrix:main.feedback",
            "main_form",
            Array(
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "EMAIL_TO" => $siteparam_email,
                "EVENT_MESSAGE_ID" => array(
                    0 => "7",
                ),
                "OK_TEXT" => Loc::getMessage('MAIN_FORM_OK_TEXT'),
                "REQUIRED_FIELDS" => array("USER_PHONE"),
                "USE_CAPTCHA" => "N",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
            )
        ); ?>
    </div>
</div>
<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-contacts">
                    <a <?php if ($CurDir !== '/'): ?> href="/"<?php endif; ?>
                        class="footer-logo"
                        title="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                        <img src="<?=$siteparam_footer_logo; ?>"
                             class="footer-logo__img" width="110" height="110"
                             alt="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                        <span class="footer-logo__wrapper">
                            <span class="footer-logo__name"><?= $siteparam_logo_name; ?></span>
                            <?php if ($siteparam_logo_description): ?>
                            <span class="footer-logo__description"><?= custom_lcfirst($siteparam_logo_description); ?></span>
                            <?php endif; ?>
                        </span>
                    </a>

                    <?php if ($siteparam_address): ?>
                    <div class="footer-contacts__address"><?= $siteparam_address; ?></div>
                    <?php endif; ?>

                    <a class="footer-contacts__phone-link" href="tel:<?= $siteparam_main_phone_tel; ?>"
                       title="Позвонить"><?= $siteparam_main_phone; ?></a>
                    <a href="mailto:<?= $siteparam_email; ?>" class="footer-contacts__email-link"><?= $siteparam_email; ?></a>

                    <?php if ($siteparam_whatsapp_number || $siteparam_telegram_link): ?>
                    <ul class="messengers footer-contacts__messengers">
                        <?php if ($siteparam_telegram_link): ?>
                        <li class="messengers__item">
                            <a href="<?= $siteparam_telegram_link; ?>"
                               class="messengers__link messengers__link_telegram"
                               target="_blank"
                               title="<?= Loc::getMessage('FOOTER_MESSENGERS_TELEGRAM_TITLE'); ?>">Telegram</a>
                        </li>
                        <?php endif; ?>
                        <?php if ($siteparam_whatsapp_number): ?>
                        <li class="messengers__item">
                            <a href="https://wa.me/<?php echo $siteparam_whatsapp_number_tel; echo $siteparam_whatsapp_message ?: '' ?>"
                               class="messengers__link messengers__link_whatsapp"
                               target="_blank"
                               title="<?= Loc::getMessage('FOOTER_MESSENGERS_WHATSAPP_TITLE'); ?>">WhatsApp</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-8">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "main_submenu",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer_menu",
                            "USE_EXT" => "Y"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="footer-copyright__text">
                &#169; <?= htmlspecialchars($arSite['SITE_NAME']); ?> - <?= custom_lcfirst($siteparam_logo_description); ?>, 2013-<?= date('Y'); ?> <?= Loc::getMessage('FOOTER_COPYRIGHT_YEARS_TEXT'); ?>. <?= Loc::getMessage('FOOTER_COPYRIGHT_RIGHTS_TEXT'); ?>.
            </div>
            <div class="footer-copyright__links">
                <a href="/privacy-policy/" class="footer-copyright__link"><?= Loc::getMessage('FOOTER_COPYRIGHT_PRIVACY_LINK_TEXT'); ?></a>
                <a href="/sitemap/" class="footer-copyright__link"><?= Loc::getMessage('FOOTER_COPYRIGHT_SITEMAP_LINK_TEXT'); ?></a>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= Loc::getMessage('BTN_CLOSE_LABEL'); ?>">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $APPLICATION->IncludeComponent(
                    "custom.bitrix:main.feedback",
                    "modal_form",
                    array(
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "EMAIL_TO" => $siteparam_email,
                        "EVENT_MESSAGE_ID" => array(
                            0 => "7",
                        ),
                        "OK_TEXT" => Loc::getMessage('MAIN_FORM_OK_TEXT'),
                        "REQUIRED_FIELDS" => array(
                            1 => "USER_PHONE",
                        ),
                        "USE_CAPTCHA" => "N",
                        "COMPONENT_TEMPLATE" => "modal_form",
                        "REDIRECT_URL" => "",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_SHADOW" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</div>

<a href="#body-area" class="to-top-btn" title="<?= Loc::getMessage('FOOTER_TO_TOP_BTN_TEXT'); ?>"><i class="fa-solid fa-angle-up"></i></a>
<?php if ($siteparam_whatsapp_number): ?>
<a class="whatsapp-btn"
   href="https://wa.me/<?php echo $siteparam_whatsapp_number_tel; echo $siteparam_whatsapp_message ?: '' ?>"
   target="_blank"
   title="<?= Loc::getMessage('FOOTER_MESSENGERS_WHATSAPP_TITLE'); ?>">
    <i class="fa-brands fa-whatsapp"></i>
</a>
<?php endif; ?>
<?php if ($siteparam_telegram_link): ?>
<a class="telegram-btn"
   href="<?= $siteparam_telegram_link; ?>"
   target="_blank"
   title="<?= Loc::getMessage('FOOTER_MESSENGERS_TELEGRAM_TITLE'); ?>">
    <i class="fa-brands fa-telegram-plane"></i>
</a>
<?php endif; ?>

<script>
    BX.message({
        FOOTER_SHOW_MORE_MORE_BTN: '<?= Loc::getMessage('FOOTER_SHOW_MORE_MORE_BTN'); ?>',
        FOOTER_SHOW_MORE_LESS_BTN: '<?= Loc::getMessage('FOOTER_SHOW_MORE_LESS_BTN'); ?>'
    });
</script>
<?= $siteparam_scripts_body_after; ?>

</body>
</html>