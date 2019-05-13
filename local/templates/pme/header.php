<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="<?LANGUAGE_ID?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300i,400,400i,500&amp;subset=cyrillic" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/site.webmanifest">
    <link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/libs.min.css');?>
    <?$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/main.min.css');?>

</head>

<?
CModule::IncludeModule("iblock");

function return_nearest_date(){
    $res = CIBlockElement::GetList(Array("DATE_ACTIVE_TO"=>"ASC"), Array("IBLOCK_ID"=>"77", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID"=>"372"), false, false, Array("ID", "NAME", "DATE_ACTIVE_FROM"));
    if($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        return iconv("windows-1251", "windows-1251", str_replace("г.", "", $arFields["NAME"]));
    }
    return  "";
}

function return_main_date(){
    $res = CIBlockElement::GetList(Array("DATE_ACTIVE_TO"=>"ASC"), Array("IBLOCK_ID"=>"77", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID"=>"372"), false, false, Array("ID", "NAME", "DATE_ACTIVE_FROM"));
    if($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $date_prop = $arFields["NAME"];
        $arr_date = explode(" ", $date_prop);
        $month = return_month(trim(iconv("windows-1251", "windows-1251", $arr_date[1])));
        $day = $arr_date[0];
        if(strlen($month) == 1){$month_date = "0" . $month;}else{$month_date = $month;}
        if(strlen($day) == 1){$day = "0" . $day;}
        $date_string = substr($arr_date[2], 0, 4) . '-' . $month_date . '-' . $day;
        $date_main = $arr_date[0] . ' ' . iconv("windows-1251", "windows-1251", $arr_date[1]) . ' ' . substr($arr_date[2], 0, 4) . ', ' . return_time($date_string);
        return $date_main;
    }
    return "";
}

$res = CIBlockElement::GetList(Array("DATE_ACTIVE_TO"=>"ASC"), Array("IBLOCK_ID"=>"77", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID"=>"372"), false, false, Array("ID", "NAME", "DATE_ACTIVE_FROM"));
$calendar = "";
$arr_calendar = array();
$arr_dates = array();
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $date_prop = $arFields["NAME"];
    $arr_date = explode(" ", $date_prop);
    $month = return_month(trim(iconv("windows-1251", "windows-1251", $arr_date[1])));
    $day = $arr_date[0];
    if(strlen($month) == 1){$month_date = "0" . $month;}else{$month_date = $month;}
    if(strlen($day) == 1){$day = "0" . $day;}
    $str_date = substr($arr_date[2], 0, 4) . '/' . $month . '/' . trim($arr_date[0]);
    $calendar = $calendar . "$str_date" . '///';
    $date_string = substr($arr_date[2], 0, 4) . '-' . $month_date . '-' . $day;
    $arr_calendar[] = iconv("windows-1251", "windows-1251", $arFields["NAME"]) . ' ' . return_day($date_string);
    $arr_dates[] = $arr_date[0] . ' ' . iconv("windows-1251", "windows-1251", $arr_date[1]) . ', ' . return_time($date_string);
}


echo '<div id = "kk_calendar" style = "display: none;">' . substr($calendar, 0 , strlen($calendar) - 3) . "</div>";

function return_month($month){
    if($month == iconv("windows-1251", "windows-1251", "января")){return "1";}
    if($month == iconv("windows-1251", "windows-1251", "февраля")){return "2";}
    if($month == iconv("windows-1251", "windows-1251", "марта")){return "3";}
    if($month == iconv("windows-1251", "windows-1251", "апреля")){return "4";}
    if($month == iconv("windows-1251", "windows-1251", "мая")){return "5";}
    if($month == iconv("windows-1251", "windows-1251", "июня")){return "6";}
    if($month == iconv("windows-1251", "windows-1251", "июля")){return "7";}
    if($month == iconv("windows-1251", "windows-1251", "августа")){return "8";}
    if($month == iconv("windows-1251", "windows-1251", "сентября")){return "9";}
    if($month == iconv("windows-1251", "windows-1251", "октября")){return "10";}
    if($month == iconv("windows-1251", "windows-1251", "ноября")){return "11";}
    if($month == iconv("windows-1251", "windows-1251", "декабря")){return "12";}
    return "";
}

function return_day($string_date){
    $day_day = strftime("%a", strtotime($string_date));
    if($day_day == "Mon"){return iconv("windows-1251", "windows-1251", "(пн)");}
    if($day_day == "Tue"){return iconv("windows-1251", "windows-1251", "(вт)");}
    if($day_day == "Wed"){return iconv("windows-1251", "windows-1251", "(ср)");}
    if($day_day == "Thu"){return iconv("windows-1251", "windows-1251", "(чт)");}
    if($day_day == "Fri"){return iconv("windows-1251", "windows-1251", "(пт)");}
    if($day_day == "Sat"){return iconv("windows-1251", "windows-1251", "(сб)");}
    if($day_day == "Sun"){return iconv("windows-1251", "windows-1251", "(вс)");}
    return "";
}

function return_time($string_date){
    $day_day = strftime("%a", strtotime($string_date));
    if($day_day == "Wed"){return "18:30";}
    if($day_day == "Fri"){return "11:00";}
    if($day_day == "Sat"){return "11:00";}
    return "";
}

$main_date = return_main_date();
?>

<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__logo icon__wrap logo">
                <svg>
                    <use xlink:href="#logo"/>
                </svg>
            </div>
            <div class="header__mail__wrap">
                <a href="mailto:info@pmexpert.ru" class="header__mail">info@pmexpert.ru</a>
            </div>
            <a href="tel:+74959815705" class="header__phone">+7 (495) 981-57-05</a>
            <a href="#request" class="btn__leave__request scroll-to-request btn small red">Оставить заявку</a>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <nav class="header__menu">
                <a href="#advantages" class="header__menu__link advantages">
                    О сертификации
                </a>
                <a href="#questions" class="header__menu__link">
                    Примеры вопросов
                </a>
                <a href="#price" class="header__menu__link">
                    Цена
                </a>
                <a href="#faq" class="header__menu__link">
                    FAQ
                </a>
                <a href="#reviews" class="header__menu__link">
                    Отзывы
                </a>
                <a href="#contacts" class="header__menu__link contacts">
                    Адреса центров
                </a>
            </nav>
            <a href="#request" class="btn__leave__request scroll-to-request btn small red">Оставить заявку</a>
        </div>
    </div>
    <div class="btn__mob__menu hamburger hamburger--emphatic">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
    <div class="mob__menu__wrap">
        <div class="mob__menu">
            <a href="#advantages" class="mob__menu__link advantages">
                О сертификации
            </a>
            <a href="#questions" class="mob__menu__link">
                Примеры вопросов
            </a>
            <a href="#price" class="mob__menu__link">
                Цена
            </a>
            <a href="#faq" class="mob__menu__link">
                FAQ
            </a>
            <a href="#reviews" class="mob__menu__link">
                Отзывы
            </a>
            <a href="#contacts" class="mob__menu__link contacts">
                Адреса центров
            </a>
        </div>
        <div class="header__mail__wrap">
			<a href="mailto:info@pmexpert.ru" class="header__mail">info@pmexpert.ru</a>
        </div>
        <a href="#request" class="btn__leave__request scroll-to-request btn small red">Оставить заявку</a>
    </div>
</header>
