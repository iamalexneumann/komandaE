<?
$aMenuLinks = Array(
	Array(
		"Дисциплины", 
		SITE_DIR."/disciplines/", 
		Array(),
        Array(
            'TWO_COLUMNS' => TRUE,
        ),
		"" 
	),
    Array(
        "Меню",
        "",
        Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'IS_PARENT' => 'TRUE',
            'DEPTH_LEVEL' => 1,
            'NOT_LINK' => TRUE,
        ),
        ""
    ),
    Array(
        "Главная",
        SITE_DIR."/",
        Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
        ""
    ),
	Array(
		"Миссия", 
		SITE_DIR."/mission/", 
		Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
		"" 
	),
	Array(
		"Команда", 
		SITE_DIR."/team/", 
		Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
		"" 
	),
	Array(
		"Расписание", 
		SITE_DIR."/schedule/", 
		Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
		"" 
	),
    Array(
        "Оферта",
        SITE_DIR."/offer/",
        Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
        ""
    ),
    Array(
        "Реквизиты",
        SITE_DIR."/requisites/",
        Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
        ""
    ),
	Array(
		"Контакты", 
		SITE_DIR."/contacts/", 
		Array(),
        Array(
            'FROM_IBLOCK' => 1,
            'DEPTH_LEVEL' => 2,
        ),
		"" 
	)
);
?>