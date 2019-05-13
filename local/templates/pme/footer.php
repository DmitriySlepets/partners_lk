<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<main>
    <div class="main__block bg-above" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/main__block-bg.png)">
        <div class="container">
            <div class="main__block__heading">
                <div class="main__block__heading__logo icon__wrap logo-white-big">
                    <svg>
                        <use xlink:href="#logo-white-big"/>
                    </svg>
                </div>
				<?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."local/includes/headline.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
        </div>
        <div class="main__block__advantages">
            <div class="container">
                <div class="items__row">
                    <div class="item__col">
                        <div class="main__block__advantages__item">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."local/includes/banner1.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <div class="item__col">
                        <div class="main__block__advantages__item">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."local/includes/banner2.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <div class="item__col">
                        <div class="main__block__advantages__item">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."local/includes/banner3.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="closest__certification__block" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/closest__certification__block-bg.jpg)">
        <div class="container">
            <h2 class="closest__certification__block__title">Ближайшая сертификация:</h2>
            <!--<div class="closest__certification__block__date">7 февраля 2019</div>-->
            <div class="closest__certification__block__date"><?=return_nearest_date();?></div>
            <div class="btn big red btn__certification__schedule get__certification__popup" data-certification="closest">Расписание сертификаций</div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/why_block.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/advantage_block.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/how_going.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/questions_examples.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/prices.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/faq.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/clients.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/rewievs.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <div class="leave__request__block" id="request" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/leave__request__block-bg.jpg)">
        <div class="container">
            <div class="leave__request__block__content">
                <h2 class="leave__request__block__title">Оставьте заявку на прохождение сертификации</h2>
                <div class="leave__request__block__title__under">Наш менеджер свяжется с вами в течение дня для уточнения деталей</div>
                <form class="leave__request__form">
                    <div class="input__area">
                        <input type="text" placeholder="Ф. И. О." id = "kk_main_fio">
                        <input type="text" class="input__phone" placeholder="Телефон" id = "kk_main_tel">
                        <input type="text" placeholder="E-mail" id = "kk_main_mail">
                    </div>
                    <span class="conf__policy">
							Нажимая на кнопку отправить, вы подтверждаете свое согласие на обработку <a href="http://www.pmexpert.ru/popd/" target="_blank">пользовательских данных</a>.
						</span>
                    <button type="submit" class="btn__submit btn medium red" onclick = "send_mail('Заявка с сайта PME', 'main');">Отправить заявку</button>
                </form>
            </div>
            <div class="leave__request__block__reminder">
                Спасибо за заявку
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/includes/map.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
</main>
<footer class="footer">
    <div class="scrolltop">
	     	<span class="scrolltop-icon">
	     	</span>
    </div>
    <div class="footer__top">
        <div class="container">
            <div class="footer__logo" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/logo-white.svg)"></div>
            <div class="footer__mail__wrap">
                <a href="mailto:info@pmexpert.ru" class="footer__mail">info@pmexpert.ru</a>
            </div>
            <a href="tel:+74959815705" class="footer__phone">+7 (495) 981-57-05</a>
            <a href="#request" class="btn__leave__request scroll-to-request btn small white">Оставить заявку</a>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <a href="#" class="footer__conf__policy">Политика конфиденциальности</a>
            <div class="footer__copyright">PM Expert © 2019</div>
            <span class="copyright__texterra">
					<span class="copyright__texterra__text">Разработано</span>
	                <a href="https://texterra.ru/" target="_blank" class="copyright__texterra__link">
	                	<svg>
		                	<use xlink:href="#logo-texterra"></use>
		            	</svg>
	                </a>
	            </span>
        </div>
    </div>
</footer>
<div class="popups__wrap">
    <div class="overlay"></div>
    <div class="popup certification__popup" data-certification="standart">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion">
                            <div class="certification__accordion__heading">
                                <div class="certification__accordion__date" id = "kk_shop_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request" onclick = "shop();">Купить</div>
                            </div>
                        </div>
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_standart_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_standart_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_standart_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_standart_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: Стандартная стоимость', 'standart');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select standart">
                                <option>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__popup" data-certification="full-time">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_fulltime_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_fulltime_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_fulltime_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_fulltime_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: Для слушателей очных курсов PM Expert независимо от давности прохождения обучения', 'fulltime');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select">
                                <option default>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__popup" data-certification="distance">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_distance_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_distance_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_distance_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_distance_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: Для слушателей дистанционных курсов PM Expert', 'distance');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select">
                                <option default>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__popup" data-certification="student">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_student_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_student_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_student_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_student_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: По студенческому билету', 'student');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select">
                                <option default>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__popup" data-certification="retake">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_retake_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_retake_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_retake_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_retake_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: Пересдача', 'retake');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select">
                                <option default>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__popup" data-certification="closest">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Ближайшая сертификация:</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <div class="certification__popup__inner__heading">
                    <div class="certification__popup__schedule__item">
                        Среда - начало в <strong>18:30</strong>
                    </div>
                    <div class="certification__popup__schedule__item">
                        Пятница, суббота - начало в <strong> 11:00</strong>
                    </div>
                </div>
                <div class="certification__popup__inner__content">
                    <div class="certification__datepicker__wrap">
                        <div class="certification__datepicker custom__datepicker"></div>
                        <div class="certification__datepicker__note">* Выберите дату и отправьте заявку</div>
                    </div>
                    <div class="certification__accordions__wrap">
                        <div class="certification__accordion accordion__item">
                            <div class="certification__accordion__heading accordion__item__heading">
                                <div class="certification__accordion__date" id = "kk_closest_date"><?=$main_date;?></div>
                                <div class="btn red btn__leave__request">Оставить заявку</div>
                            </div>
                            <div class="certification__accordion__content accordion__item__content">
                                <form class="certification__leave__request__form">
                                    <div class="input__area">
                                        <input type="text" placeholder="Ф.И.О." id = "kk_closest_fio">
                                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_closest_tel">
                                        <input type="text" placeholder="E-mail" id = "kk_closest_mail">
                                    </div>
                                    <div class="form__bottom">
                                        <div class="btn red btn__submit" onclick = "send_mail('Запись PME: Ближайшая сертификация', 'closest');">Отправить заявку</div>
                                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom__select__wrap">
                            <select class="custom__select">
                                <option default>Посмотреть все даты</option>
                                <?
                                for ($i = 0; $i < count($arr_calendar); $i++){
                                    echo '<option>';
                                    echo $arr_calendar[$i];
                                    echo '</option>';
                                }
                                ?>
                                <!--<option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>
                                <option>22 сентября 2019 г. (пн)</option>-->
                            </select>
                            <div class="btn__copy__dates">
                                <div class="btn__copy__dates__icon icon-copy icon__wrap">
                                    <svg>
                                        <use xlink:href="#icon-copy"></use>
                                    </svg>
                                </div>
                                <div class="tooltip">Скопировать весь список</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup certification__extension__popup certification__popup" data-certification="extension">
        <div class="popup__content">
            <div class="popup__heading">
                <div class="popup__title">Продлить статус РМЕ®</div>
                <div class="popup__close">
                    <svg>
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </div>
            </div>
            <div class="popup__inner__content">
                <form class="certification__extension__form">
                    <div class="certification__extension__rules">
                        Ознакомиться с правилами продления статуса РМЕ® можно <a href="http://www.pmexpert.ru/shop/list.php?SECTION_ID=369" target="_blank">по ссылке</a>
                    </div>
                    <div class="input__area">
                        <input type="text" placeholder="Ф.И.О." id = "kk_status_fio">
                        <input type="text" placeholder="Телефон" class="input__phone" id = "kk_status_tel">
                        <input type="text" placeholder="E-mail" id = "kk_status_mail">
                    </div>
                    <div class="form__bottom">
                        <div class="btn red btn__submit" onclick = "send_mail('Продление статуса PME', 'status');">Отправить заявку</div>
                        <span class="conf__policy">Нажимая на кнопку отправить, вы подтверждаете свое согласие на <a href="http://www.pmexpert.ru/popd/" target="_blank">обработку пользовательских данных</a>.</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="popup__reminder certification__reminder__popup">
        <div class="popup__content">
            Спасибо за заявку
        </div>
        <div class="popup__close">
            <svg>
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" class="sprite">
    <symbol width="186" height="35" viewBox="0 0 186 35" fill="none" xmlns="http://www.w3.org/2000/svg" id="logo">
        <path d="M29.2707 12.7092L26.018 9.45654L22.7653 12.7092L26.018 15.9619L29.2707 12.7092Z" fill="#B00E22"/>
        <path d="M28.6 0H0V1.4H28.6V0Z" fill="#646466"/>
        <path d="M14.3 4H0V6.8H14.3V4Z" fill="#646466"/>
        <path d="M23.1 6.7002H14.3V9.5002H23.1V6.7002Z" fill="#646466"/>
        <path d="M181.9 0H179H176.2H173.1H169.6V2.4H173.1H176.2V16.3H179V2.4H181.9H185.4V0H181.9Z" fill="#62615D"/>
        <path d="M80.8 13.9V8.6H91.5V6.3H80.8V2.4H91.6V0H80.8H78.2H78V16.3H78.2H80.8H91.8V13.9H80.8Z" fill="#62615D"/>
        <path d="M137.3 13.9V8.6H148V6.3H137.3V2.4H148.1V0H137.3H134.7H134.5V16.3H134.7H137.3H148.3V13.9H137.3Z" fill="#62615D"/>
        <path d="M47.4 0.000285774H38.1H36.2H35.3V16.3003H38.1V9.10029H47.4C47.4 9.10029 52.2 9.60029 52.2 4.60029C52.2 -0.399714 47.4 0.000285774 47.4 0.000285774ZM47.7 6.60029H38.1V2.60029H47.7C47.7 2.60029 49.4 2.60029 49.4 4.60029C49.4 6.60029 47.7 6.60029 47.7 6.60029Z" fill="#B00E22"/>
        <path d="M126.7 0.000285774H118.4H116.5H115.6V16.3003H118.4V9.10029H126.7C126.7 9.10029 131.5 9.60029 131.5 4.60029C131.5 -0.399714 126.7 0.000285774 126.7 0.000285774ZM127 6.60029H118.4V2.60029H127C127 2.60029 128.7 2.60029 128.7 4.60029C128.7 6.60029 127 6.60029 127 6.60029Z" fill="#62615D"/>
        <path d="M74.2 0H71.4H71.1L64.6 13.3L58.1 0H57.5H55H54.7V16.3H57.5V5.1L63 16.3H63.1H66.1H66.2L71.4 5.6V16.3H74.2V0Z" fill="#B00E22"/>
        <path d="M164.7 16.3002H167.8L164.2 9.00022C165.6 8.70022 167.7 7.80022 167.7 4.50022C167.7 -0.499783 162.9 0.000217014 162.9 0.000217014H154.3H152.4H151.5V16.3002H154.3V9.10022H161.2L164.7 16.3002ZM154.2 2.60022H163.1C163.1 2.60022 164.8 2.60022 164.8 4.60022C164.8 6.60022 163.1 6.60022 163.1 6.60022H154.2V2.60022Z" fill="#62615D"/>
        <path d="M97.5 0H94.1L100 8.1L94.1 16.3H97.5L103.4 8.1L97.5 0Z" fill="#62615D"/>
        <path d="M112.9 0H109.4L103.5 8.1L109.4 16.3H112.9L106.9 8.1L112.9 0Z" fill="#62615D"/>
        <path d="M40.2 23.7002V24.7002H37.5V32.4002H36.4V24.7002H33.7V23.7002H40.2Z" fill="#62615D"/>
        <path d="M43.5 27.5001C43.3 27.2001 43 27.0001 42.5 27.0001C41.7 27.0001 41.1 27.6001 41.1 28.5001V32.5001H40.1V26.2001H41.1V26.8001C41.4 26.4001 41.8 26.1001 42.6 26.1001C43.5 26.1001 44 26.4001 44.4 27.0001L43.5 27.5001Z" fill="#62615D"/>
        <path d="M47.4 28.8001H48.9V28.1001C48.9 27.2001 48.5 27.0001 47.5 27.0001C46.7 27.0001 46.3 27.1001 46 27.6001L45.2 27.1001C45.6 26.4001 46.3 26.1001 47.5 26.1001C49.1 26.1001 49.9 26.6001 49.9 28.1001V32.5001H48.9V31.9001C48.5 32.5001 48.1 32.6001 47.3 32.6001C45.8 32.6001 45 31.9001 45 30.7001C45 29.3001 46 28.8001 47.4 28.8001ZM48.9 29.7001H47.4C46.4 29.7001 46 30.0001 46 30.7001C46 31.4001 46.5 31.7001 47.3 31.7001C48.2 31.7001 48.9 31.5001 48.9 30.1001V29.7001Z" fill="#62615D"/>
        <path d="M51.4 23.7002H52.5V24.8002H51.4V23.7002ZM51.5 26.2002H52.5V32.5002H51.5V26.2002Z" fill="#62615D"/>
        <path d="M54.1 26.2001H55.1V26.8001C55.4 26.3001 55.9 26.1001 56.8 26.1001C58.2 26.1001 59.1 26.8001 59.1 28.6001V32.5001H58.1V28.6001C58.1 27.3001 57.4 27.0001 56.7 27.0001C55.8 27.0001 55.2 27.7001 55.2 28.5001V32.4001H54.2V26.2001H54.1Z" fill="#62615D"/>
        <path d="M60.6 23.7002H61.7V24.8002H60.6V23.7002ZM60.6 26.2002H61.6V32.5002H60.6V26.2002Z" fill="#62615D"/>
        <path d="M63.2 26.2001H64.2V26.8001C64.5 26.3001 65 26.1001 65.9 26.1001C67.3 26.1001 68.2 26.8001 68.2 28.6001V32.5001H67.2V28.6001C67.2 27.3001 66.5 27.0001 65.8 27.0001C64.9 27.0001 64.3 27.7001 64.3 28.5001V32.4001H63.3V26.2001H63.2Z" fill="#62615D"/>
        <path d="M73.8 26.2001H74.8V32.4001C74.8 34.2001 73.8 35.0001 72.1 35.0001C71 35.0001 70.3 34.7001 69.9 33.9001L70.7 33.3001C71 33.8001 71.4 34.0001 72.2 34.0001C73.3 34.0001 73.8 33.4001 73.8 32.3001V31.9001C73.5 32.3001 72.9 32.6001 72.1 32.6001C70.4 32.6001 69.6 31.4001 69.6 29.7001V28.9001C69.6 27.1001 70.6 26.1001 72.1 26.1001C72.9 26.1001 73.5 26.4001 73.8 26.8001V26.2001ZM73.8 29.7001V28.9001C73.8 27.7001 73.2 27.0001 72.2 27.0001C71.2 27.0001 70.6 27.7001 70.6 28.9001V29.7001C70.6 30.8001 71.1 31.6001 72.2 31.6001C73.3 31.7001 73.8 30.8001 73.8 29.7001Z" fill="#62615D"/>
        <path d="M77.6 27.6002C77.1 27.0002 76.7 26.4002 76.7 25.7002C76.7 24.5002 77.6 23.7002 78.8 23.7002C80.4 23.7002 80.9 24.6002 80.9 25.4002C80.9 26.4002 80 27.0002 79 27.7002L81.3 30.2002C81.6 29.7002 81.7 29.1002 81.7 28.5002H82.7C82.7 29.4002 82.5 30.2002 82 31.0002L83.5 32.6002H82L81.3 31.8002C80.7 32.3002 79.8 32.7002 78.8 32.7002C76.9 32.7002 76 31.5002 76 30.2002C76 28.9002 76.7 28.2002 77.6 27.6002ZM80.6 31.0002L78.1 28.3002C77.5 28.8002 77 29.4002 77 30.2002C77 31.1002 77.7 31.7002 78.7 31.7002C79.6 31.6002 80.2 31.4002 80.6 31.0002ZM78.4 27.0002C79.2 26.5002 79.8 26.1002 79.8 25.5002C79.8 25.2002 79.5 24.7002 78.8 24.7002C78.2 24.7002 77.8 25.1002 77.8 25.7002C77.7 26.1002 78.1 26.6002 78.4 27.0002Z" fill="#62615D"/>
        <path d="M89.4 26.5002C89.1 25.1002 88.4 24.7002 87.3 24.7002C86 24.7002 85.2 25.5002 85.2 27.7002V28.7002C85.2 30.9002 85.9 31.7002 87.3 31.7002C88.4 31.7002 89.1 31.1002 89.4 29.9002H90.4C90.1 31.9002 88.9 32.7002 87.3 32.7002C85.4 32.7002 84.1 31.5002 84.1 28.7002V27.7002C84.1 24.9002 85.3 23.7002 87.3 23.7002C89 23.7002 90.2 24.6002 90.4 26.5002H89.4Z" fill="#62615D"/>
        <path d="M96.4 31.5001C96 32.3001 95.3 32.6001 94.2 32.6001C92.5 32.6001 91.5 31.5001 91.5 29.7001V28.9001C91.5 27.1001 92.3 26.1001 94 26.1001C95.7 26.1001 96.5 27.1001 96.5 28.9001V29.6001H92.5V29.8001C92.5 30.9001 93 31.7001 94.1 31.7001C94.9 31.7001 95.3 31.5001 95.6 31.0001L96.4 31.5001ZM92.5 28.7001H95.5C95.5 27.6001 95 27.0001 94 27.0001C93 27.0001 92.5 27.6001 92.5 28.7001Z" fill="#62615D"/>
        <path d="M101.2 27.5001C100.9 27.1001 100.6 27.0001 100.1 27.0001C99.3 27.0001 98.7 27.6001 98.7 28.5001V32.5001H97.7V26.2001H98.7V26.8001C99 26.4001 99.4 26.1001 100.2 26.1001C101.1 26.1001 101.6 26.4001 102 27.0001L101.2 27.5001Z" fill="#62615D"/>
        <path d="M102.6 26.2003H103.4V24.8003H104.4V26.2003H105.9V27.1003H104.4V30.3003C104.4 31.2003 104.5 31.5003 105.3 31.5003H105.8V32.5003H105.3C103.8 32.5003 103.4 31.9003 103.4 30.6003V27.1003H102.6V26.2003Z" fill="#62615D"/>
        <path d="M107.1 23.7002H108.2V24.8002H107.1V23.7002ZM107.1 26.2002H108.1V32.5002H107.1V26.2002Z" fill="#62615D"/>
        <path d="M110.1 26.2003V25.7003C110.1 24.4003 110.5 23.8003 112 23.8003H112.3V24.8003H112C111.2 24.8003 111.1 25.2003 111.1 26.0003V26.2003H114.1V32.5003H113.1V27.1003H111.1V32.5003H110.1V27.1003H109.3V26.2003H110.1Z" fill="#62615D"/>
        <path d="M120.4 31.5001C120 32.2001 119.2 32.6001 118.2 32.6001C116.5 32.6001 115.5 31.5001 115.5 29.7001V28.9001C115.5 27.1001 116.5 26.1001 118.2 26.1001C119.1 26.1001 119.9 26.4001 120.4 27.1001L119.6 27.7001C119.3 27.3001 118.8 27.1001 118.2 27.1001C117.1 27.1001 116.5 27.8001 116.5 29.0001V29.8001C116.5 30.9001 117 31.7001 118.2 31.7001C118.8 31.7001 119.3 31.5001 119.6 31.0001L120.4 31.5001Z" fill="#62615D"/>
        <path d="M123.5 28.8001H125V28.1001C125 27.2001 124.6 27.0001 123.6 27.0001C122.8 27.0001 122.4 27.1001 122.1 27.6001L121.3 27.1001C121.7 26.4001 122.4 26.1001 123.6 26.1001C125.2 26.1001 126 26.6001 126 28.1001V32.5001H125V31.9001C124.6 32.5001 124.2 32.6001 123.4 32.6001C121.9 32.6001 121.1 31.9001 121.1 30.7001C121.2 29.3001 122.1 28.8001 123.5 28.8001ZM125 29.7001H123.5C122.5 29.7001 122.1 30.0001 122.1 30.7001C122.1 31.4001 122.6 31.7001 123.4 31.7001C124.3 31.7001 125 31.5001 125 30.1001V29.7001Z" fill="#62615D"/>
        <path d="M127 26.2003H127.8V24.8003H128.8V26.2003H130.3V27.1003H128.8V30.3003C128.8 31.2003 128.9 31.5003 129.7 31.5003H130.2V32.5003H129.7C128.2 32.5003 127.8 31.9003 127.8 30.6003V27.1003H127V26.2003Z" fill="#62615D"/>
        <path d="M131.5 23.7002H132.6V24.8002H131.5V23.7002ZM131.5 26.2002H132.5V32.5002H131.5V26.2002Z" fill="#62615D"/>
        <path d="M139.1 29.7001C139.1 31.3001 138.3 32.6001 136.5 32.6001C134.8 32.6001 133.9 31.5001 133.9 29.7001V28.9001C133.9 27.1001 134.9 26.1001 136.5 26.1001C138.2 26.1001 139.1 27.1001 139.1 28.9001V29.7001ZM138.1 29.7001V28.9001C138.1 27.7001 137.5 27.0001 136.5 27.0001C135.5 27.0001 134.9 27.7001 134.9 28.9001V29.7001C134.9 30.8001 135.4 31.6001 136.5 31.6001C137.6 31.7001 138.1 30.8001 138.1 29.7001Z" fill="#62615D"/>
        <path d="M140.4 26.2001H141.4V26.8001C141.7 26.3001 142.2 26.1001 143.1 26.1001C144.5 26.1001 145.4 26.8001 145.4 28.6001V32.5001H144.4V28.6001C144.4 27.3001 143.7 27.0001 143 27.0001C142.1 27.0001 141.5 27.7001 141.5 28.5001V32.4001H140.5V26.2001H140.4Z" fill="#62615D"/>
    </symbol>
    <symbol width="186" height="35" viewBox="0 0 186 35" fill="none" xmlns="http://www.w3.org/2000/svg" id="logo-white">
        <g clip-path="url(#clip0)">
            <path d="M29.2707 12.7092L26.018 9.45654L22.7653 12.7092L26.018 15.9619L29.2707 12.7092Z" fill="white"/>
            <path d="M28.6 0H0V1.4H28.6V0Z" fill="white"/>
            <path d="M14.3 4H0V6.8H14.3V4Z" fill="white"/>
            <path d="M23.1 6.7002H14.3V9.5002H23.1V6.7002Z" fill="white"/>
            <path d="M181.9 0H179H176.2H173.1H169.6V2.4H173.1H176.2V16.3H179V2.4H181.9H185.4V0H181.9Z" fill="white"/>
            <path d="M80.8 13.9V8.6H91.5V6.3H80.8V2.4H91.6V0H80.8H78.2H78V16.3H78.2H80.8H91.8V13.9H80.8Z" fill="white"/>
            <path d="M137.3 13.9V8.6H148V6.3H137.3V2.4H148.1V0H137.3H134.7H134.5V16.3H134.7H137.3H148.3V13.9H137.3Z" fill="white"/>
            <path d="M47.4 0.000285774H38.1H36.2H35.3V16.3003H38.1V9.10029H47.4C47.4 9.10029 52.2 9.60029 52.2 4.60029C52.2 -0.399714 47.4 0.000285774 47.4 0.000285774ZM47.7 6.60029H38.1V2.60029H47.7C47.7 2.60029 49.4 2.60029 49.4 4.60029C49.4 6.60029 47.7 6.60029 47.7 6.60029Z" fill="white"/>
            <path d="M126.7 0.000285774H118.4H116.5H115.6V16.3003H118.4V9.10029H126.7C126.7 9.10029 131.5 9.60029 131.5 4.60029C131.5 -0.399714 126.7 0.000285774 126.7 0.000285774ZM127 6.60029H118.4V2.60029H127C127 2.60029 128.7 2.60029 128.7 4.60029C128.7 6.60029 127 6.60029 127 6.60029Z" fill="white"/>
            <path d="M74.2 0H71.4H71.1L64.6 13.3L58.1 0H57.5H55H54.7V16.3H57.5V5.1L63 16.3H63.1H66.1H66.2L71.4 5.6V16.3H74.2V0Z" fill="white"/>
            <path d="M164.7 16.3002H167.8L164.2 9.00022C165.6 8.70022 167.7 7.80022 167.7 4.50022C167.7 -0.499783 162.9 0.000217014 162.9 0.000217014H154.3H152.4H151.5V16.3002H154.3V9.10022H161.2L164.7 16.3002ZM154.2 2.60022H163.1C163.1 2.60022 164.8 2.60022 164.8 4.60022C164.8 6.60022 163.1 6.60022 163.1 6.60022H154.2V2.60022Z" fill="white"/>
            <path d="M97.5 0H94.1L100 8.1L94.1 16.3H97.5L103.4 8.1L97.5 0Z" fill="white"/>
            <path d="M112.9 0H109.4L103.5 8.1L109.4 16.3H112.9L106.9 8.1L112.9 0Z" fill="white"/>
            <path d="M40.2 23.7002V24.7002H37.5V32.4002H36.4V24.7002H33.7V23.7002H40.2Z" fill="white"/>
            <path d="M43.5 27.5001C43.3 27.2001 43 27.0001 42.5 27.0001C41.7 27.0001 41.1 27.6001 41.1 28.5001V32.5001H40.1V26.2001H41.1V26.8001C41.4 26.4001 41.8 26.1001 42.6 26.1001C43.5 26.1001 44 26.4001 44.4 27.0001L43.5 27.5001Z" fill="white"/>
            <path d="M47.4 28.8001H48.9V28.1001C48.9 27.2001 48.5 27.0001 47.5 27.0001C46.7 27.0001 46.3 27.1001 46 27.6001L45.2 27.1001C45.6 26.4001 46.3 26.1001 47.5 26.1001C49.1 26.1001 49.9 26.6001 49.9 28.1001V32.5001H48.9V31.9001C48.5 32.5001 48.1 32.6001 47.3 32.6001C45.8 32.6001 45 31.9001 45 30.7001C45 29.3001 46 28.8001 47.4 28.8001ZM48.9 29.7001H47.4C46.4 29.7001 46 30.0001 46 30.7001C46 31.4001 46.5 31.7001 47.3 31.7001C48.2 31.7001 48.9 31.5001 48.9 30.1001V29.7001Z" fill="white"/>
            <path d="M51.4 23.7002H52.5V24.8002H51.4V23.7002ZM51.5 26.2002H52.5V32.5002H51.5V26.2002Z" fill="white"/>
            <path d="M54.1 26.2001H55.1V26.8001C55.4 26.3001 55.9 26.1001 56.8 26.1001C58.2 26.1001 59.1 26.8001 59.1 28.6001V32.5001H58.1V28.6001C58.1 27.3001 57.4 27.0001 56.7 27.0001C55.8 27.0001 55.2 27.7001 55.2 28.5001V32.4001H54.2V26.2001H54.1Z" fill="white"/>
            <path d="M60.6 23.7002H61.7V24.8002H60.6V23.7002ZM60.6 26.2002H61.6V32.5002H60.6V26.2002Z" fill="white"/>
            <path d="M63.2 26.2001H64.2V26.8001C64.5 26.3001 65 26.1001 65.9 26.1001C67.3 26.1001 68.2 26.8001 68.2 28.6001V32.5001H67.2V28.6001C67.2 27.3001 66.5 27.0001 65.8 27.0001C64.9 27.0001 64.3 27.7001 64.3 28.5001V32.4001H63.3V26.2001H63.2Z" fill="white"/>
            <path d="M73.8 26.2001H74.8V32.4001C74.8 34.2001 73.8 35.0001 72.1 35.0001C71 35.0001 70.3 34.7001 69.9 33.9001L70.7 33.3001C71 33.8001 71.4 34.0001 72.2 34.0001C73.3 34.0001 73.8 33.4001 73.8 32.3001V31.9001C73.5 32.3001 72.9 32.6001 72.1 32.6001C70.4 32.6001 69.6 31.4001 69.6 29.7001V28.9001C69.6 27.1001 70.6 26.1001 72.1 26.1001C72.9 26.1001 73.5 26.4001 73.8 26.8001V26.2001ZM73.8 29.7001V28.9001C73.8 27.7001 73.2 27.0001 72.2 27.0001C71.2 27.0001 70.6 27.7001 70.6 28.9001V29.7001C70.6 30.8001 71.1 31.6001 72.2 31.6001C73.3 31.7001 73.8 30.8001 73.8 29.7001Z" fill="white"/>
            <path d="M77.6 27.6002C77.1 27.0002 76.7 26.4002 76.7 25.7002C76.7 24.5002 77.6 23.7002 78.8 23.7002C80.4 23.7002 80.9 24.6002 80.9 25.4002C80.9 26.4002 80 27.0002 79 27.7002L81.3 30.2002C81.6 29.7002 81.7 29.1002 81.7 28.5002H82.7C82.7 29.4002 82.5 30.2002 82 31.0002L83.5 32.6002H82L81.3 31.8002C80.7 32.3002 79.8 32.7002 78.8 32.7002C76.9 32.7002 76 31.5002 76 30.2002C76 28.9002 76.7 28.2002 77.6 27.6002ZM80.6 31.0002L78.1 28.3002C77.5 28.8002 77 29.4002 77 30.2002C77 31.1002 77.7 31.7002 78.7 31.7002C79.6 31.6002 80.2 31.4002 80.6 31.0002ZM78.4 27.0002C79.2 26.5002 79.8 26.1002 79.8 25.5002C79.8 25.2002 79.5 24.7002 78.8 24.7002C78.2 24.7002 77.8 25.1002 77.8 25.7002C77.7 26.1002 78.1 26.6002 78.4 27.0002Z" fill="white"/>
            <path d="M89.4 26.5002C89.1 25.1002 88.4 24.7002 87.3 24.7002C86 24.7002 85.2 25.5002 85.2 27.7002V28.7002C85.2 30.9002 85.9 31.7002 87.3 31.7002C88.4 31.7002 89.1 31.1002 89.4 29.9002H90.4C90.1 31.9002 88.9 32.7002 87.3 32.7002C85.4 32.7002 84.1 31.5002 84.1 28.7002V27.7002C84.1 24.9002 85.3 23.7002 87.3 23.7002C89 23.7002 90.2 24.6002 90.4 26.5002H89.4Z" fill="white"/>
            <path d="M96.4 31.5001C96 32.3001 95.3 32.6001 94.2 32.6001C92.5 32.6001 91.5 31.5001 91.5 29.7001V28.9001C91.5 27.1001 92.3 26.1001 94 26.1001C95.7 26.1001 96.5 27.1001 96.5 28.9001V29.6001H92.5V29.8001C92.5 30.9001 93 31.7001 94.1 31.7001C94.9 31.7001 95.3 31.5001 95.6 31.0001L96.4 31.5001ZM92.5 28.7001H95.5C95.5 27.6001 95 27.0001 94 27.0001C93 27.0001 92.5 27.6001 92.5 28.7001Z" fill="white"/>
            <path d="M101.2 27.5001C100.9 27.1001 100.6 27.0001 100.1 27.0001C99.3 27.0001 98.7 27.6001 98.7 28.5001V32.5001H97.7V26.2001H98.7V26.8001C99 26.4001 99.4 26.1001 100.2 26.1001C101.1 26.1001 101.6 26.4001 102 27.0001L101.2 27.5001Z" fill="white"/>
            <path d="M102.6 26.2003H103.4V24.8003H104.4V26.2003H105.9V27.1003H104.4V30.3003C104.4 31.2003 104.5 31.5003 105.3 31.5003H105.8V32.5003H105.3C103.8 32.5003 103.4 31.9003 103.4 30.6003V27.1003H102.6V26.2003Z" fill="white"/>
            <path d="M107.1 23.7002H108.2V24.8002H107.1V23.7002ZM107.1 26.2002H108.1V32.5002H107.1V26.2002Z" fill="white"/>
            <path d="M110.1 26.2003V25.7003C110.1 24.4003 110.5 23.8003 112 23.8003H112.3V24.8003H112C111.2 24.8003 111.1 25.2003 111.1 26.0003V26.2003H114.1V32.5003H113.1V27.1003H111.1V32.5003H110.1V27.1003H109.3V26.2003H110.1Z" fill="white"/>
            <path d="M120.4 31.5001C120 32.2001 119.2 32.6001 118.2 32.6001C116.5 32.6001 115.5 31.5001 115.5 29.7001V28.9001C115.5 27.1001 116.5 26.1001 118.2 26.1001C119.1 26.1001 119.9 26.4001 120.4 27.1001L119.6 27.7001C119.3 27.3001 118.8 27.1001 118.2 27.1001C117.1 27.1001 116.5 27.8001 116.5 29.0001V29.8001C116.5 30.9001 117 31.7001 118.2 31.7001C118.8 31.7001 119.3 31.5001 119.6 31.0001L120.4 31.5001Z" fill="white"/>
            <path d="M123.5 28.8001H125V28.1001C125 27.2001 124.6 27.0001 123.6 27.0001C122.8 27.0001 122.4 27.1001 122.1 27.6001L121.3 27.1001C121.7 26.4001 122.4 26.1001 123.6 26.1001C125.2 26.1001 126 26.6001 126 28.1001V32.5001H125V31.9001C124.6 32.5001 124.2 32.6001 123.4 32.6001C121.9 32.6001 121.1 31.9001 121.1 30.7001C121.2 29.3001 122.1 28.8001 123.5 28.8001ZM125 29.7001H123.5C122.5 29.7001 122.1 30.0001 122.1 30.7001C122.1 31.4001 122.6 31.7001 123.4 31.7001C124.3 31.7001 125 31.5001 125 30.1001V29.7001Z" fill="white"/>
            <path d="M127 26.2003H127.8V24.8003H128.8V26.2003H130.3V27.1003H128.8V30.3003C128.8 31.2003 128.9 31.5003 129.7 31.5003H130.2V32.5003H129.7C128.2 32.5003 127.8 31.9003 127.8 30.6003V27.1003H127V26.2003Z" fill="white"/>
            <path d="M131.5 23.7002H132.6V24.8002H131.5V23.7002ZM131.5 26.2002H132.5V32.5002H131.5V26.2002Z" fill="white"/>
            <path d="M139.1 29.7001C139.1 31.3001 138.3 32.6001 136.5 32.6001C134.8 32.6001 133.9 31.5001 133.9 29.7001V28.9001C133.9 27.1001 134.9 26.1001 136.5 26.1001C138.2 26.1001 139.1 27.1001 139.1 28.9001V29.7001ZM138.1 29.7001V28.9001C138.1 27.7001 137.5 27.0001 136.5 27.0001C135.5 27.0001 134.9 27.7001 134.9 28.9001V29.7001C134.9 30.8001 135.4 31.6001 136.5 31.6001C137.6 31.7001 138.1 30.8001 138.1 29.7001Z" fill="white"/>
            <path d="M140.4 26.2001H141.4V26.8001C141.7 26.3001 142.2 26.1001 143.1 26.1001C144.5 26.1001 145.4 26.8001 145.4 28.6001V32.5001H144.4V28.6001C144.4 27.3001 143.7 27.0001 143 27.0001C142.1 27.0001 141.5 27.7001 141.5 28.5001V32.4001H140.5V26.2001H140.4Z" fill="white"/>
        </g>
        <defs>
            <clipPath id="clip0">
                <rect width="185.4" height="35" fill="white"/>
            </clipPath>
        </defs>
    </symbol>
    <symbol width="423" height="153" viewBox="0 0 423 153" fill="none" xmlns="http://www.w3.org/2000/svg" id="logo-white-big">
        <path d="M192.959 91.6678V118H175.742V41.562H202.714C221.974 41.562 231.604 49.682 231.604 65.922C231.604 73.5977 228.833 79.8165 223.289 84.5784C217.781 89.3047 210.407 91.6678 201.168 91.6678H192.959ZM192.959 54.7814V78.6083H199.729C208.897 78.6083 213.481 74.5927 213.481 66.5616C213.481 58.7081 208.897 54.7814 199.729 54.7814H192.959ZM329.897 118H312.893V72.2651C312.893 67.3256 313.106 61.8708 313.533 55.9008H313.106C312.218 60.5915 311.418 63.9675 310.708 66.0286L292.798 118H278.725L260.495 66.5616C259.998 65.1757 259.198 61.6221 258.097 55.9008H257.617C258.079 63.4344 258.31 70.0441 258.31 75.7299V118H242.798V41.562H268.011L283.629 86.8704C284.873 90.4951 285.779 94.1376 286.348 97.7978H286.668C287.627 93.569 288.64 89.891 289.706 86.7638L305.324 41.562H329.897V118ZM393.116 118H347.274V41.562H391.357V55.581H364.491V72.585H389.491V86.5506H364.491V104.034H393.116V118Z" fill="white"/>
        <path d="M412.339 59.293C409.737 59.293 407.597 58.4844 405.917 56.8672C404.245 55.25 403.409 53.1758 403.409 50.6445C403.409 48.168 404.269 46.0938 405.987 44.4219C407.714 42.75 409.862 41.9141 412.433 41.9141C414.995 41.9141 417.12 42.7305 418.808 44.3633C420.495 45.9883 421.339 48.0664 421.339 50.5977C421.339 53.0742 420.472 55.1445 418.737 56.8086C417.011 58.4648 414.878 59.293 412.339 59.293ZM412.386 43.2266C410.237 43.2266 408.464 43.9297 407.065 45.3359C405.667 46.7422 404.968 48.4961 404.968 50.5977C404.968 52.7227 405.675 54.4844 407.089 55.8828C408.511 57.2734 410.276 57.9688 412.386 57.9688C414.456 57.9688 416.206 57.2695 417.636 55.8711C419.065 54.4648 419.78 52.7148 419.78 50.6211C419.78 48.4961 419.077 46.7344 417.671 45.3359C416.265 43.9297 414.503 43.2266 412.386 43.2266ZM416.968 55.9062H413.991L413.101 53.1875C412.788 52.2344 412.358 51.7578 411.812 51.7578H410.944V55.9062H408.472V45.1016H412.222C415.112 45.1016 416.558 46.125 416.558 48.1719C416.558 49.6484 415.71 50.6016 414.015 51.0312V51.0781C414.718 51.2344 415.272 51.8047 415.679 52.7891L416.968 55.9062ZM410.944 47.1641V49.8594H412.245C413.331 49.8594 413.874 49.3945 413.874 48.4648C413.874 47.5977 413.249 47.1641 411.999 47.1641H410.944Z" fill="white"/>
        <path d="M179.781 145.025V149H177.182V137.46H181.254C184.162 137.46 185.616 138.686 185.616 141.138C185.616 142.297 185.197 143.235 184.36 143.954C183.529 144.668 182.416 145.025 181.021 145.025H179.781ZM179.781 139.456V143.053H180.803C182.188 143.053 182.88 142.447 182.88 141.234C182.88 140.049 182.188 139.456 180.803 139.456H179.781ZM192.432 143.053C192.126 142.887 191.769 142.804 191.362 142.804C190.809 142.804 190.377 143.007 190.066 143.415C189.755 143.817 189.599 144.367 189.599 145.065V149H187.056V140.759H189.599V142.288H189.631C190.034 141.173 190.758 140.615 191.804 140.615C192.072 140.615 192.282 140.647 192.432 140.711V143.053ZM197.55 149.201C196.177 149.201 195.096 148.818 194.307 148.05C193.524 147.278 193.132 146.232 193.132 144.912C193.132 143.549 193.54 142.484 194.355 141.717C195.171 140.945 196.273 140.558 197.663 140.558C199.031 140.558 200.104 140.945 200.882 141.717C201.659 142.484 202.048 143.501 202.048 144.767C202.048 146.135 201.646 147.216 200.841 148.01C200.042 148.804 198.945 149.201 197.55 149.201ZM197.614 142.506C197.013 142.506 196.547 142.712 196.214 143.125C195.881 143.539 195.715 144.123 195.715 144.88C195.715 146.462 196.354 147.254 197.63 147.254C198.848 147.254 199.457 146.441 199.457 144.815C199.457 143.276 198.843 142.506 197.614 142.506ZM204.986 139.456C204.557 139.456 204.205 139.33 203.932 139.078C203.658 138.82 203.521 138.506 203.521 138.136C203.521 137.755 203.658 137.444 203.932 137.203C204.205 136.961 204.557 136.84 204.986 136.84C205.42 136.84 205.772 136.961 206.04 137.203C206.314 137.444 206.45 137.755 206.45 138.136C206.45 138.522 206.314 138.839 206.04 139.086C205.772 139.332 205.42 139.456 204.986 139.456ZM206.241 148.855C206.241 150.073 205.943 151.047 205.348 151.776C204.752 152.506 203.894 152.871 202.773 152.871C202.403 152.871 201.997 152.79 201.558 152.629V150.634C201.912 150.832 202.225 150.931 202.499 150.931C203.298 150.931 203.698 150.304 203.698 149.048V140.759H206.241V148.855ZM215.785 145.604H210.41C210.496 146.8 211.249 147.399 212.671 147.399C213.578 147.399 214.374 147.184 215.061 146.755V148.59C214.299 148.997 213.309 149.201 212.092 149.201C210.761 149.201 209.728 148.834 208.993 148.099C208.258 147.358 207.891 146.328 207.891 145.009C207.891 143.64 208.288 142.557 209.082 141.757C209.876 140.958 210.852 140.558 212.011 140.558C213.213 140.558 214.141 140.915 214.795 141.629C215.455 142.342 215.785 143.311 215.785 144.534V145.604ZM213.427 144.043C213.427 142.863 212.95 142.272 211.995 142.272C211.587 142.272 211.233 142.441 210.933 142.779C210.638 143.117 210.458 143.539 210.394 144.043H213.427ZM223.543 148.702C222.969 149.035 222.14 149.201 221.056 149.201C219.79 149.201 218.766 148.818 217.982 148.05C217.199 147.283 216.807 146.293 216.807 145.081C216.807 143.681 217.226 142.578 218.063 141.773C218.905 140.963 220.029 140.558 221.435 140.558C222.406 140.558 223.108 140.687 223.543 140.945V143.101C223.012 142.704 222.419 142.506 221.764 142.506C221.035 142.506 220.455 142.72 220.026 143.15C219.602 143.573 219.391 144.161 219.391 144.912C219.391 145.642 219.594 146.216 220.002 146.634C220.41 147.047 220.97 147.254 221.684 147.254C222.317 147.254 222.937 147.055 223.543 146.658V148.702ZM230.198 148.903C229.823 149.102 229.257 149.201 228.5 149.201C226.708 149.201 225.812 148.27 225.812 146.409V142.635H224.476V140.759H225.812V138.981L228.347 138.257V140.759H230.198V142.635H228.347V145.966C228.347 146.825 228.688 147.254 229.369 147.254C229.638 147.254 229.914 147.176 230.198 147.02V148.903ZM249.592 149H247.025V142.095C247.025 141.35 247.057 140.526 247.122 139.625H247.057C246.923 140.333 246.803 140.843 246.695 141.154L243.991 149H241.867L239.115 141.234C239.04 141.025 238.919 140.489 238.752 139.625H238.68C238.75 140.762 238.785 141.76 238.785 142.618V149H236.443V137.46H240.249L242.607 144.3C242.795 144.848 242.932 145.397 243.018 145.95H243.066C243.211 145.312 243.364 144.756 243.525 144.284L245.882 137.46H249.592V149ZM258.823 149H256.416V147.817H256.384C255.832 148.74 255.014 149.201 253.93 149.201C253.13 149.201 252.5 148.976 252.039 148.525C251.583 148.069 251.355 147.463 251.355 146.706C251.355 145.108 252.302 144.185 254.195 143.938L256.433 143.64C256.433 142.739 255.944 142.288 254.968 142.288C253.986 142.288 253.053 142.581 252.167 143.166V141.25C252.522 141.068 253.004 140.907 253.616 140.768C254.233 140.628 254.794 140.558 255.298 140.558C257.648 140.558 258.823 141.731 258.823 144.075V149ZM256.433 145.652V145.097L254.936 145.29C254.11 145.397 253.696 145.77 253.696 146.409C253.696 146.698 253.796 146.937 253.994 147.125C254.198 147.307 254.472 147.399 254.815 147.399C255.293 147.399 255.681 147.235 255.982 146.908C256.282 146.575 256.433 146.157 256.433 145.652ZM268.793 149H266.258V144.421C266.258 143.144 265.802 142.506 264.89 142.506C264.45 142.506 264.088 142.675 263.804 143.013C263.52 143.351 263.377 143.78 263.377 144.3V149H260.834V140.759H263.377V142.063H263.41C264.016 141.06 264.898 140.558 266.057 140.558C267.881 140.558 268.793 141.69 268.793 143.954V149ZM277.67 149H275.263V147.817H275.231C274.679 148.74 273.86 149.201 272.777 149.201C271.977 149.201 271.347 148.976 270.886 148.525C270.43 148.069 270.202 147.463 270.202 146.706C270.202 145.108 271.149 144.185 273.042 143.938L275.28 143.64C275.28 142.739 274.791 142.288 273.815 142.288C272.833 142.288 271.9 142.581 271.014 143.166V141.25C271.368 141.068 271.851 140.907 272.463 140.768C273.08 140.628 273.641 140.558 274.145 140.558C276.495 140.558 277.67 141.731 277.67 144.075V149ZM275.28 145.652V145.097L273.783 145.29C272.956 145.397 272.543 145.77 272.543 146.409C272.543 146.698 272.643 146.937 272.841 147.125C273.045 147.307 273.319 147.399 273.662 147.399C274.139 147.399 274.528 147.235 274.829 146.908C275.129 146.575 275.28 146.157 275.28 145.652ZM287.761 148.058C287.761 149.587 287.318 150.77 286.433 151.607C285.548 152.45 284.266 152.871 282.587 152.871C281.476 152.871 280.596 152.713 279.947 152.396V150.255C280.795 150.749 281.65 150.996 282.514 150.996C283.372 150.996 284.038 150.768 284.51 150.312C284.982 149.861 285.218 149.247 285.218 148.469V147.817H285.186C284.606 148.74 283.751 149.201 282.619 149.201C281.567 149.201 280.733 148.831 280.116 148.091C279.499 147.35 279.191 146.358 279.191 145.113C279.191 143.718 279.534 142.61 280.221 141.79C280.907 140.969 281.811 140.558 282.933 140.558C283.936 140.558 284.687 140.945 285.186 141.717H285.218V140.759H287.761V148.058ZM285.25 145.041V144.389C285.25 143.868 285.095 143.426 284.783 143.061C284.478 142.691 284.078 142.506 283.584 142.506C283.021 142.506 282.578 142.726 282.257 143.166C281.935 143.606 281.774 144.225 281.774 145.025C281.774 145.711 281.927 146.256 282.232 146.658C282.538 147.055 282.957 147.254 283.488 147.254C284.014 147.254 284.437 147.053 284.759 146.65C285.087 146.242 285.25 145.706 285.25 145.041ZM297.289 145.604H291.913C291.999 146.8 292.753 147.399 294.175 147.399C295.081 147.399 295.878 147.184 296.565 146.755V148.59C295.803 148.997 294.813 149.201 293.595 149.201C292.265 149.201 291.232 148.834 290.497 148.099C289.762 147.358 289.395 146.328 289.395 145.009C289.395 143.64 289.792 142.557 290.586 141.757C291.38 140.958 292.356 140.558 293.515 140.558C294.717 140.558 295.645 140.915 296.299 141.629C296.959 142.342 297.289 143.311 297.289 144.534V145.604ZM294.931 144.043C294.931 142.863 294.454 142.272 293.499 142.272C293.091 142.272 292.737 142.441 292.436 142.779C292.141 143.117 291.962 143.539 291.897 144.043H294.931ZM311.887 149H309.352V144.3C309.352 143.104 308.912 142.506 308.032 142.506C307.614 142.506 307.273 142.685 307.01 143.045C306.747 143.404 306.616 143.852 306.616 144.389V149H304.073V144.252C304.073 143.088 303.641 142.506 302.777 142.506C302.343 142.506 301.994 142.677 301.731 143.021C301.474 143.364 301.345 143.831 301.345 144.421V149H298.802V140.759H301.345V142.047H301.377C301.64 141.607 302.008 141.25 302.48 140.977C302.957 140.698 303.477 140.558 304.041 140.558C305.205 140.558 306.002 141.071 306.431 142.095C307.059 141.071 307.981 140.558 309.199 140.558C310.991 140.558 311.887 141.663 311.887 143.874V149ZM321.302 145.604H315.927C316.013 146.8 316.766 147.399 318.188 147.399C319.095 147.399 319.891 147.184 320.578 146.755V148.59C319.816 148.997 318.827 149.201 317.609 149.201C316.278 149.201 315.245 148.834 314.51 148.099C313.775 147.358 313.408 146.328 313.408 145.009C313.408 143.64 313.805 142.557 314.599 141.757C315.393 140.958 316.369 140.558 317.528 140.558C318.73 140.558 319.658 140.915 320.313 141.629C320.972 142.342 321.302 143.311 321.302 144.534V145.604ZM318.945 144.043C318.945 142.863 318.467 142.272 317.512 142.272C317.104 142.272 316.75 142.441 316.45 142.779C316.155 143.117 315.975 143.539 315.911 144.043H318.945ZM330.774 149H328.239V144.421C328.239 143.144 327.783 142.506 326.871 142.506C326.431 142.506 326.069 142.675 325.785 143.013C325.5 143.351 325.358 143.78 325.358 144.3V149H322.815V140.759H325.358V142.063H325.39C325.997 141.06 326.879 140.558 328.038 140.558C329.862 140.558 330.774 141.69 330.774 143.954V149ZM337.775 148.903C337.4 149.102 336.834 149.201 336.077 149.201C334.286 149.201 333.39 148.27 333.39 146.409V142.635H332.054V140.759H333.39V138.981L335.924 138.257V140.759H337.775V142.635H335.924V145.966C335.924 146.825 336.265 147.254 336.946 147.254C337.215 147.254 337.491 147.176 337.775 147.02V148.903ZM350.941 149H344.02V137.46H350.675V139.577H346.619V142.144H350.394V144.252H346.619V146.892H350.941V149ZM360.501 140.759L357.781 144.751L360.485 149H357.556L356.365 146.779C356.268 146.602 356.153 146.352 356.019 146.031H355.987C355.906 146.256 355.796 146.497 355.657 146.755L354.458 149H351.536L354.321 144.896L351.705 140.759H354.651L355.826 143.069C355.981 143.375 356.091 143.632 356.156 143.842H356.188C356.274 143.589 356.389 143.327 356.534 143.053L357.733 140.759H360.501ZM364.227 148.042H364.195V152.79H361.652V140.759H364.195V141.999H364.227C364.855 141.038 365.737 140.558 366.875 140.558C367.942 140.558 368.766 140.926 369.345 141.661C369.93 142.39 370.222 143.386 370.222 144.646C370.222 146.02 369.882 147.122 369.2 147.954C368.524 148.785 367.623 149.201 366.496 149.201C365.504 149.201 364.747 148.815 364.227 148.042ZM364.155 144.662V145.322C364.155 145.891 364.305 146.355 364.605 146.715C364.906 147.074 365.3 147.254 365.788 147.254C366.368 147.254 366.816 147.031 367.132 146.586C367.454 146.135 367.615 145.499 367.615 144.679C367.615 143.23 367.052 142.506 365.925 142.506C365.405 142.506 364.978 142.704 364.646 143.101C364.318 143.493 364.155 144.013 364.155 144.662ZM379.276 145.604H373.9C373.986 146.8 374.74 147.399 376.161 147.399C377.068 147.399 377.865 147.184 378.551 146.755V148.59C377.79 148.997 376.8 149.201 375.582 149.201C374.251 149.201 373.219 148.834 372.484 148.099C371.749 147.358 371.381 146.328 371.381 145.009C371.381 143.64 371.778 142.557 372.572 141.757C373.366 140.958 374.343 140.558 375.501 140.558C376.703 140.558 377.631 140.915 378.286 141.629C378.946 142.342 379.276 143.311 379.276 144.534V145.604ZM376.918 144.043C376.918 142.863 376.44 142.272 375.485 142.272C375.078 142.272 374.724 142.441 374.423 142.779C374.128 143.117 373.948 143.539 373.884 144.043H376.918ZM386.164 143.053C385.858 142.887 385.502 142.804 385.094 142.804C384.541 142.804 384.109 143.007 383.798 143.415C383.487 143.817 383.332 144.367 383.332 145.065V149H380.789V140.759H383.332V142.288H383.364C383.766 141.173 384.49 140.615 385.537 140.615C385.805 140.615 386.014 140.647 386.164 140.711V143.053ZM392.337 148.903C391.961 149.102 391.395 149.201 390.639 149.201C388.847 149.201 387.951 148.27 387.951 146.409V142.635H386.615V140.759H387.951V138.981L390.486 138.257V140.759H392.337V142.635H390.486V145.966C390.486 146.825 390.826 147.254 391.508 147.254C391.776 147.254 392.052 147.176 392.337 147.02V148.903Z" fill="white"/>
        <path d="M138.199 41.7529H0.753662V49.2353H138.199V41.7529Z" fill="white"/>
        <path opacity="0.15" d="M138.246 48.5294H0.753662L138.246 44.3882V48.5294Z" fill="url(#paint0_linear)"/>
        <path d="M120.771 111.541H126.847V123.118H129.956V108.482H120.771V111.541Z" fill="#888B8C"/>
        <path d="M122.891 122.6L128.496 129.424L134.101 122.6H122.891Z" fill="#888B8C"/>
        <path d="M127.083 111.353V123.871H128.92V109.518L127.083 111.353Z" fill="white"/>
        <path d="M123.173 122.741L127.413 127.871L128.025 127.118V122.741H123.173Z" fill="white"/>
        <path d="M59.0667 69.1885H12.9061V84.8591H59.0667V69.1885Z" fill="white"/>
        <path opacity="0.15" d="M59.0667 84.1998H12.9061V80.9998L59.0667 73.7998V84.1998Z" fill="url(#paint1_linear)"/>
        <path d="M124.257 123.212L128.496 128.341L132.688 123.212H124.257Z" fill="#C4C3C3"/>
        <path d="M117.945 102.129H65.9437V117.8H117.945V102.129Z" fill="white"/>
        <path opacity="0.15" d="M117.945 117.188H65.9437V113.988L117.945 106.741V117.188Z" fill="url(#paint2_linear)"/>
        <path d="M62.1755 98.3647V121.377H121.525V98.3647H62.1755ZM117.662 117.471H66.5561V102.741H117.615V117.471H117.662Z" fill="#888B8C"/>
        <path d="M65.9438 117.941V102.129H118.134L121.384 98.5527H62.364V121.235L65.9438 117.941Z" fill="white"/>
        <path d="M117.333 102.741V117.188H66.5561L63.2589 120.436H120.63V99.4473L117.333 102.741Z" fill="white"/>
        <path d="M0 41V51.8235L10.551 62.3647L20.631 52.2941H118.416L128.496 62.3647L139 51.8235V41H0ZM137.446 51.2118L128.449 60.2L119.028 50.7412H19.9715L10.551 60.2L1.55439 51.2118V42.5529H137.493V51.2118H137.446Z" fill="#888B8C"/>
        <path d="M128.496 149L119.264 139.729L128.496 130.506L137.728 139.776L128.496 149Z" fill="#888B8C"/>
        <path d="M128.496 148.859L119.405 139.729L128.496 130.694V148.859Z" fill="white"/>
        <path d="M128.496 148.106L120.159 139.729L128.496 131.4L136.833 139.776L128.496 148.106Z" fill="#D2D4D4"/>
        <path d="M128.496 148.106L121.242 140.859L132.594 135.541L136.833 139.776L128.496 148.106Z" fill="#C4C3C3"/>
        <path d="M120.913 120.765L117.945 117.8V102.129L120.913 99.1646V120.765Z" fill="#C4C3C3"/>
        <path d="M65.9437 117.8L62.9763 120.765V99.1646L65.9437 102.129V117.8Z" fill="#D2D4D4"/>
        <path d="M65.9437 102.129L62.9763 99.1646H120.913L117.945 102.129H65.9437Z" fill="#D2D4D4"/>
        <path d="M62.9763 120.765L65.9437 117.8H117.945L120.913 120.765H62.9763Z" fill="#C4C3C3"/>
        <path d="M120.771 110.93H128.402L127.507 110.035V123.447H129.344V110.035V109.094H128.402H120.771V110.93Z" fill="#C4C3C3"/>
        <path d="M0.141296 41.1411V51.8235L10.5039 62.1764L10.5981 60.247L1.69568 51.3529V42.6941H137.634L138.246 41.7529L138.859 41.1411H0.141296Z" fill="white"/>
        <path d="M118.51 52.1531L128.449 62.0355V59.8707L119.028 50.459L118.51 52.1531Z" fill="white"/>
        <path d="M0.753662 41.7529V51.4941L10.5039 61.2353L20.2542 51.4941H118.699L128.449 61.2353L138.199 51.4941V41.7529H0.753662ZM3.76823 48.5294V44.7647H135.279V48.5294H3.76823Z" fill="#C4C3C3"/>
        <path d="M9.13794 65.4238V88.4356H62.6937V65.4238H9.13794ZM58.7842 84.5297H13.5185V69.8003H58.7842V84.5297Z" fill="#888B8C"/>
        <path d="M12.9061 84.9997V69.188H59.2552L62.5524 65.5645H9.27924V88.2468L12.9061 84.9997Z" fill="white"/>
        <path d="M58.4544 69.8V84.2H13.5184L10.2213 87.4941H61.7516V66.5059L58.4544 69.8Z" fill="white"/>
        <path d="M62.0814 87.7763L59.0668 84.8116V69.188L62.0814 66.1763V87.7763Z" fill="#C4C3C3"/>
        <path d="M12.9061 84.8116L9.93866 87.7763V66.1763L12.9061 69.188V84.8116Z" fill="#D2D4D4"/>
        <path d="M12.9061 69.188L9.93866 66.1763H62.0813L59.1139 69.188H12.9061Z" fill="#D2D4D4"/>
        <path d="M9.93866 87.7762L12.9061 84.8115H59.1139L62.0813 87.7762H9.93866Z" fill="#C4C3C3"/>
        <path d="M4.28632 45.3294H135.232V44.7646H3.76819V48.5294H4.28632V45.3294Z" fill="#888B8C"/>
        <path d="M134.714 47.9646H4.28632L3.76819 48.5294H135.232V44.7646L134.714 45.3294V47.9646Z" fill="white"/>
        <path d="M20.3013 51.5412L57.0414 48.5294H3.76823V44.7647H84.6906L138.246 41.7529H0.753662V51.5412L6.6886 57.4235L20.3013 51.5412Z" fill="#D2D4D4"/>
        <path d="M44.041 41.1411H33.8197L17.0511 44.7646H27.2253L44.041 41.1411Z" fill="white"/>
        <path d="M46.6787 65.5645H36.5046L19.6889 69.188H29.9102L46.6787 65.5645Z" fill="white"/>
        <path d="M95.5243 98.5527H85.303L68.5344 102.176H78.7557L95.5243 98.5527Z" fill="white"/>
        <path d="M123.079 136.059L128.873 136.388L124.916 134.271L123.079 136.059Z" fill="white"/>
        <path d="M62.0814 79.3059H68.1576V90.8824H71.2193V76.2471H62.0814V79.3059Z" fill="#888B8C"/>
        <path d="M64.1538 90.3179L69.759 97.1885L75.3642 90.3179H64.1538Z" fill="#888B8C"/>
        <path d="M68.346 79.1175V91.6352H70.183V77.2822L68.346 79.1175Z" fill="white"/>
        <path d="M64.4835 90.5059L68.6757 95.6353L69.288 94.8353V90.5059H64.4835Z" fill="white"/>
        <path d="M65.5198 90.9292L69.7591 96.1057L73.9512 90.9292H65.5198Z" fill="#C4C3C3"/>
        <path d="M62.0814 78.6942H69.6649L68.7699 77.8001V91.2118H70.6069V77.8001V76.8589H69.6649H62.0814V78.6942Z" fill="#C4C3C3"/>
        <defs>
            <linearGradient id="paint0_linear" x1="69.4944" y1="44.3748" x2="69.4944" y2="48.5393" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="1" stop-color="#1D191D"/>
            </linearGradient>
            <linearGradient id="paint1_linear" x1="35.9937" y1="73.7922" x2="35.9937" y2="84.1991" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="1" stop-color="#1D191D"/>
            </linearGradient>
            <linearGradient id="paint2_linear" x1="91.9535" y1="106.752" x2="91.9535" y2="117.166" gradientUnits="userSpaceOnUse">
                <stop stop-color="white"/>
                <stop offset="1" stop-color="#1D191D"/>
            </linearGradient>
        </defs>
    </symbol>
    <symbol width="86" height="91" viewBox="0 0 86 91" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-man-w-flag">
        <path d="M52.1 38.2001V89.8001V38.2001ZM17.9 52.6001L17.7 38.9001L17 38.7001L13.7 45.1001L17.9 52.6001ZM18.1 89.8001L17.8 72.9001L18 56.8001C16.5 57.8001 15 56.8001 14.8 56.3001L9.29999 47.9001C8.09999 46.4001 7.99999 43.9001 9.49999 42.2001L14.8 32.8001C16.8 29.3001 31.6 29.8001 35.3 30.6001L43 34.8001L53.3 32.1001C54.8 32.1001 54.5 37.3001 53.3 37.3001L43.5 40.7001C43 40.7001 42.5 40.5001 41.8 40.4001L35.1 37.9001L34.9 38.0001C34.7 43.2001 35.1 51.7001 34.9 56.9001V72.3001L34.6 89.2001L18.1 89.8001ZM32.4 16.8001C32.6 18.3001 32.2 22.2001 31.4 23.5001C30.7 24.7001 29.1 26.0001 27.4 26.3001C26.7 26.5001 26.2 26.5001 25.4 26.3001C23.6 26.0001 22.1 24.6001 21.4 23.5001C20.6 22.2001 20.2 18.5001 20.4 16.8001C20.7 13.8001 23.6 12.3001 26.4 12.3001C29.2 12.2001 32.1 13.7001 32.4 16.8001ZM30.1 89.8001L26.9 60.1001H26.1L22.9 89.8001H30.1ZM52.1 3.20006C56.3 4.40006 60.1 3.20006 63.8 2.20006C70 0.500055 76.1 1.40006 80.8 2.90006V22.0001C76.8 19.0001 71.1 19.0001 66.3 21.5001C61.3 24.0001 56.8 23.7001 52.1 21.5001V3.20006V3.20006ZM52.1 21.1001V32.7001V21.1001Z" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256"/>
        <path d="M85.1 89.3H0" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256"/>
    </symbol>
    <symbol width="79" height="87" viewBox="0 0 79 87" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-pmp">
        <path d="M22.2 31.4V34.5H20.1V25.4H23.3C25.6 25.4 26.7 26.4 26.7 28.3C26.7 29.2 26.4 30 25.7 30.5C25 31.1 24.2 31.3 23.1 31.3H22.2V31.4ZM22.2 27V29.8H23C24.1 29.8 24.6 29.3 24.6 28.4C24.6 27.5 24.1 27 23 27H22.2ZM38.5 34.5H36.5V29.1C36.5 28.5001 36.5 27.9001 36.6 27.2001H36.5C36.4 27.8001 36.3 28.2 36.2 28.4L34.1 34.6H32.4L30.2 28.5C30.1 28.3 30 27.9001 29.9 27.2001H29.8C30 28.0001 30 28.8 30 29.5V34.5H28.2V25.4H31.2L33.1 30.8C33.2 31.2 33.4 31.7 33.4 32.1C33.5 31.6 33.6 31.2 33.8 30.8L35.7 25.4H38.6V34.5H38.5ZM42.6 31.4V34.5H40.5V25.4H43.7C46 25.4 47.1 26.4 47.1 28.3C47.1 29.2 46.8 30 46.1 30.5C45.4 31.1 44.6 31.3 43.5 31.3H42.6V31.4ZM42.6 27V29.8H43.4C44.5 29.8 45 29.3 45 28.4C45 27.5 44.5 27 43.4 27H42.6ZM53.2 32.9001C52.1 32.9001 51.1 32.5 50.4 31.8C49.7 31.1 49.3 30.2 49.3 29.1C49.3 28.0001 49.7 27.1 50.4 26.4C51.1 25.7 52.1 25.3 53.2 25.3C54.3 25.3 55.2 25.7 56 26.4C56.7 27.1 57.1 28.0001 57.1 29.1C57.1 30.2 56.7 31.1 56 31.8C55.2 32.5 54.3 32.9001 53.2 32.9001ZM53.2 26C52.3 26 51.5 26.3 51 26.9C50.4 27.5 50.1 28.2 50.1 29.1C50.1 30.0001 50.4 30.7 51 31.3C51.6 31.9 52.3 32.2001 53.2 32.2001C54.1 32.2001 54.8 31.9 55.4 31.3C56 30.7 56.3 30.0001 56.3 29.1C56.3 28.2 56 27.5 55.4 26.9C54.8 26.3 54.1 26 53.2 26ZM55.2 31.3H53.9L53.5 30.1C53.4 29.7 53.2 29.5 52.9 29.5H52.6V31.3H51.5V26.6H53.1C54.4 26.6 55 27 55 27.9C55 28.5 54.6 29.0001 53.9 29.1C54.2 29.2 54.4 29.4 54.6 29.8L55.2 31.3ZM52.6 27.6V28.7001H53.1C53.6 28.7001 53.8 28.5001 53.8 28.1C53.8 27.7 53.5 27.6 53 27.6H52.6Z" fill="#CF1619"/>
        <path d="M72.1 87C72.6 87 73.1 86.6 73.1 86V12.7C73.1 12.2 72.7 11.7 72.1 11.7H67.2V6.8C67.2 6.3 66.8 5.8 66.2 5.8H22.7V4.6C22.7 2.1 20.6 0 18 0C15.4 0 13.3 2.1 13.3 4.6V5.8H9.9C9.4 5.8 8.9 6.2 8.9 6.8V70.4H1C0.5 70.4 0 70.8 0 71.4V75.8C0 78.8 2.4 81.2 5.4 81.2H14.8V86C14.8 86.5 15.2 87 15.8 87H72.1ZM67.1 75.8V13.7H71.1V85.1H16.8V81.2H61.7C64.7 81.1 67.1 78.7 67.1 75.8ZM15.3 4.6C15.3 3.1 16.5 1.9 18 1.9C19.5 1.9 20.7 3.1 20.7 4.6V5.8H15.3V4.6ZM10.9 7.8H20.8V12.7C20.8 13.8 19.9 14.7 18.8 14.7C17.7 14.7 16.8 13.8 16.8 12.7V11.7H14.8V12.7C14.8 14.9 16.6 16.6 18.7 16.6C20.8 16.6 22.6 14.9 22.6 12.7V7.8H65.1V75.8C65.1 77.7 63.5 79.2 61.6 79.2C59.7 79.2 58.1 77.7 58.1 75.8V71.4C58.1 70.9 57.7 70.4 57.1 70.4H10.9V7.8ZM5.4 79.2C3.5 79.2 1.9 77.7 1.9 75.8V72.4H56.2V75.8C56.2 76.7 56.5 77.7 56.9 78.5L57.3 79.3H5.4V79.2Z" fill="#CF1619"/>
        <path d="M24.2 51.3H22.2V53.2001H24.2V51.3Z" fill="#CF1619"/>
        <path d="M59.7 51.3H28.1V53.2001H59.7V51.3Z" fill="#CF1619"/>
        <path d="M24.2 45H22.2V46.9H24.2V45Z" fill="#CF1619"/>
        <path d="M59.7 45H28.1V46.9H59.7V45Z" fill="#CF1619"/>
        <path d="M59.7 57.2H16.3V59.0999H59.7V57.2Z" fill="#CF1619"/>
        <path d="M53.8 63.1001H16.3V65.0001H53.8V63.1001Z" fill="#CF1619"/>
        <path d="M79 63.1001H77V81.2001H79V63.1001Z" fill="#CF1619"/>
        <path d="M79 85.1001H77V87.0001H79V85.1001Z" fill="#CF1619"/>
        <path d="M5 20.5H3V38.6H5V20.5Z" fill="#CF1619"/>
        <path d="M5 14.7H3V16.6H5V14.7Z" fill="#CF1619"/>
    </symbol>
    <symbol width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-certificate">
        <path d="M61.3 60.9001L61.5 60.8C63.2 59.3 64.2 57.1 64.2 54.8C64.2 50.4 60.6 46.8 56.2 46.8C51.8 46.8 48.2 50.4 48.2 54.8C48.2 57 49.2 59.2001 50.9 60.7001L51.1 60.8V68.9001C51.1 69.2001 51.3 69.5 51.6 69.7C51.9 69.9 52.3 69.8 52.6 69.7L56.3 67.2L60 69.7C60.3 69.9 60.6 69.9 60.9 69.7C61.2 69.5 61.4 69.2001 61.4 68.9001V60.9001H61.3ZM59.5 67.2L56.7 65.3001C56.4 65.1001 56 65.1001 55.7 65.3001L52.9 67.2V62L53.6 62.2001C55.3 62.8001 57.2 62.8001 58.9 62.2001L59.6 62V67.2H59.5ZM56.2 60.9001C52.8 60.9001 50 58.1 50 54.7001C50 51.3001 52.8 48.5 56.2 48.5C59.6 48.5 62.4 51.3001 62.4 54.7001C62.4 58.1 59.6 60.9001 56.2 60.9001Z" fill="#CF1619"/>
        <path d="M50 14.2H32.6V16H50V14.2Z" fill="#CF1619"/>
        <path d="M64.1 22.7H19.8V24.5H64.1V22.7Z" fill="#CF1619"/>
        <path d="M50 31.2H19.8V33H50V31.2Z" fill="#CF1619"/>
        <path d="M64.2 31.2H56.7V33H64.2V31.2Z" fill="#CF1619"/>
        <path d="M64.1 39.7H19.8V41.5H64.1V39.7Z" fill="#CF1619"/>
        <path d="M35.8 48.2H19.8V50H35.8V48.2Z" fill="#CF1619"/>
        <path d="M25.9 55.3H19.8V57.1H25.9V55.3Z" fill="#CF1619"/>
        <path d="M35.8 55.3H32.6V57.1H35.8V55.3Z" fill="#CF1619"/>
        <path d="M77.4 0H17.9C14.3 0 11.3 3 11.3 6.6V73.7H0.9C0.4 73.7 0 74.1 0 74.6V77.4C0 81 3 84 6.6 84H66.1C69.7 84 72.7 81 72.7 77.4V10.3H83.1C83.6 10.3 84 9.9 84 9.4V6.6C84 3 81.1 0 77.4 0ZM6.6 82.2C4 82.2 1.8 80.1 1.8 77.4V75.5H59.5V77.4C59.5 78.8 60 80.2 60.8 81.3L61.4 82.1H6.6V82.2ZM72.1 2.7C71.7 3.2 71.4 3.8 71.2 4.4V4.5C71.1 4.8 71 5.1 71 5.4V5.6C70.9 6 70.9 6.3 70.9 6.6V77.4C70.9 80 68.8 82.2 66.1 82.2C63.5 82.2 61.3 80.1 61.3 77.4V74.6C61.3 74.1 60.9 73.7 60.4 73.7H13.2V6.6C13.2 4 15.3 1.8 18 1.8H73L72.1 2.7ZM82.2 8.5H72.7V6.6C72.7 4 74.8 1.9 77.4 1.9C80 1.9 82.2 4 82.2 6.7V8.5Z" fill="#CF1619"/>
    </symbol>
    <symbol width="26" height="70" viewBox="0 0 26 70" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-man">
        <path d="M5.28367 50.0865C5.73442 50.4057 6.35853 50.299 6.67766 49.8482C6.99678 49.3975 6.89007 48.7734 6.43932 48.4542L5.28367 50.0865ZM2.25456 46.7167L1.25858 46.8063L1.29993 47.2661L1.67673 47.5329L2.25456 46.7167ZM1.05225 33.3476L0.0537454 33.2929L0.0497848 33.3652L0.0562657 33.4372L1.05225 33.3476ZM1.6534 22.382L2.65199 22.4367L2.65253 22.4236L1.6534 22.382ZM12.9251 17.5751V16.5751H12.9116L12.8981 16.5755L12.9251 17.5751ZM24.1968 22.382L25.1953 22.3272L25.1945 22.3131L25.1933 22.2989L24.1968 22.382ZM24.7979 33.3476L25.7939 33.4372L25.8004 33.3652L25.7964 33.2929L24.7979 33.3476ZM23.5956 46.7167L24.1734 47.5329L24.5502 47.2661L24.5916 46.8063L23.5956 46.7167ZM19.4108 48.4542C18.9601 48.7734 18.8534 49.3975 19.1725 49.8482C19.4916 50.299 20.1157 50.4057 20.5665 50.0865L19.4108 48.4542ZM5.41063 24.1846L6.40942 24.1354C6.38266 23.5916 5.92577 23.1691 5.38154 23.185C4.83731 23.2008 4.40576 23.6491 4.41067 24.1936L5.41063 24.1846ZM5.56092 40.8584L4.56096 40.8674L4.56124 40.8989L4.56351 40.9304L5.56092 40.8584ZM7.66496 70L6.66756 70.072L8.66376 69.9509L7.66496 70ZM7.36439 5.40774L6.36987 5.303L6.36935 5.30818L7.36439 5.40774ZM18.4858 5.40774L17.4872 5.46032L17.4884 5.48385L17.4907 5.50729L18.4858 5.40774ZM17.584 11.7167L16.7362 11.1866L16.711 11.2269L16.6897 11.2694L17.584 11.7167ZM13.8268 14.4206L14.0228 15.4012L14.0566 15.3945L14.0898 15.3854L13.8268 14.4206ZM12.0233 14.4206L11.7604 15.3854L11.8091 15.3987L11.859 15.407L12.0233 14.4206ZM8.26612 11.7167L9.16046 11.2694L9.15074 11.2499L9.14018 11.2309L8.26612 11.7167ZM11.9251 70C11.9251 70.5523 12.3728 71 12.9251 71C13.4774 71 13.9251 70.5523 13.9251 70H11.9251ZM13.9251 44.4635C13.9251 43.9112 13.4774 43.4635 12.9251 43.4635C12.3728 43.4635 11.9251 43.9112 11.9251 44.4635H13.9251ZM20.4395 24.1846L21.4395 24.1936C21.4444 23.6491 21.0129 23.2008 20.4686 23.185C19.9244 23.1691 19.4675 23.5916 19.4407 24.1354L20.4395 24.1846ZM20.2892 40.8584L21.2866 40.9304L21.2889 40.8989L21.2892 40.8674L20.2892 40.8584ZM18.1852 70L17.1864 69.9509L19.1826 70.072L18.1852 70ZM13.9251 24.1846C13.9251 23.6323 13.4774 23.1846 12.9251 23.1846C12.3728 23.1846 11.9251 23.6323 11.9251 24.1846H13.9251ZM11.9251 37.7039C11.9251 38.2562 12.3728 38.7039 12.9251 38.7039C13.4774 38.7039 13.9251 38.2562 13.9251 37.7039H11.9251ZM11.9251 20.7296C11.9251 21.2819 12.3728 21.7296 12.9251 21.7296C13.4774 21.7296 13.9251 21.2819 13.9251 20.7296H11.9251ZM6.43932 48.4542L2.83238 45.9006L1.67673 47.5329L5.28367 50.0865L6.43932 48.4542ZM3.25054 46.6272L2.04823 33.2581L0.0562657 33.4372L1.25858 46.8063L3.25054 46.6272ZM2.05075 33.4024L2.6519 22.4367L0.654902 22.3272L0.0537454 33.2929L2.05075 33.4024ZM2.65253 22.4236C2.70095 21.2622 3.59395 20.3218 5.58904 19.6274C7.5452 18.9466 10.2017 18.649 12.9521 18.5748L12.8981 16.5755C10.0878 16.6514 7.18357 16.9547 4.93164 17.7385C2.71864 18.5087 0.756142 19.8966 0.65427 22.3403L2.65253 22.4236ZM12.9251 18.5751C15.6552 18.5751 18.266 18.8728 20.1946 19.5675C22.1507 20.272 23.0993 21.2544 23.2002 22.4651L25.1933 22.2989C24.9937 19.9045 23.0867 18.4834 20.8723 17.6858C18.6304 16.8783 15.7556 16.5751 12.9251 16.5751V18.5751ZM23.1983 22.4367L23.7994 33.4024L25.7964 33.2929L25.1953 22.3272L23.1983 22.4367ZM23.8019 33.2581L22.5996 46.6272L24.5916 46.8063L25.7939 33.4372L23.8019 33.2581ZM23.0178 45.9006L19.4108 48.4542L20.5665 50.0865L24.1734 47.5329L23.0178 45.9006ZM4.41067 24.1936L4.56096 40.8674L6.56088 40.8494L6.41059 24.1755L4.41067 24.1936ZM4.56351 40.9304L6.66756 70.072L8.66237 69.928L6.55832 40.7864L4.56351 40.9304ZM8.66376 69.9509L6.40942 24.1354L4.41184 24.2337L6.66617 70.0491L8.66376 69.9509ZM8.35889 5.51247C8.58688 3.34759 10.5273 2.05151 12.9251 2.05151V0.0515137C9.9125 0.0515137 6.74305 1.75973 6.36989 5.303L8.35889 5.51247ZM12.9251 2.05151C14.1898 2.05151 15.3251 2.38583 16.1346 2.97016C16.9203 3.53734 17.429 4.35553 17.4872 5.46032L19.4844 5.35515C19.3923 3.60587 18.5484 2.24594 17.3052 1.34853C16.0858 0.468266 14.5158 0.0515137 12.9251 0.0515137V2.05151ZM17.4907 5.50729C17.5559 6.15812 17.5258 7.35511 17.3803 8.55451C17.3085 9.14683 17.2114 9.71482 17.0925 10.1946C16.9686 10.6944 16.8391 11.0219 16.7362 11.1866L18.4319 12.2469C18.7047 11.8107 18.8946 11.2369 19.0337 10.6759C19.1778 10.0947 19.2873 9.44225 19.3658 8.79529C19.5209 7.51615 19.566 6.15949 19.4808 5.30818L17.4907 5.50729ZM16.6897 11.2694C16.256 12.1363 15.0432 13.0526 13.5638 13.4558L14.0898 15.3854C15.9168 14.8874 17.7097 13.7006 18.4784 12.1641L16.6897 11.2694ZM13.6308 13.44C13.2551 13.5151 13.1165 13.5333 12.9814 13.5333C12.8327 13.5333 12.6495 13.5111 12.1877 13.4342L11.859 15.407C12.2989 15.4803 12.6417 15.5333 12.9814 15.5333C13.3348 15.5333 13.6471 15.4763 14.0228 15.4012L13.6308 13.44ZM12.2863 13.4558C10.807 13.0526 9.59414 12.1363 9.16046 11.2694L7.37178 12.1641C8.14041 13.7006 9.93335 14.8874 11.7604 15.3854L12.2863 13.4558ZM9.14018 11.2309C8.86687 10.7392 8.619 9.70957 8.46961 8.49636C8.32435 7.31671 8.29434 6.15772 8.35942 5.50729L6.36935 5.30818C6.28414 6.1599 6.32928 7.47944 6.4846 8.74079C6.63579 9.96856 6.91392 11.3423 7.39207 12.2026L9.14018 11.2309ZM13.9251 70V44.4635H11.9251V70H13.9251ZM19.4396 24.1755L19.2893 40.8494L21.2892 40.8674L21.4395 24.1936L19.4396 24.1755ZM19.2918 40.7864L17.1878 69.928L19.1826 70.072L21.2866 40.9304L19.2918 40.7864ZM19.184 70.0491L21.4383 24.2337L19.4407 24.1354L17.1864 69.9509L19.184 70.0491ZM11.9251 24.1846V37.7039H13.9251V24.1846H11.9251ZM11.9251 17.5751V20.7296H13.9251V17.5751H11.9251Z" fill="#CF1619"/>
    </symbol>
    <symbol width="63" height="72" viewBox="0 0 63 72" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-people">
        <path d="M17.8203 8.7131L16.8223 8.77548L16.8242 8.80639L16.828 8.83713L17.8203 8.7131ZM17.0927 13.9522L17.9609 14.4483L17.9747 14.4242L17.9871 14.3994L17.0927 13.9522ZM13.891 16.1351L13.6949 15.1546L13.6716 15.1592L13.6485 15.165L13.891 16.1351ZM12.4357 16.1351L12.6782 15.165L12.6552 15.1592L12.6318 15.1546L12.4357 16.1351ZM9.23405 13.9522L10.1285 13.505L9.23405 13.9522ZM7.19663 68.0894L6.19775 68.1367L8.19642 68.0691L7.19663 68.0894ZM6.03239 43.4948L5.03251 43.4791L5.03201 43.5106L5.0335 43.5421L6.03239 43.4948ZM6.32345 25.0125L7.32324 24.9922L5.32357 24.9967L6.32345 25.0125ZM16.6757 68.0469C16.6522 68.5987 17.0805 69.065 17.6323 69.0885C18.1841 69.112 18.6504 68.6837 18.6739 68.1319L16.6757 68.0469ZM19.5471 47.6122C19.5706 47.0604 19.1423 46.594 18.5905 46.5706C18.0387 46.5471 17.5724 46.9753 17.5489 47.5271L19.5471 47.6122ZM1.8338 46.6293C1.87711 47.1799 2.35855 47.5912 2.90913 47.5479C3.45972 47.5046 3.87095 47.0231 3.82764 46.4725L1.8338 46.6293ZM1.81201 33.5988L0.814227 33.5322L0.809394 33.6047L0.81509 33.6772L1.81201 33.5988ZM2.39413 24.8669L1.42205 24.6323L1.40202 24.7153L1.39635 24.8004L2.39413 24.8669ZM17.5293 20.4823C18.0816 20.4823 18.5293 20.0346 18.5293 19.4823C18.5293 18.93 18.0816 18.4823 17.5293 18.4823V20.4823ZM26.1155 4.92931L25.1217 4.81888L25.1155 4.87393V4.92931H26.1155ZM36.5937 4.92931L35.5953 4.98478L35.5965 5.00684L35.5987 5.02882L36.5937 4.92931ZM35.7205 10.8961L36.5888 11.3922L36.5947 11.3817L35.7205 10.8961ZM32.2278 13.3701L32.0317 12.3895L32.0084 12.3941L31.9853 12.3999L32.2278 13.3701ZM30.4814 13.3701L30.6776 12.3895L30.669 12.3878L30.6603 12.3862L30.4814 13.3701ZM26.9887 10.8961L26.0749 11.3022L26.0954 11.3483L26.1205 11.3922L26.9887 10.8961ZM39.2133 71L38.2133 71.0132L40.2132 70.9878L39.2133 71ZM38.9222 49.025L37.9223 49.0362L37.9223 49.0382L38.9222 49.025ZM38.6311 23.1206L39.6311 23.1084L37.6312 23.1318L38.6311 23.1206ZM27.1582 70.8977C27.1017 71.4471 27.5013 71.9382 28.0506 71.9948C28.6 72.0513 29.0912 71.6517 29.1477 71.1023L27.1582 70.8977ZM33.7071 71.1023C33.7636 71.6517 34.2548 72.0513 34.8041 71.9948C35.3535 71.9382 35.7531 71.4471 35.6966 70.8977L33.7071 71.1023ZM24.3692 23.1206L25.3691 23.1358L23.3693 23.1037L24.3692 23.1206ZM23.9326 49.025L22.9327 49.0081L22.9327 49.0117L23.9326 49.025ZM23.6415 71L22.6416 70.9868L24.6414 71.0152L23.6415 71ZM41.2992 45.2897C40.7634 45.4237 40.4376 45.9666 40.5716 46.5024C40.7055 47.0382 41.2485 47.364 41.7843 47.23L41.2992 45.2897ZM42.4149 45.0956L41.4171 45.0291L41.4149 45.0623V45.0956H42.4149ZM43.2881 31.9979L44.2859 32.0644L44.2913 31.9837L44.2836 31.9031L43.2881 31.9979ZM42.1239 19.7734L43.1194 19.6786L43.1189 19.6739L42.1239 19.7734ZM20.7309 19.9189L19.7387 19.7949L19.737 19.8083L19.7357 19.8218L20.7309 19.9189ZM19.5667 31.8524L18.5714 31.7553L18.5634 31.837L18.5689 31.9189L19.5667 31.8524ZM20.4399 44.9501H21.4399V44.9168L21.4377 44.8836L20.4399 44.9501ZM21.0705 47.0845C21.6063 47.2184 22.1492 46.8927 22.2832 46.3569C22.4171 45.8211 22.0914 45.2782 21.5556 45.1442L21.0705 47.0845ZM45.3255 8.7131L46.3178 8.83713L46.3216 8.80639L46.3236 8.77548L45.3255 8.7131ZM46.0532 13.9522L45.1587 14.3994L45.1712 14.4242L45.1849 14.4483L46.0532 13.9522ZM49.2548 16.1351L49.4974 15.165L49.4743 15.1592L49.451 15.1546L49.2548 16.1351ZM50.7101 16.1351L50.4932 15.1589L50.4804 15.1618L50.4676 15.165L50.7101 16.1351ZM53.9118 13.9522L54.7439 14.5069L54.7784 14.4551L54.8062 14.3994L53.9118 13.9522ZM55.8037 68.0894L54.804 68.0658L56.8023 68.1426L55.8037 68.0894ZM57.1135 43.4948L58.112 43.548L58.1139 43.5135L58.1133 43.4791L57.1135 43.4948ZM56.8224 25.0125L57.8223 24.9967L55.8227 24.9888L56.8224 25.0125ZM44.4723 68.139C44.4997 68.6906 44.969 69.1156 45.5206 69.0882C46.0722 69.0608 46.4972 68.5914 46.4698 68.0398L44.4723 68.139ZM45.4511 47.5201C45.4237 46.9685 44.9544 46.5435 44.4028 46.5709C43.8512 46.5983 43.4262 47.0676 43.4536 47.6192L45.4511 47.5201ZM59.1727 46.4725C59.1294 47.0231 59.5406 47.5046 60.0912 47.5479C60.6418 47.5912 61.1232 47.1799 61.1665 46.6293L59.1727 46.4725ZM61.1883 33.5988L62.1852 33.6772L62.1909 33.6047L62.1861 33.5322L61.1883 33.5988ZM60.6062 24.8669L61.604 24.8004L61.5983 24.7153L61.5783 24.6323L60.6062 24.8669ZM45.4711 18.4823C44.9188 18.4823 44.4711 18.93 44.4711 19.4823C44.4711 20.0346 44.9188 20.4823 45.4711 20.4823V18.4823ZM13.4357 44.659C13.4357 44.1068 12.988 43.659 12.4357 43.659C11.8834 43.659 11.4357 44.1068 11.4357 44.659H13.4357ZM11.4357 68.0894C11.4357 68.6417 11.8834 69.0894 12.4357 69.0894C12.988 69.0894 13.4357 68.6417 13.4357 68.0894H11.4357ZM51.7101 44.659C51.7101 44.1068 51.2624 43.659 50.7101 43.659C50.1579 43.659 49.7101 44.1068 49.7101 44.659H51.7101ZM49.7101 68.0894C49.7101 68.6417 50.1579 69.0894 50.7101 69.0894C51.2624 69.0894 51.7101 68.6417 51.7101 68.0894H49.7101ZM32.5002 16.4262C32.5002 15.8739 32.0524 15.4262 31.5002 15.4262C30.9479 15.4262 30.5002 15.8739 30.5002 16.4262H32.5002ZM30.5002 19.1913C30.5002 19.7436 30.9479 20.1913 31.5002 20.1913C32.0524 20.1913 32.5002 19.7436 32.5002 19.1913H30.5002ZM32.3546 23.1103C32.3489 22.558 31.8966 22.1149 31.3443 22.1206C30.7921 22.1263 30.349 22.5786 30.3547 23.1309L32.3546 23.1103ZM30.5002 37.2473C30.5059 37.7996 30.9582 38.2426 31.5105 38.237C32.0627 38.2313 32.5058 37.779 32.5001 37.2267L30.5002 37.2473ZM32.1493 46.1837L31.1545 46.286L32.1493 46.1837ZM30.7055 46.1837L29.7108 46.0814L30.7055 46.1837ZM9.49868 8.83713C9.70344 7.19902 11.121 6.22037 13.1634 6.22037V4.22037C10.5488 4.22037 7.89148 5.57021 7.51412 8.58906L9.49868 8.83713ZM13.1634 6.22037C14.1753 6.22037 15.0946 6.47552 15.7477 6.92015C16.3748 7.34716 16.7708 7.95128 16.8223 8.77548L18.8184 8.65072C18.7244 7.14643 17.9561 6.00419 16.8732 5.26696C15.8163 4.54735 14.4799 4.22037 13.1634 4.22037V6.22037ZM16.828 8.83713C16.8855 9.29677 16.8608 10.2191 16.7371 11.2086C16.6113 12.2152 16.4075 13.0866 16.1982 13.505L17.9871 14.3994C18.36 13.6536 18.5928 12.4875 18.7216 11.4567C18.8526 10.4088 18.9007 9.29366 18.8126 8.58906L16.828 8.83713ZM16.2244 13.456C15.7957 14.2064 14.8868 14.9162 13.6949 15.1546L14.0871 17.1157C15.8059 16.772 17.2255 15.7354 17.9609 14.4483L16.2244 13.456ZM13.6485 15.165C13.3926 15.229 13.2643 15.2443 13.1634 15.2443C13.0624 15.2443 12.9341 15.229 12.6782 15.165L12.1932 17.1053C12.5194 17.1868 12.8278 17.2443 13.1634 17.2443C13.499 17.2443 13.8073 17.1868 14.1335 17.1053L13.6485 15.165ZM12.6318 15.1546C12.0609 15.0404 11.4979 14.7774 11.0316 14.4464C10.5535 14.1071 10.2509 13.7498 10.1285 13.505L8.33962 14.3994C8.65381 15.0278 9.22441 15.6164 9.87412 16.0775C10.5357 16.5469 11.3552 16.9388 12.2396 17.1157L12.6318 15.1546ZM10.1285 13.505C9.91927 13.0866 9.71546 12.2152 9.58963 11.2086C9.46594 10.2191 9.44122 9.29677 9.49868 8.83713L7.51412 8.58906C7.42605 9.29366 7.47409 10.4088 7.60508 11.4567C7.73393 12.4875 7.96671 13.6536 8.33962 14.3994L10.1285 13.505ZM8.19551 68.0421L7.03127 43.4475L5.0335 43.5421L6.19775 68.1367L8.19551 68.0421ZM7.03226 43.5106L7.32332 25.0282L5.32357 24.9967L5.03251 43.4791L7.03226 43.5106ZM5.32365 25.0327L6.19683 68.1097L8.19642 68.0691L7.32324 24.9922L5.32365 25.0327ZM18.6739 68.1319L19.5471 47.6122L17.5489 47.5271L16.6757 68.0469L18.6739 68.1319ZM3.82764 46.4725L2.80893 33.5203L0.81509 33.6772L1.8338 46.6293L3.82764 46.4725ZM2.8098 33.6653L3.39192 24.9335L1.39635 24.8004L0.814227 33.5322L2.8098 33.6653ZM3.36621 25.1016C3.86066 23.0532 4.44522 21.9955 5.24985 21.392C6.0679 20.7785 7.31267 20.4823 9.52511 20.4823V18.4823C7.22611 18.4823 5.41475 18.7683 4.04985 19.792C2.67153 20.8257 1.94632 22.4603 1.42205 24.6323L3.36621 25.1016ZM9.52511 20.4823H17.5293V18.4823H9.52511V20.4823ZM27.1094 5.03975C27.3214 3.13214 29.0069 2 31.3546 2V0C28.4633 0 25.4918 1.4874 25.1217 4.81888L27.1094 5.03975ZM31.3546 2C32.5126 2 33.5777 2.29175 34.34 2.80955C35.076 3.30944 35.5417 4.0204 35.5953 4.98478L37.5922 4.87384C37.5002 3.21869 36.6561 1.96499 35.4638 1.15511C34.2979 0.363141 32.8162 0 31.3546 0V2ZM35.5987 5.02882C35.6614 5.65567 35.6325 6.73903 35.4925 7.84128C35.3487 8.97359 35.1103 9.93526 34.8464 10.4104L36.5947 11.3817C37.0584 10.5471 37.3293 9.25302 37.4766 8.09323C37.6277 6.90339 37.6716 5.65826 37.5888 4.82981L35.5987 5.02882ZM34.8523 10.3999C34.6467 10.7596 34.2448 11.2064 33.7092 11.6003C33.177 11.9916 32.5822 12.2794 32.0317 12.3895L32.4239 14.3506C33.3288 14.1697 34.1892 13.7298 34.894 13.2116C35.5954 12.6958 36.2122 12.0512 36.5888 11.3922L34.8523 10.3999ZM31.9853 12.3999C31.5767 12.5021 31.2936 12.5127 30.6776 12.3895L30.2853 14.3506C31.1246 14.5185 31.7147 14.5291 32.4703 14.3402L31.9853 12.3999ZM30.6603 12.3862C29.3955 12.1562 28.3172 11.2053 27.857 10.3999L26.1205 11.3922C26.8245 12.6242 28.3657 14.0018 30.3026 14.3539L30.6603 12.3862ZM27.9025 10.4899C27.6773 9.98306 27.4714 8.98764 27.3259 7.84128C27.1846 6.72869 27.1155 5.60721 27.1155 4.92931H25.1155C25.1155 5.70672 25.192 6.91373 25.3418 8.09323C25.4873 9.23897 25.7181 10.4993 26.0749 11.3022L27.9025 10.4899ZM40.2132 70.9868L39.9221 49.0117L37.9223 49.0382L38.2133 71.0132L40.2132 70.9868ZM39.9221 49.0137L39.6311 23.1093L37.6312 23.1318L37.9223 49.0362L39.9221 49.0137ZM29.1477 71.1023L31.7003 46.286L29.7108 46.0814L27.1582 70.8977L29.1477 71.1023ZM31.1545 46.286L33.7071 71.1023L35.6966 70.8977L33.144 46.0814L31.1545 46.286ZM23.3693 23.1037L22.9327 49.0081L24.9325 49.0418L25.369 23.1374L23.3693 23.1037ZM22.9327 49.0117L22.6416 70.9868L24.6414 71.0132L24.9325 49.0382L22.9327 49.0117ZM24.6414 71.0152L25.3691 23.1358L23.3693 23.1054L22.6416 70.9848L24.6414 71.0152ZM41.7843 47.23C42.2747 47.1074 42.7055 46.8419 43.0054 46.4296C43.2998 46.0248 43.4149 45.552 43.4149 45.0956H41.4149C41.4149 45.1584 41.407 45.1996 41.4002 45.2233C41.3967 45.2351 41.3935 45.2426 41.3915 45.247C41.3894 45.2512 41.3881 45.253 41.3879 45.2533C41.3877 45.2536 41.3877 45.2536 41.3875 45.2538C41.3872 45.254 41.3855 45.2556 41.3812 45.2584C41.3732 45.2636 41.3492 45.2772 41.2992 45.2897L41.7843 47.23ZM43.4127 45.1622L44.2859 32.0644L42.2903 31.9314L41.4171 45.0291L43.4127 45.1622ZM44.2836 31.9031L43.1194 19.6786L41.1284 19.8682L42.2926 32.0927L44.2836 31.9031ZM43.1189 19.6739C43.0229 18.7144 42.3899 18.0065 41.6699 17.5112C40.9427 17.0111 39.9917 16.6286 38.9486 16.3364C36.853 15.7494 34.1502 15.4626 31.482 15.4626C28.8143 15.4626 26.0996 15.7493 23.9822 16.3563C22.9273 16.6587 21.9638 17.0565 21.2227 17.5796C20.4834 18.1014 19.8595 18.8282 19.7387 19.7949L21.7232 20.043C21.7479 19.8454 21.888 19.558 22.3761 19.2135C22.8623 18.8703 23.5894 18.5495 24.5333 18.2788C26.4135 17.7398 28.9288 17.4626 31.482 17.4626C34.0347 17.4626 36.5436 17.7397 38.4091 18.2623C39.3467 18.525 40.0635 18.8338 40.5364 19.1591C41.0164 19.4892 41.1156 19.7409 41.1288 19.8729L43.1189 19.6739ZM19.7357 19.8218L18.5714 31.7553L20.562 31.9495L21.7262 20.016L19.7357 19.8218ZM18.5689 31.9189L19.4421 45.0166L21.4377 44.8836L20.5645 31.7859L18.5689 31.9189ZM19.4399 44.9501C19.4399 45.4065 19.555 45.8793 19.8494 46.2841C20.1493 46.6964 20.5801 46.9619 21.0705 47.0845L21.5556 45.1442C21.5056 45.1317 21.4816 45.118 21.4736 45.1129C21.4693 45.1101 21.4675 45.1085 21.4673 45.1082C21.4671 45.108 21.4671 45.108 21.4669 45.1078C21.4667 45.1075 21.4654 45.1057 21.4633 45.1014C21.4613 45.0971 21.4581 45.0895 21.4546 45.0778C21.4477 45.0541 21.4399 45.0128 21.4399 44.9501H19.4399ZM55.6317 8.58906C55.2544 5.57021 52.5971 4.22037 49.9825 4.22037V6.22037C52.0249 6.22037 53.4424 7.19902 53.6472 8.83713L55.6317 8.58906ZM49.9825 4.22037C48.666 4.22037 47.3295 4.54735 46.2726 5.26696C45.1898 6.00419 44.4215 7.14643 44.3275 8.65072L46.3236 8.77548C46.3751 7.95128 46.771 7.34716 47.3982 6.92015C48.0512 6.47552 48.9705 6.22037 49.9825 6.22037V4.22037ZM44.3332 8.58906C44.2452 9.29366 44.2932 10.4088 44.4242 11.4567C44.5531 12.4875 44.7858 13.6536 45.1587 14.3994L46.9476 13.505C46.7384 13.0866 46.5346 12.2152 46.4088 11.2086C46.2851 10.2191 46.2603 9.29677 46.3178 8.83713L44.3332 8.58906ZM45.1849 14.4483C45.9204 15.7354 47.34 16.772 49.0587 17.1157L49.451 15.1546C48.2591 14.9162 47.3502 14.2064 46.9214 13.456L45.1849 14.4483ZM49.0123 17.1053C49.3386 17.1868 49.6469 17.2443 49.9825 17.2443C50.3181 17.2443 50.6264 17.1868 50.9527 17.1053L50.4676 15.165C50.2117 15.229 50.0835 15.2443 49.9825 15.2443C49.8815 15.2443 49.7532 15.229 49.4974 15.165L49.0123 17.1053ZM50.9271 17.1113C52.5112 16.7593 54.0321 15.5745 54.7439 14.5069L53.0798 13.3975C52.6273 14.0762 51.5286 14.9289 50.4932 15.1589L50.9271 17.1113ZM54.8062 14.3994C55.1791 13.6536 55.4119 12.4875 55.5408 11.4567C55.6718 10.4088 55.7198 9.29366 55.6317 8.58906L53.6472 8.83713C53.7046 9.29677 53.6799 10.2191 53.5562 11.2086C53.4304 12.2152 53.2266 13.0866 53.0174 13.505L54.8062 14.3994ZM56.8023 68.1426L58.112 43.548L56.1149 43.4416L54.8051 68.0362L56.8023 68.1426ZM58.1133 43.4791L57.8223 24.9967L55.8225 25.0282L56.1136 43.5106L58.1133 43.4791ZM55.8227 24.9888L54.804 68.0658L56.8034 68.113L57.8221 25.0361L55.8227 24.9888ZM46.4698 68.0398L45.4511 47.5201L43.4536 47.6192L44.4723 68.139L46.4698 68.0398ZM61.1665 46.6293L62.1852 33.6772L60.1914 33.5203L59.1727 46.4725L61.1665 46.6293ZM62.1861 33.5322L61.604 24.8004L59.6084 24.9335L60.1905 33.6653L62.1861 33.5322ZM61.5783 24.6323C61.054 22.4603 60.3288 20.8257 58.9505 19.792C57.5856 18.7683 55.7742 18.4823 53.4752 18.4823V20.4823C55.6876 20.4823 56.9324 20.7785 57.7505 21.392C58.5551 21.9955 59.1397 23.0532 59.6341 25.1016L61.5783 24.6323ZM53.4752 18.4823H45.4711V20.4823H53.4752V18.4823ZM11.4357 44.659V68.0894H13.4357V44.659H11.4357ZM49.7101 44.659V68.0894H51.7101V44.659H49.7101ZM30.5002 16.4262V19.1913H32.5002V16.4262H30.5002ZM30.3547 23.1309L30.5002 37.2473L32.5001 37.2267L32.3546 23.1103L30.3547 23.1309ZM37.6312 23.1327L38.2133 71.0122L40.2132 70.9878L39.6311 23.1084L37.6312 23.1327ZM31.4274 46.5322C31.2868 46.5322 31.1689 46.4259 31.1545 46.286L33.144 46.0814C33.0535 45.2013 32.3121 44.5322 31.4274 44.5322V46.5322ZM31.7003 46.286C31.6859 46.4259 31.568 46.5322 31.4274 46.5322V44.5322C30.5427 44.5322 29.8013 45.2013 29.7108 46.0814L31.7003 46.286Z" fill="#CF1619"/>
    </symbol>
    <symbol width="103" height="70" viewBox="0 0 103 70" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-people-around-table">
        <path d="M78.0377 38.199H24.9732" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M101.371 33.4946L99.3012 50.0538C98.7366 54.3817 96.4786 56.6398 92.527 56.6398H79.5431" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M76.1557 6.58592C76.3439 3.387 79.1664 1.69345 82.1772 1.69345C85.188 1.50528 88.0105 3.01065 88.3869 6.0214C88.7632 7.52678 88.3869 11.2902 87.6342 12.7956C86.8815 14.1128 85.3761 15.43 83.4944 15.9945C82.5535 16.1827 82.3654 16.1827 81.4245 16.1827C79.5428 15.8064 77.8492 14.6773 77.2847 13.5483C76.532 12.0429 76.1557 8.0913 76.1557 6.58592Z" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M76.7203 69.8119L77.2848 53.8173C77.2848 53.2528 77.6611 52.8764 78.4138 52.6883H89.3278C94.5966 52.6883 95.7256 48.7366 95.5375 44.785C95.3493 39.5162 95.1611 31.0485 93.0912 25.4033C90.4568 17.8764 83.1181 18.6291 79.3547 21.4517C76.9084 23.3334 74.6504 28.0377 72.7687 30.484C72.5805 30.6721 72.3923 30.6721 72.2041 30.8603L60.1611 32.5539C57.1504 33.3065 58.6558 37.8227 61.102 38.0108H72.9568C73.8977 37.8227 74.4622 37.6345 75.2149 37.2582L83.3063 30.6721" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M81.0485 32.9302L83.3065 42.3388L82.5538 43.4678L73.1452 45.5377C70.3226 46.1022 69.1936 49.6775 69.3818 51.5592L70.5108 69.6237" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M1.45169 33.4946L3.52158 50.0538C4.0861 54.3817 6.34416 56.6398 10.2958 56.6398H23.2796" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.4785 6.58603C26.2904 3.3871 23.4678 1.69355 20.457 1.69355C17.4463 1.31721 14.6237 2.82258 14.2474 5.83334C14.0592 7.52689 14.2474 11.2903 15.1882 12.7957C15.9409 14.1129 17.4463 15.4301 19.328 15.9946C20.2689 16.1828 20.457 16.1828 21.3979 16.1828C23.2796 15.8065 24.9732 14.6774 25.5377 13.5484C26.2904 12.043 26.6667 8.0914 26.4785 6.58603Z" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M26.1018 69.8119L25.5373 53.8173C25.5373 53.2528 25.1609 52.8764 24.4082 52.6883H13.4943C8.22545 52.6883 7.09641 48.7366 7.28459 44.785C7.47276 39.7044 7.66093 31.0485 9.54265 25.4033C12.1771 17.8764 19.5158 18.6291 23.2792 21.4517C25.7254 23.3334 27.9835 28.0377 29.8652 30.484C30.0534 30.6721 30.2416 30.6721 30.4297 30.8603L42.4728 32.5539C45.4835 33.3065 43.9781 37.8227 41.5319 38.0108H29.6771C28.7362 37.8227 28.1717 37.6345 27.419 37.2582L19.3276 30.6721" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M21.5861 32.9302L19.328 42.3388L20.0807 43.4678L29.4893 45.5377C32.3119 46.1022 33.4409 49.6775 33.2528 51.5592L32.1237 69.8119" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M57.1503 5.6451C56.9621 2.82252 54.3277 1.31714 51.5051 1.31714C48.6825 1.31714 46.0481 2.82252 45.86 5.6451C45.6718 7.15047 46.0481 10.7257 46.8008 12.0429C47.3653 13.172 48.8707 14.301 50.5643 14.6774C51.317 14.8655 51.5051 14.8655 52.446 14.6774C54.1395 14.301 55.6449 13.172 56.2094 12.0429C56.9621 10.7257 57.3385 7.15047 57.1503 5.6451Z" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
        <path d="M38.1453 28.7904L39.0861 23.5215C39.0861 16.9355 63.9248 16.9355 64.113 23.5215L64.6775 28.7904" stroke="#CF1619" stroke-width="2" stroke-miterlimit="22.9256" stroke-linecap="round"/>
    </symbol>
    <symbol width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg" id="arrow">
        <path d="M15.8571 16L23 8.5M23 8.5L15.8571 1M23 8.5L3.27836e-07 8.5" stroke="" stroke-width="2"/>
    </symbol>
    <symbol width="61" height="14" fill="none" id="logo-texterra">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.239 0C36.7815 0 37.3239 0 37.8663 0C37.4073 1.12656 37.0735 2.33658 36.5728 3.42142C36.0304 3.42142 35.5297 3.42142 34.9873 3.42142C35.4463 2.29485 35.7801 1.12656 36.239 0Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.69676 13.3929H2.69259V4.3387H0.0222168V1.87695H8.74265L8.36713 4.3387H5.69676V13.3929Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.8552 13.3929H26.851V4.3387H24.1807V1.87695H32.8594L32.5256 4.3387H29.8552V13.3929Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.5407 13.394H40.6617V8.22015C40.6617 6.92669 40.62 6.13392 40.4114 5.13253L43.04 4.67356C43.0817 4.84046 43.2069 5.17426 43.2069 5.67495C43.6242 5.04908 44.1666 4.63184 44.9594 4.63184C45.2097 4.63184 45.6269 4.67356 46.0442 4.88218L45.3766 7.21876C45.0011 7.01014 44.6673 6.96841 44.5421 6.96841C43.958 6.96841 43.6659 7.30221 43.5407 7.59428V13.394Z" fill="#a2a2a2"/>
        <path d="M20.1752 12.0988C19.8414 11.4312 19.7997 11.2226 19.7997 11.1392C19.7997 11.2226 19.8414 11.3895 20.1752 12.0988Z" fill="#a2a2a2"/>
        <rect width="2.08623" height="3.33797" transform="matrix(0.5055 0 0 -0.4913 19.5402 12.4546)" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.21 9.34671C15.21 9.30499 15.21 9.26326 15.21 9.17982C15.1683 7.30221 14.7511 6.42599 14.2504 5.80012C13.8749 5.34115 13.1238 4.63184 11.5383 4.63184C10.7872 4.63184 9.49377 4.75701 8.57583 5.80012C7.78306 6.67634 7.53271 7.88635 7.53271 9.13809C7.53271 9.22154 7.53271 9.30499 7.53271 9.38844C7.57444 10.5567 7.90824 11.8085 8.8679 12.643C9.74412 13.394 10.7872 13.5609 11.6217 13.6026C11.6634 13.6026 11.7469 13.6026 11.7886 13.6026C12.5397 13.6026 13.8331 13.5192 15.2518 12.3926L14.1669 10.7236C13.5411 11.2243 12.7066 11.5581 11.9972 11.5998C11.9555 11.5998 11.9555 11.5998 11.9138 11.5998C11.6217 11.5998 11.0793 11.5164 10.7455 10.974C10.5786 10.7236 10.5369 10.3064 10.5369 10.0143H15.2935V9.34671H15.21ZM10.4534 8.05325C10.4534 7.76118 10.5369 7.21876 10.7872 6.92669C10.9541 6.71807 11.2045 6.67634 11.4548 6.67634C11.7052 6.67634 12.0807 6.75979 12.2476 7.21876C12.331 7.46911 12.3728 7.8029 12.3728 8.09498V8.17843H10.4534V8.05325Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.7189 9.17955L21.5103 8.84575L24.0555 4.84019H20.6758L20.3003 5.59123C20.1334 5.92503 19.9248 6.5509 19.8831 7.00987C19.7579 6.384 19.4658 5.88331 19.3824 5.71641L18.7148 4.58984L15.6272 5.17399L18.0889 8.97093L17.922 9.17955L15.1265 13.3937H18.6313L19.132 12.5175C19.3406 12.142 19.5075 11.9334 19.7162 11.1406H19.7579C19.7579 11.2241 19.8413 11.4327 20.1334 12.1003L20.7593 13.4355H24.431L21.7189 9.17955Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.3682 9.34671C39.3682 9.30499 39.3682 9.26326 39.3682 9.17982C39.3265 7.30221 38.9093 6.42599 38.4086 5.80012C38.0331 5.34115 37.282 4.63184 35.6965 4.63184C34.9454 4.63184 33.652 4.75701 32.734 5.80012C31.9413 6.67634 31.6909 7.88635 31.6909 9.13809C31.6909 9.22154 31.6909 9.30499 31.6909 9.38844C31.7326 10.5567 32.0664 11.8085 33.0261 12.643C33.9023 13.394 34.9454 13.5609 35.7799 13.6026C35.8217 13.6026 35.9051 13.6026 35.9468 13.6026C36.6979 13.6026 37.9913 13.5192 39.41 12.3926L38.3251 10.7236C37.6993 11.2243 36.8648 11.5581 36.1554 11.5998C36.1137 11.5998 36.1137 11.5998 36.072 11.5998C35.7799 11.5998 35.2375 11.5164 34.9037 10.974C34.7368 10.7236 34.6951 10.3064 34.6951 10.0143H39.4517V9.34671H39.3682ZM34.6116 8.05325C34.6116 7.76118 34.6951 7.21876 34.9454 6.92669C35.1123 6.71807 35.3627 6.67634 35.613 6.67634C35.8634 6.67634 36.2389 6.75979 36.4058 7.21876C36.4892 7.46911 36.531 7.8029 36.531 8.09498V8.17843H34.6116V8.05325Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M49.6743 13.394H46.7953V8.22015C46.7953 6.92669 46.7535 6.13392 46.5449 5.13253L49.1736 4.67356C49.2153 4.84046 49.3405 5.17426 49.3405 5.67495C49.7577 5.04908 50.3001 4.63184 51.0929 4.63184C51.3432 4.63184 51.7605 4.67356 52.1777 4.88218L51.5101 7.21876C51.1346 7.01014 50.8008 6.96841 50.6757 6.96841C50.0915 6.96841 49.7994 7.30221 49.6743 7.59428V13.394Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M58.3112 13.7683L58.3529 13.7266H58.186C58.2695 13.7266 58.2695 13.7266 58.3112 13.7683Z" fill="#a2a2a2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.8972 12.1C59.4799 11.808 59.313 11.3907 59.313 10.5562C59.313 10.5145 59.313 10.5145 59.313 10.4728V9.17933V7.51034C59.313 7.26 59.313 6.63413 59.1879 6.17516C59.0627 5.79964 58.8123 5.34067 58.1447 5.00687C57.4354 4.67307 56.6844 4.63135 56.142 4.63135C55.224 4.63135 54.5564 4.83997 54.014 5.00687C53.5133 5.17377 52.8874 5.46584 52.3033 5.84136L53.3464 7.63552C53.4299 7.59379 54.0975 7.05137 54.8485 6.84275C55.1823 6.7593 55.5161 6.71758 55.7664 6.71758C55.9333 6.71758 56.1837 6.71758 56.3506 6.9262C56.3923 6.96792 56.4758 7.0931 56.4758 7.51034V8.05276C56.3089 8.05276 56.142 8.05276 55.9751 8.05276C55.224 8.05276 54.2644 8.17794 53.4299 8.67863C53.1795 8.84553 53.0126 9.01243 52.8457 9.17933C52.4285 9.6383 52.2198 10.2224 52.2198 10.9318C52.2198 11.7245 52.5119 12.4338 52.9709 12.8928C53.3464 13.2683 54.014 13.6021 55.0571 13.6021C55.8082 13.6021 56.6427 13.4352 57.2685 12.8928C57.4771 13.2683 57.8109 13.477 58.2282 13.6856H58.3951L59.9389 12.1835L60.0223 12.1C59.9389 12.1418 59.9389 12.1 59.8972 12.1ZM56.4758 11.349C56.3923 11.4325 56.3089 11.4742 56.2254 11.5159C56.1002 11.5994 55.9751 11.5994 55.8082 11.5994C55.5995 11.5994 55.3075 11.5159 55.1406 11.2656C55.0571 11.0987 55.0154 10.9318 55.0154 10.7649C55.0154 10.7231 55.0154 10.7231 55.0154 10.6814C55.0154 10.5145 55.0988 10.2224 55.4326 10.0138C55.6413 9.88865 55.8916 9.84692 56.2671 9.8052C56.3089 9.8052 56.3506 9.8052 56.434 9.8052H56.5175V11.349H56.4758Z" fill="#a2a2a2"/>
        <path opacity="0.5" d="M5.69655 9.17871H2.69238V13.3929H5.69655V9.17871Z" fill="#a2a2a2"/>
        <path d="M29.8552 9.17871H26.8511V13.3929H29.8552V9.17871Z" fill="#a2a2a2"/>
        <path d="M43.541 9.17871H40.662V13.3929H43.541V9.17871Z" fill="#a2a2a2"/>
        <path opacity="0.5" d="M7.49084 9.42906C7.53257 10.5973 7.86637 11.8491 8.82603 12.6836C9.70225 13.4346 10.7454 13.6015 11.5799 13.6432C11.6216 13.6432 11.705 13.6432 11.7468 13.6432C12.4978 13.6432 13.7913 13.5598 15.2099 12.4332L14.1251 10.7642C13.4992 11.2649 12.6647 11.5987 11.9554 11.6405C11.9137 11.6405 11.9137 11.6405 11.8719 11.6405C11.5799 11.6405 11.0374 11.557 10.7036 11.0146C10.5367 10.7642 10.495 10.347 10.495 10.0549H15.2516V9.34561C15.2516 9.30388 15.2516 9.26216 15.2516 9.17871H7.49084C7.49084 9.26216 7.49084 9.34561 7.49084 9.42906Z" fill="#a2a2a2"/>
        <path opacity="0.5" d="M18.6313 13.3929L19.132 12.5167C19.3406 12.1412 19.5075 11.9325 19.7162 11.1398H19.7579C19.7579 11.2232 19.8413 11.4318 20.1334 12.0994L20.7593 13.4346H24.431L21.7189 9.17871H17.922L15.1265 13.3929H18.6313Z" fill="#a2a2a2"/>
        <path d="M31.6495 9.42906C31.6912 10.5973 32.025 11.8491 32.9847 12.6836C33.8609 13.4346 34.904 13.6015 35.7385 13.6432C35.7802 13.6432 35.8637 13.6432 35.9054 13.6432C36.6565 13.6432 37.9499 13.5598 39.3686 12.4332L38.2837 10.7642C37.6579 11.2649 36.8234 11.5987 36.114 11.6405C36.0723 11.6405 36.0723 11.6405 36.0306 11.6405C35.7385 11.6405 35.1961 11.557 34.8623 11.0146C34.6954 10.7642 34.6537 10.347 34.6537 10.0549H39.4103V9.34561C39.4103 9.30388 39.4103 9.26216 39.4103 9.17871H31.6078C31.6078 9.26216 31.6078 9.34561 31.6495 9.42906Z" fill="#a2a2a2"/>
        <path d="M49.6745 9.17871H46.7955V13.3929H49.6745V9.17871Z" fill="#a2a2a2"/>
        <path d="M52.8457 9.17893C52.4285 9.6379 52.2198 10.222 52.2198 10.9314C52.2198 11.7241 52.5119 12.4334 52.9709 12.8924C53.3464 13.2679 54.014 13.6017 55.0571 13.6017C55.8082 13.6017 56.6427 13.4348 57.2685 12.8924C57.4771 13.2679 57.8109 13.4766 58.2282 13.6852H58.3951L59.9389 12.1831L60.0223 12.0997C59.9806 12.0997 59.9806 12.0579 59.9389 12.0579C59.5217 11.7659 59.3548 11.3486 59.3548 10.5141C59.3548 10.4724 59.3548 10.4724 59.3548 10.4307V9.13721L52.8457 9.17893ZM55.0154 10.7227C55.0154 10.5558 55.0988 10.2638 55.4326 10.0551C55.6413 9.92997 55.8916 9.88825 56.2671 9.84653C56.3089 9.84653 56.3506 9.84653 56.434 9.84653H56.5175V11.3486C56.434 11.4321 56.3506 11.4738 56.2671 11.5155C56.142 11.599 56.0168 11.599 55.8499 11.599C55.6413 11.599 55.3492 11.5155 55.1823 11.2652C55.0988 11.0983 55.0571 10.9314 55.0571 10.7645C55.0154 10.7645 55.0154 10.7645 55.0154 10.7227Z" fill="#a2a2a2"/>
    </symbol>
    <symbol width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-close">
        <path d="M1 1L11 11M21 21L11 11M11 11L1 21M11 11L21 1" stroke="black" stroke-width="2"/>
    </symbol>
    <symbol width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" id="icon-copy">
        <path d="M30.8909 8.39484H8.57674C6.48294 8.39484 4.78235 10.0954 4.78235 12.1892V44.2056C4.78235 46.2994 6.48294 48 8.57674 48H30.8909C32.9847 48 34.6853 46.2994 34.6853 44.2056V12.1892C34.6755 10.0954 32.9749 8.39484 30.8909 8.39484ZM32.0213 44.1958C32.0213 44.8249 31.5102 45.3361 30.8811 45.3361H8.56691C7.93779 45.3361 7.42663 44.8249 7.42663 44.1958V12.1892C7.42663 11.5601 7.93779 11.0489 8.56691 11.0489H30.8811C31.5102 11.0489 32.0213 11.5601 32.0213 12.1892V44.1958Z" fill="#454543"/>
        <path d="M39.4234 0H17.1092C15.0154 0 13.3148 1.70059 13.3148 3.79439C13.3148 4.53164 13.9046 5.12144 14.6419 5.12144C15.3791 5.12144 15.9689 4.53164 15.9689 3.79439C15.9689 3.16527 16.4801 2.65411 17.1092 2.65411H39.4234C40.0525 2.65411 40.5636 3.16527 40.5636 3.79439V35.8108C40.5636 36.4399 40.0525 36.9511 39.4234 36.9511C38.6861 36.9511 38.0963 37.5409 38.0963 38.2781C38.0963 39.0154 38.6861 39.6052 39.4234 39.6052C41.5172 39.6052 43.2177 37.9046 43.2177 35.8108V3.79439C43.2177 1.70059 41.5172 0 39.4234 0Z" fill="#454543"/>
    </symbol>
</svg>
<?CJSCore::Init(array("jquery"));?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/libs.min.js');?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scripts.js');?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/backend.js');?>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(function () {
        var MyHintContentLayout = ymaps.templateLayoutFactory.createClass('$[properties.hintContent]')
        var myMap = new ymaps.Map('map', {
                center: [55.771520, 37.651493],
                zoom: 17
            }),

            myPlacemark1 = new ymaps.Placemark([55.771520, 37.651493], {
                // Свойства.
                // Содержимое иконки, балуна и хинта.
                // iconContent: '1',
                // balloonContent: '<div>Адрес: 125047, г. Москва, 1-й Тверской–Ямской пер., дом 11.</br>Войти через стеклянную дверь мимо охраны на второй этаж.</br>Время работы: пн-пт 9:30-18:30</br>Телефоны: +7 (495) 411-79-69 (многоканальный)</div>',
                hintContent: 'Каланчёвская улица, 15'
                // hintContentLayout: HintLayout
            }, {
                // Опции.
                // Стандартная фиолетовая иконка.
                preset: 'islands#redIcon'
            }),

            myPlacemark2 = new ymaps.Placemark([56.830901, 60.610410], {
                // Свойства.
                // balloonContent: '<div>Адрес: 127422, г. Москва, ул. Тимирязевская, 4/12</br>Многоканальный телефон: +7 (495) 988?49?76; (секретариат)</br>E-mail: oviont@oviont.ru</br>E-mail отдела продаж: info@oviont.ru</div>',
                hintContent: 'ул. Гоголя, 36, офис 605'
            }, {
                preset: 'islands#redIcon'
                // Опции.
                // Своё изображение иконки метки.
                // iconImageHref: 'images/myIcon.gif',
                // Размеры метки.
                // iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                // iconImageOffset: [-3, -42]
            }),

            myPlacemark3 = new ymaps.Placemark([55.023043, 82.923794], {
                // Свойства.
                // balloonContent: '<div>Адрес: 127422, г. Москва, ул. Тимирязевская, 4/12</br>Многоканальный телефон: +7 (495) 988?49?76; (секретариат)</br>E-mail: oviont@oviont.ru</br>E-mail отдела продаж: info@oviont.ru</div>',
                hintContent: 'ул. Коммунистическая, 48а, БЦ Фанат, оф. 515. 5 этаж'
            }, {
                preset: 'islands#redIcon'
                // Опции.
                // Своё изображение иконки метки.
                // iconImageHref: 'images/myIcon.gif',
                // Размеры метки.
                // iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                // iconImageOffset: [-3, -42]
            }),

            myPlacemark4 = new ymaps.Placemark([53.188924, 45.015459], {
                // Свойства.
                // balloonContent: '<div>Адрес: 127422, г. Москва, ул. Тимирязевская, 4/12</br>Многоканальный телефон: +7 (495) 988?49?76; (секретариат)</br>E-mail: oviont@oviont.ru</br>E-mail отдела продаж: info@oviont.ru</div>',
                hintContent: 'ул. Московская, 29, офис 704'
            }, {
                preset: 'islands#redIcon'
                // Опции.
                // Своё изображение иконки метки.
                // iconImageHref: 'images/myIcon.gif',
                // Размеры метки.
                // iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                // iconImageOffset: [-3, -42]
            });
        myMap.behaviors.disable('scrollZoom');
        // Добавляем все метки на карту.
        myMap.geoObjects
            .add(myPlacemark1)
            .add(myPlacemark2)
            .add(myPlacemark3)
            .add(myPlacemark4);
        myMap.controls
            .remove('searchControl');

        $('.contacts__block__item input[type="radio"]').change(function () {
            var dataLatitude = $(this).parents('.contacts__block__item').data('latitude');
            var dataLongitude = $(this).parents('.contacts__block__item').data('longitude');

            $(this).parents('.contacts__block__item').addClass('active');
            $(this).parents('.contacts__block__item').siblings().removeClass('active');

            myMap.setCenter([dataLatitude,dataLongitude], 16);
        });
    });
</script>
<script>
    function send_mail(subject, id){
        if(document.getElementById("kk_" + id + "_date") != undefined){
            var date = document.getElementById("kk_" + id + "_date").innerHTML;
        }else{
            var date = "";
        }
        var fio = document.getElementById("kk_" + id + "_fio").value;
        var tel = document.getElementById("kk_" + id + "_tel").value;
        var mail = document.getElementById("kk_" + id + "_mail").value;
        if(id != "status" && id != "main"){
            if(date == ""){alert('Укажите Дату!'); return;}
        }
        if(fio == ""){alert('Укажите ФИО!'); return;}
        if(tel == ""){alert('Укажите телефон!'); return;}
        if(mail == ""){alert('Укажите адрес электронной почты!'); return;}
        //if(validateEmail(mail)){}else{"Укажите корректный адрес электронной почты!"; return;}
        $.ajax({
            type: "POST",
            url: '<?=SITE_TEMPLATE_PATH?>/sendmail.php',
            data: "fio=" + fio +
            "&tel=" + tel +
            "&mail=" + mail +
            "&subject=" + subject +
            "&date=" + date,
            cache: false,
            success: function(response){
                if(id == "main"){
                    $('.leave__request__block__content').hide();
                    $('.leave__request__block__reminder').fadeIn();
                }else{
                    $("#kk_" + id + "_fio").parents('.popup').fadeOut();
                    $('.certification__reminder__popup').fadeIn();
                }
                //window.open('http://www.pmexpert.ru/shop/list.php?SECTION_ID=311', '_blank');
            }
        });
        return false;
    }

    function shop(){
        //window.open('http://www.pmexpert.ru/shop/cart.php', '_blank');
        var datestring = document.getElementById('kk_shop_date').innerHTML;
        if(datestring == ""){
            alert("Не указана дата курса!");
            return false;
        }
        $.ajax({
            type: "POST",
            url: '<?=SITE_TEMPLATE_PATH?>/addtocart.php',
            data: "coursedate=" + datestring,
            cache: false,
            success: function(response){
                window.open('http://www.pmexpert.ru/shop/cart.php', '_self');
            }
        });
    }
    //window.open('http://www.pmexpert.ru/shop/list.php?SECTION_ID=311', '_blank');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter26042061 = new Ya.Metrika({id:26042061,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26042061" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Analtycs -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-1924571-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- /Google Analtycs -->
</body>
</html>
