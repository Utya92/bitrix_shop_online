<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<div class="header__col header__col_basket"><span class="header__icon icon-bag"></span>
    <div class="header__basket">
        <div class="text">В вашей корзине</div>
        <a href="javascript:void(0);" class="link">Проработать</a>
    </div>
</div>
