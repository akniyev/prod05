<?
class BitrixHelpers
{
    public static function GetOrderPropId($code)
    {
        $id = 0;
        if (CModule::IncludeModule('sale'))
        {

            $db_props = CSaleOrderProps::GetList(
                array("SORT" => "ASC"),
                array(
                    "CODE" => $code
                ),
                false,
                false,
                array("ID")
            );

            if ($props = $db_props->Fetch())
            {
                $id = $props["ID"];
            }

        }
        else
        {
            Trace("Error: can't include module sale");
        }

        return $id;
    }

    /**
     * Brings phone into a form with 8. Removes all spaces and parentheses
     * @param string $phoneNum
     * @return string
     */
    public static function NormalizePhone($phoneNum)
    {
        $phoneNum = trim($phoneNum);
        $phoneNum = str_replace([" ","(",")"],"",$phoneNum);

        if (strpos($phoneNum, "+7")===0)
        {
            $phoneNum = "8".substr($phoneNum,2);
        }

        return $phoneNum;
    }

    /**
     * Finds first free login adding "-1", "-2" etc. to $login
     * @param string $login
     * @return string
     */
    public static function FindNotUsedLogin($login)
    {
        $i=0;
        do
        {
            ++$i;
            $newlogin = $login."-$i";
        } while (CUser::GetByLogin($newlogin)->SelectedRowsCount() > 0) ;

        return $newlogin;
    }

    public static function GeneratePassword($login, $name)
    {
        $name = strtolower(trim($name));
        $arParams = array("replace_space"=>"-","replace_other"=>"-");
        $name = Cutil::translit($name,"ru",$arParams);
        $pass = substr($name, 0, 3).substr($login, -3);
        $pass = str_pad($pass, 6, "0");
        return $pass;
    }
}
?>