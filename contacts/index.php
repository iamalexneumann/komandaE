<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контактная информация ⭐ школы единоборств \"Команда Е\": мы находимся в Москве на ул. Электрозаводская, д. 58, метро Преображенская площадь. ⏰ Мы работаем с 8:00 до 22:30 в будние дни  и с 9:00 до 20:00 в выходные. ✨ Записывайтесь на занятия по ☎️ 8 (999) 999-87-57, а также через WhatsApp и Telegram.");
$APPLICATION->SetPageProperty("title", "Контакты клуба единоборств");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="page-contacts row">
        <div class="col-lg-7 col-xl-8">
            <div id="main-map" class="page-contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?z=16&ol=biz&oid=240659655384" height="600"></iframe>
            </div>
        </div>

        <div class="page-contacts__wrapper col-lg-5 col-xl-4">
            <div class="page-contacts__text page-contacts__text_before">Для записи на пробное занятие, а также для получения дополнительной информации, свяжитесь с нами любым удобным для Вас способом:</div>
            <a class="page-contacts__phone-link" href="tel:<?= $siteparam_main_phone_tel; ?>"
               title="Позвонить"><?= $siteparam_main_phone; ?></a>

            <?php if ($siteparam_address): ?>
            <div class="page-contacts__address">
                <i class="fa-solid fa-location-dot"></i>
                <?= $siteparam_address; ?>
            </div>
            <?php endif; ?>

            <?php if ($siteparam_schedule): ?>
            <div class="page-contacts__schedule">
                <i class="fa-regular fa-clock"></i>
                <?= $siteparam_schedule; ?>
            </div>
            <?php endif; ?>

            <?php if ($siteparam_whatsapp_number || $siteparam_telegram_link || $siteparam_vk_link): ?>
            <ul class="messengers page-contacts__messengers">
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
                <?php if ($siteparam_vk_link): ?>
                <li class="messengers__item">
                    <a href="<?= $siteparam_vk_link; ?>"
                       class="messengers__link messengers__link_vk"
                       target="_blank"
                       title="Перейти в группу VK">VK</a>
                </li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>

            <a href="mailto:<?= $siteparam_email; ?>" class="page-contacts__email-link"><?= $siteparam_email; ?></a>

            <button type="button"
                    class="btn btn-primary page-contacts__callback-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#callbackModal"
                    data-bs-modal-title="Заказать звонок">Заказать звонок</button>

            <div class="page-contacts__text page-contacts__text_after">Станьте частью нашей Команды!</div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>