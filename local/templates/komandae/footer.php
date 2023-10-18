<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
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
// '#^/services/([0-9a-zA-Z_-]+)/([0-9a-zA-Z_-]+)/$#',
];
?>
<?php if ((!($CurDir === '/')) && !(use_wide_template($CurDir, $patterns) === true)): ?>
    </div>
<?php endif; ?>
</main>
<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-contacts">
                    <a <?php if ($CurDir !== '/'): ?> href="/"<?php endif; ?>
                        class="footer-logo"
                        title="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                        <img src="<?=$siteparam_footer_logo ?: $siteparam_main_logo; ?>"
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
                               title="Написать в Telegram">Telegram</a>
                        </li>
                        <?php endif; ?>
                        <?php if ($siteparam_whatsapp_number): ?>
                        <li class="messengers__item">
                            <a href="https://wa.me/<?php echo $siteparam_whatsapp_number_tel; echo $siteparam_whatsapp_message ?: '' ?>"
                               class="messengers__link messengers__link_whatsapp"
                               target="_blank"
                               title="Написать в WhatsApp">WhatsApp</a>
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
<script>
    BX.message({
        FOOTER_SHOW_MORE_MORE_BTN: '<?= Loc::getMessage('FOOTER_SHOW_MORE_MORE_BTN'); ?>',
        FOOTER_SHOW_MORE_LESS_BTN: '<?= Loc::getMessage('FOOTER_SHOW_MORE_LESS_BTN'); ?>'
    });
</script>
<?= $siteparam_scripts_body_after; ?>
<a href="#body-area" class="to-top-btn" title="<?= Loc::getMessage('FOOTER_TO_TOP_BTN_TEXT'); ?>"><i class="fa-solid fa-angle-up"></i></a>
</body>
</html>