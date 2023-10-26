<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Добро пожаловать в нашу ⭐ школу единоборств \"Команда Е\" в Москве! ✋ У нас вы найдете широкий спектр видов единоборств и боевых искусств для детей и взрослых всех уровеней подготовки. Познакомьтесь с нашими ✊ опытными тренерами, почитайте ✍️ отзывы и записывайтесь на бесплатное пробное занятие по ☎️ 8 (999) 999-87-57, WhatsApp и Telegram.");
$APPLICATION->SetPageProperty("title", "Клуб единоборств в Москве | Школа боевых искусств");
$APPLICATION->SetTitle("Клуб единоборств для всей семьи \"Команда Е\"");
?>
    <div class="first-screen">
        <div class="container">
            <div class="first-screen__wrapper">
                <header class="first-screen__header">
                    <h1 class="first-screen__title">Зал единоборств <span>для всей семьи</span></h1>
                    <div class="first-screen__description">Учим "держать удар" перед трудностями <span>и достигать поставленной цели.</span></div>
                </header>

                <button type="button"
                        class="btn btn-warning first-screen__btn"
                        data-bs-toggle="modal"
                        data-bs-target="#callbackModal"
                        data-bs-modal-title="Записаться на занятие">Записаться на занятие</button>
            </div>
        </div>
    </div>
    <section class="main-section">
        <div class="container">
            <header class="main-section__header">
                <h2 class="main-section__title">Дисциплины</h2>
                <div class="main-section__subtitle">Нерешительных делаем уверенными, <br>слабых - сильными, робких – смелыми.</div>
            </header>
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "disciplines_list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILE_404" => "",
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "main_content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "main_pagination",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ATT_PREVIEW_TEXT", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SHOW_FORM_BLOCK" => "N",
                    "SMALL_CARD_TAG_TITLE" => "3",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
        </div>
    </section>
    <section class="main-section main-section_light-bg-color">
        <div class="container">
            <header class="main-section__header">
                <h2 class="main-section__title">Команда Е</h2>
                <div class="main-section__subtitle">Наша команда научит "держать удар" <br>перед трудностями и достигать любой цели.</div>
            </header>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "team_list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "main_content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "main_pagination",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ATT_EXPERIENCE", "ATT_PREVIEW_TEXT", "ATT_DISCIPLINE"),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SHOW_FORM_BLOCK" => "N",
                    "SMALL_CARD_TAG_TITLE" => "3",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </div>
    </section>
    <section class="main-section">
        <div class="container">
            <header class="main-section__header">
                <h2 class="main-section__title">Отзывы</h2>
                <div class="main-section__subtitle">Большинство стали сильнее физически и духовно, <br>научились ответственности и дисциплине, поверили в себя.</div>
            </header>
            <div class="yandex-reviews">
                <?= \Bitrix\Main\Config\Option::get('askaron.settings', 'UF_YANDEX_REVIEWS', ''); ?>
            </div>
        </div>
    </section>
    <section class="main-section main-section_light-bg-color">
        <div class="container">
            <p>Добро пожаловать в клуб единоборств для всей семьи "Команда Е". Наш клуб расположен в Москве, ВАО, по адресу: ул. Электрозаводская, д. 58, рядом с метро Преображенская площадь.</p>
            <p>"Команда Е" - клуб единоборств, где могут заниматься спортом все люди, независимо от возраста и уровня физической подготовки. У нас есть занятия для детей и подростков, а также для их родителей. Наша команда <a href="/team/" target="_self">профессиональных тренеров</a> подберет подходящую программу для каждого, чтобы достичь желаемых результатов и улучшить свое физическое и психологическое состояние. От детской группы до группы здорового образа жизни - мы рады видеть всех, кто стремится повысить свой уровень прочности и научиться правильному поведению в экстремальных ситуациях. </p>
            <p>Наша команда готова помочь каждому, кто ценит личные ресурсы и стремится повысить качество своей жизни. Мы уже более шести лет помогаем нашим ученикам изменяться к лучшему, благодаря единоборствам. За это время мы убедились, что спорт вносит глобальные изменения в жизнь каждого.</p>
            <p>В "Команде Е" мы дарим людям уверенность, силу, смелость и научим "держать удары" перед трудностями, а также достигать любых целей, даже тех, которые кажутся невыполнимыми. Учение нашим принципам дает не только физическую, но и духовную силу, которая помогает нашим ученикам стать ответственными и дисциплинированными.</p>
            <p>"Команда Е" - это не только тренировки. Это учение принципам уважения к тренеру и товарищам, а также принципу защиты слабых и борьбы с несправедливостью. Наши ученики настоящие воины, которые учатся применять свои знания только в крайнем случае и всегда с осознанием последствий.</p>
            <p>К всем, кто не нашел свое место в жизни, мы говорим: "Попробуйте единоборства - это отличный способ найти себя". Сегодня мы предлагаем не только классические тренировки, но и уникальные возможности для саморазвития.</p>
            <p>Хотите изменить свою жизнь? Не знаете, с чего начать? Запишитесь на тренировку прямо сейчас, позвонив по телефону <a href="tel:+79999998757" target="_self">8 (999) 999-87-57</a> или написав нам в <a href="https://wa.me/+79999998757" target="_blank">WhatsApp</a>, <a href="https://t.me/team_ezhov" target="_blank">Telegram</a> и <a href="https://vk.com/team_ezhov" target="_blank">ВКонтакте</a>. В "Команде Е" мы поможем вам достичь уровня, о котором вы даже не мечтали!</p>
        </div>
    </section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>