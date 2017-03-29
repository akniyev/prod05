<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var $APPLICATION CMain
 * @var $USER CUser
 * @var $component SaleOrderAjax
 */
//Trace($arResult);
?>

<h4 class="text-left">
    Ваш заказ включает <span class="darkbluetext">&nbsp;&nbsp;
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;<b><?=count($arResult['BASKET_ITEMS'])?></b> </span> товаров. <br>
    Общая сумма заказа:&nbsp;&nbsp;
    <b><span class="darkbluetext"><i class="fa fa-rouble" aria-hidden="true"></i>&nbsp;&nbsp;<?=$arResult['ORDER_PRICE']?></span></b> руб. <br>
    Стоимость доставки:&nbsp;&nbsp;&nbsp;&nbsp;<b><span class="darkbluetext"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp;&nbsp;<?=$arResult['DELIVERY_PRICE']?></span></b> руб.
    <br/>
    <strong>ИТОГО: <?=$arResult['ORDER_TOTAL_PRICE']?> руб.</strong>

</h4>
<br>
<form method="post" id="order_form">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="action" value="saveOrderAjax"/>
    <input type="hidden" name="location_type" value="code"/>
    <input type="hidden" name="BUYER_STORE" value="0"/>
    <input type="hidden" name="PERSON_TYPE" value="1"/>
    <input type="hidden" name="PAY_SYSTEM_ID" value="1"/>
    <input type="hidden" name="DELIVERY_ID" value="16"/>
    <input type="hidden" name="save" value="Y"/>

    <h4 class="text-left darkgreentext">
        Телефон (обязательное поле, нужен для подтверждения заказа):
    </h4>

    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 nopad">
        <a href="#" id="phonenum-button" class="btn btn-block btn-primary btn-success">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
        </a>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 nopad">
        <input id="phonenum-input" type="text" name="ORDER_PROP_3" placeholder="8 999 9999999"
               autocomplete="off" class="form-control padd-5 btn-block"
               data-validation="required custom min_digits "
               data-validation-error-msg-required="Это поле обязательно для заполнения"
               data-validation-regexp="^[\d\s()\-\+]+$"
               data-validation-error-msg-custom="Поле может содержать только цифры, пробелы, скобки, дефисы и знак +"
               data-validation-error-msg-min_digits="Проверьте номер: должно быть не менее 5 цифр">
    </div>
    <div class="clearfix"></div>

    <h4 class="text-left darkgreentext">
        Адрес доставки и комментарии (необязательное поле, Вы можете сообщить подробности по телефону):
    </h4>


    <div class="form-group">
        <textarea class="form-control" rows="5" name="ORDER_DESCRIPTION"></textarea>
    </div>


    <div class="container-fluid text-center">
        <a href="#" class="btn btn-lg btn-success" id="order_submit">
            <span class="glyphicon glyphicon-ok" data-loading-text="<i class='fa fa-spinner fa-spin '></i>"></span>Заказать</a>
    </div>
</form>

<script type="text/javascript">
    $('#order_submit').on('click', function (e) {
        var form = $('#order_form');
        // http://www.formvalidator.net/#configuration
        var conf = {
            borderColorOnError: '',
            errorElementClass: 'error',
            scrollToTopOnError: true
        };

        if (form.isValid({lang:'ru'}, conf)) {
            waitingDialog.show('Обработка заказа...');
            setTimeout(function () {
                waitingDialog.hide();
            }, 15000);
            // send request to create order
            $.post('/personal/order/make/index.php', form.serialize())
                .done(function (data) {
                    console.log(data);
                    var response = jQuery.parseJSON(data);
                    console.log(response);
                    if (response.order.ERROR) {
                        showMakeOrderError(response.order.ERROR);
                    }
                    else {
                        // if ok, redirect to success page
                        window.location.replace(response.order.REDIRECT_URL);
                    }

                })
                .fail(function (data) {
                    showMakeOrderError();
                    console.log('error');
                    console.log(data);
                });
        }
        e.preventDefault();
        return false;
    });

    function showMakeOrderError(){
        waitingDialog.hide();
        console.log("ERROR");
    }

    function disableFormInputs(form) {
        $(form).children(':input').attr("disabled", true);
    }

    $.formUtils.addValidator({
        name : 'min_digits',
        validatorFunction: function(value, $el, config, language, $form) {
            return (value.match(/\d/g) || []).length >= 5;
        },
        errorMessage : 'Проверьте номер: должно быть не менее 5 цифр',
        errorMessageKey: 'badPhone'
    });
</script>

<br>

<h4>
    <i>С Вами свяжутся в течение 15 минут. Пожалуйста ожидайте.</i>
</h4>
<h4>
    <i>При заказе свыше 1500 руб. доставка бесплатна.</i>
</h4>


<!-- BASKET ITEMS -->
<h2 class="darkbluetext text-right">
    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Состав заказа
</h2><br>


<? $items = $arResult['BASKET_ITEMS'];
foreach ($items as $item): ?>

    <div class="container-fluid nopad thumbnail prodtableitem">
    <div class="col-xs-2 nopad text-center">
        <a href="<?=$item['DETAIL_PAGE_URL']?>">
            <img src="<?=$item['PREVIEW_PICTURE_SRC']?>" title="<?=$item['NAME']?>" alt="<?=$item['NAME']?>" class="img-responsive img-rounded img-thumbnail">
        </a>
    </div>
    <div class="col-xs-8">
        <h4>
            <a href="<?=$item['DETAIL_PAGE_URL']?>">
                <span class="darkbluetext"><?=$item['NAME']?></span>
            </a>
            <br>
            <span class="darkgreentext text-bold">
                    Количество: <?=$item['QUANTITY']?> <?=$item['MEASURE_NAME']?>
                </span>
        </h4>
    </div>
    <div class="col-xs-2 nopad text-right">
        <h4 class="text-center darkgreentext text-bold"><?=$item['SUM']?></h4>
    </div>
</div>

<? endforeach; ?>







<br><br><br><br>
