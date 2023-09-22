<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var CMain $APPLICATION
 * @var CMain $CurDir
 * @var CSite $arSite
 * @var COption $siteparam_main_logo
 * @var COption $siteparam_footer_logo
 * @var COption $siteparam_logo_name
 * @var COption $siteparam_logo_description
 * @var COption $siteparam_phone
 * @var COption $siteparam_phone_tel
 * @var COption $siteparam_mobile_phone
 * @var COption $siteparam_mobile_phone_tel
 * @var COption $siteparam_schedule
 * @var COption $siteparam_email
 * @var COption $siteparam_address
 * @var COption $siteparam_whatsapp
 * @var COption $siteparam_whatsapp_tel
 * @var COption $siteparam_whatsapp_message
 * @var COption $siteparam_telegram
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
                <div class="col-lg-3">
                    <a <?php if ($CurDir !== '/'): ?> href="/"<?php endif; ?>
                            class="footer-logo"
                            title="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                        <img src="<?=$siteparam_footer_logo ?: $siteparam_main_logo; ?>"
                             class="footer-logo__img" width="180" height="192"
                             alt="<?= htmlspecialchars($arSite['SITE_NAME']); ?>">
                        <?php if ($siteparam_logo_description): ?>
                            <span class="footer-logo__description"><?= custom_lcfirst($siteparam_logo_description); ?></span>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">

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