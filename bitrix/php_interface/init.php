<?
define("LOG_FILENAME",
    $_SERVER["DOCUMENT_ROOT"]."/log/log_".date("Ymd").".log");

function test_dump($v) {
    global $USER;
    if ($USER -> isAdmin()) {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }
}

function Trace($object)
{
    if ($fp = @fopen(LOG_FILENAME, "ab+"))
    {
        if (flock($fp, LOCK_EX))
        {
            @fwrite($fp,print_r($object,true));
            @fwrite($fp, "\r\n----------\r\n");
            @fflush($fp);
            @flock($fp, LOCK_UN);
            @fclose($fp);
        }
    }
}

AddEventHandler("main", 
    "OnBeforeEventAdd", 
    array("EventHandlers", "OnBeforeEventAddHandler"),
    100,
    $_SERVER["DOCUMENT_ROOT"]."/helpers/eventhandlers.php");

/////////////////////////
// Письмо пользователю при оформлении нового заказа
AddEventHandler("sale", "OnSaleComponentOrderOneStepComplete", Array("mail_new", "OnOrderAdd_mail"));

class mail_new
{

    function OnOrderAdd_mail($ID, $val)
    {
        Trace("ONONON");
        $arFields = array(
            "ORDER_ID" => "123",
            "ORDER_DATE" => "2",
            "ORDER_USER" => "3",
            "PRICE" => "4",
            "BCC" => "5",
            "EMAIL" => "prodmarket05@mail.ru",
            "ORDER_LIST" => "",
            "SALE_EMAIL" => "prodmarket05@mail.ru",
            "DELIVERY_PRICE" => "100",
        );

        CSaleMobileOrderPush::send("ORDER_CREATED", array("ORDER_ID" => "151"));

        $eventName = "SALE_NEW_ORDER";
        $event = new CEvent;
        $event->Send($eventName, SITE_ID, $arFields, "N");

        return;
        // Получаем имя и мэйл пользователя
        $rsUser = CUser::GetList(($by = "ID"), ($order = "asc"), array("ID" => $val["USER_ID"]), array("NAME", "LAST_NAME", "EMAIL"));
        $arUser = $rsUser->GetNext();
        //$arUser_name = $arUser["LAST_NAME"]." ".$arUser["NAME"];
        $arUser_mail = $arUser["EMAIL"];

        // Получаем Содержимое заказа
        $dbBasketItems = CSaleBasket::GetList(
            array(
                "NAME" => "ASC",
                "ID" => "ASC"
            ),
            array(
                "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                "LID" => SITE_ID,
                "DELAY" => "N",
                "CAN_BUY" => "Y",
                "ORDER_ID" => $ID
            ),
            false,
            false,
            array()
        );

        $zak = "Корзина заказа:<br /><table border='1'>";
        $zak = $zak."<tr><td align='center'>Товар</td><td align='center'>Цена</td><td align='center'>Кол-во</td><td align='center'>Сумма</td></tr>";

        while ($arItem = $dbBasketItems->Fetch())
        {
            $st = (int)$arItem["QUANTITY"]*$arItem["PRICE"];
            $kol_vo = (int)$arItem["QUANTITY"];
            $zak = $zak."<tr><td align='left'>"."<a href='".$arItem["DETAIL_PAGE_URL"]."'>".$arItem["NAME"]."</a></td><td align='left'>".$arItem["PRICE"]."</td><td align='left'>".$kol_vo."</td><td align='left'>".$st."</td></tr>";
        }
        $zak = $zak."</table>";







        CModule::IncludeModule("sale");
        $db_props = CSaleOrderPropsValue::GetList(array("ORDER_ID" => desc), array("ORDER_ID" => $ID));

        while ($arProps = $db_props->Fetch())
        {
            if($arProps["ORDER_PROPS_ID"]==25):
                $arVal = CSaleOrderPropsVariant::GetByValue(25, $arProps["VALUE"]);
                $arProps["VALUE"] = $arVal["NAME"];
            endif;
            $savoi.=$arProps["NAME"].":".$arProps["VALUE"]."<br />";
            if(($arProps["ORDER_PROPS_ID"]==5)||($arProps["ORDER_PROPS_ID"]==6)):
                $arUser_name = $arProps["VALUE"];
            endif;


        }

        $arOrder = CSaleOrder::GetByID($ID);
        if($arOrder["PAY_SYSTEM_ID"])
        {
            if ($arPaySys = CSalePaySystem::GetByID($arOrder["PAY_SYSTEM_ID"], $arOrder["PERSON_TYPE_ID"]))
            {
                $savoi.="Способ оплаты: ".$arPaySys["PSA_NAME"]."<br />";
            }
        }





        $arEventFields = array(
            "ORDER_ID"         => $ID,
            "SOSTAV"              => $zak,
            "ORDER_USER"    => $arUser_name,
            "EMAIL"                 => $arUser_mail,
            "BCC"                     => $arUser_mail,
            "PRICE"                  => (int)$val["PRICE"]." руб",
            "PRICESS"                  => $savoi
        );

        CEvent::SendImmediate("SALEINFOADMIN", s1, $arEventFields, "N", 25);
    }
}