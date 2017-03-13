<?php
include($_SERVER["DOCUMENT_ROOT"]."/helpers/BitrixHelpers.php");

class EventHandlers
{
    public static function OnAfterUserAddHandler(&$arArgs)
    {
        //Trace("After");
        //Trace($arArgs);
    }

    public static function OnBeforeUserAddHandler(&$arArgs)
    {
        return;
        //Trace("OnBeforeUserAddHandler");
//        Trace(self::$userPhone);
        //Trace($arArgs);

        // 'no@mail.net' is default value in 'Магазин - Свойства заказа - Список свойств - Email'
        // nonempty email is required (by Bitrix core) for login autogeneration when non-registered user is making an order
        if ($arArgs["EMAIL"]=="no@mail.net")
            $arArgs["EMAIL"] = "";

        if (!empty(self::$userPhone)) {
            $login = BitrixHelpers::NormalizePhone(self::$userPhone);
            $pass = BitrixHelpers::GeneratePassword($login, self::$userName);

            $login = BitrixHelpers::FindNotUsedLogin($login);
            $arArgs["LOGIN"] = $login;
            $arArgs["NAME"] = self::$userName;

            $arArgs["PASSWORD"] = $pass;
            $arArgs["CONFIRM_PASSWORD"] = $pass;

            $_SESSION["NEW_USER_PASS"] = $pass;
            //Trace("BEFORE");
            //Trace($arArgs);
            //Trace($_SESSION);
        }
    }

    public static function OnSaleCalculateOrderPropsHandler(&$arOrder)
    {
        //Trace($arOrder);
    }

    public static function OnBeforePrologHandler(){
        BitrixHelpers::PreprocessOrder();
    }

    public static function OnSaleComponentOrderOneStepProcessHandler(&$arResult,&$arUserResult,&$arParams)
    {
        //Trace("OnSaleComponentOrderOneStepProcessHandler");
        //Trace($arResult);
        //Trace($arUserResult);
        //Trace($arParams);
        //$phone = $arUserResult['ORDER_PROP'][BitrixHelpers::GetOrderPropId("ORDER_PHONE")];
        //$phone = BitrixHelpers::NormalizePhone($phone);
        //if ($user = CUser::GetByLogin($phone)->Fetch())
        //{
        // user exists
        //Trace($user);
        //$arResult["ERROR"][] = 'Такой пользователь существует';
        //$arResult["USER_NEW_LOGIN"] = BitrixHelpers::FindNotUsedLogin($phone);
        //}
        //Trace($arResult);
        //Trace($arUserResult);
        //Trace($arParams);
        //Trace();
        //$arResult["ERROR"][] = 'Такой пользователь существует';
    }

    public static function OnOrderAddHandler($id, $arFields)
    {
       // Trace("OnOrderAddHandler");
//        Trace($id);
//        Trace($arFields);
    }

    public static function OnBeforeEventAddHandler(&$event, &$lid, &$arFields)
    {
        if ($event == "SALE_NEW_ORDER")
        {
            $orderId = $arFields['ORDER_ID'];
            $arFields["ORDER_DESCRIPTION"] = trim(CSaleOrder::GetByID($orderId)["USER_DESCRIPTION"]);
            //Trace($arFields);
//            $dbOrderProps = CSaleOrderPropsValue::GetList(
//                array("CODE" => "ASC"),
//                array("ORDER_ID" => $orderId, "CODE"=>array("ORDER_PHONE","ORDER_ADDRESS","ORDER_ADDRESS_DETAILS","ORDER_NAME"))
//            );
//
//            while ($arOrderProps = $dbOrderProps->GetNext()) {
//                $arFields[$arOrderProps['CODE']] = $arOrderProps['~VALUE'];
//            }


        }
    }


}