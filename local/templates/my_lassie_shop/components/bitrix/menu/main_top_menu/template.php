<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
//echo "<pre>";
//print_r($arResult);
//echo "<pre>";
//?>

<!--MAIN-->
<ul class="header__menu menu menu_width_full">
    <?php foreach ($arResult as $item): ?>
        <li class="menu__item"><a href="#" class="menu__name"><?= $item["TEXT"] ?> </a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu__content">
                    <div class="dropdown-menu__img">
                        <img src="<? "SITE_TEMPLATE_PATH" ?>/local/templates/my_lassie_shop/assets/images/header-submenu-1.jpg"
                             alt="девочка">
                    </div>
                    <div class="dropdown-menu__menu-col">
                        <ul class="vertical-menu">
                            <li class="vertical-menu__item"><span class="vertical-menu__name">Варежки</span>
                                <ul class="vertical-menu__submenu">
                                    <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                               class="link vertical-menu__submenu-name">Демисезонные</a>
                                    </li>
                                    <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                               class="link vertical-menu__submenu-name">Для
                                            новорождённых</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Горловина
                                    и шарфы</a>
                            </li>
                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                               class="vertical-menu__name">Носки</a>
                            </li>
                            <li class="vertical-menu__item"><span class="vertical-menu__name">Перчатки</span>
                                <ul class="vertical-menu__submenu">
                                    <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                               class="link vertical-menu__submenu-name">Демисезонные</a>
                                    </li>
                                    <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                               class="link vertical-menu__submenu-name">Зимние</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <? if ($item["TEXT"] == "Аксессуары" || $item["TEXT"] == "Для прогулки и спорта"): ?>
                        <div class="dropdown-menu__menu-col">
                            <ul class="vertical-menu">
                                <li class="vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Сумки
                                        и рюкзаки</a>
                                </li>
                                <li class="vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Солнцезащитные
                                        очки</a>
                                </li>
                                <li class="vertical-menu__item"><span class="vertical-menu__name">Головные уборы</span>
                                    <ul class="vertical-menu__submenu">
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Шапка-шлем</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Шапка-бини</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Повязка
                                                на голову</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Вязаные
                                                шапки</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Шапки
                                                с козырьком</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Непромокаемые
                                                шапки</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Шапка
                                                на завязках</a>
                                        </li>
                                        <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                   class="link vertical-menu__submenu-name">Шапка
                                                с помпоном </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <? endif; ?>
                </li>
            </ul>
        </li>
    <? endforeach; ?>
    <li class="header menu__item"><a href="javascript:void(0);" class="header__sale-wrapper menu__name"><span
                    class="header__sale">Распродажа</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown-menu__content">
                <div class="dropdown-menu__img">
                    <img src="<? "SITE_TEMPLATE_PATH" ?>/local/templates/my_lassie_shop/assets/images/header-submenu-1.jpg"
                         alt="девочка">
                </div>
                <div class="dropdown-menu__menu-col">
                    <ul class="vertical-menu">
                        <li class="vertical-menu__item"><span class="vertical-menu__name">Варежки</span>
                            <ul class="vertical-menu__submenu">
                                <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                           class="link vertical-menu__submenu-name">Демисезонные</a>
                                </li>
                                <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                           class="link vertical-menu__submenu-name">Для
                                        новорождённых</a>
                                </li>
                            </ul>
                        </li>
                        <li class="vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Горловина
                                и шарфы</a>
                        </li>
                        <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                           class="vertical-menu__name">Носки</a>
                        </li>
                        <li class="vertical-menu__item"><span class="vertical-menu__name">Перчатки</span>
                            <ul class="vertical-menu__submenu">
                                <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                           class="link vertical-menu__submenu-name">Демисезонные</a>
                                </li>
                                <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                           class="link vertical-menu__submenu-name">Зимние</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>

<button class="burger-btn header__nav-btn js-nav-btn"><span class="burger-btn__switch">Развернуть меню </span>
</button>

<div class="navigation__collapse">
    <ul class="navigation__collapse-menu vertical-menu">
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Распродажа</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Для новорожденных</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Аксессуары</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Обувь</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Летняя одежда</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Для прогулки и
                спорта</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Игра слоями</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Верхняя одежда</a>
        </li>
        <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);"
                                                                     class="vertical-menu__name">Коллекции</a>
        </li>
    </ul>
</div>

