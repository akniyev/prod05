<?
namespace Bitrix\B24Connector;

use Bitrix\Main\Error;
use Bitrix\Main\Loader;
use Bitrix\Main\Result;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
use Bitrix\Socialservices\ApTable;

Loc::loadMessages(__FILE__);

/**
 * Class Connection
 * @package Bitrix\B24Connector
 */
class Connection
{
	/**
	 * @return bool|string
	 * @throws \Bitrix\Main\LoaderException
	 */
	private static function getAppId()
	{
		if(!Loader::includeModule('socialservices'))
			return '';

		if(!self::isLinkedToNet())
			self::linkToNet();

		$interface = new \CBitrix24NetOAuthInterface();
		return $interface->getAppID();
	}

	/**
	 * Link site to Bitrix24.Network
	 * Code borrowed from socialservices/options.php
	 * @throws \Bitrix\Main\ArgumentNullException
	 * @throws \Bitrix\Main\LoaderException
	 *
	 */
	private static function linkToNet()
	{
		if(!Loader::includeModule('socialservices'))
			return false;

		if(self::isLinkedToNet())
			return true;

		$result = false;
		$request = \Bitrix\Main\Context::getCurrent()->getRequest();
		$host = ($request->isHttps() ? 'https://' : 'http://').$request->getHttpHost();
		$registerResult = \CSocServBitrix24Net::registerSite($host);

		if(is_array($registerResult) && isset($registerResult["client_id"]) && isset($registerResult["client_secret"]))
		{
			Option::set('socialservices', 'bitrix24net_domain', $host);
			Option::set('socialservices', 'bitrix24net_id', $registerResult["client_id"]);
			Option::set('socialservices', 'bitrix24net_secret', $registerResult["client_secret"]);
			$result = true;
		}

		return $result;
	}

	/**
	 * @return bool
	 * @throws \Bitrix\Main\ArgumentNullException
	 */
	private static function isLinkedToNet()
	{
		return Option::get('socialservices', 'bitrix24net_id', '') !== '';
	}

	/**
	 * @return Result
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\LoaderException
	 * @throws \Exception
	 */
	public static function delete()
	{
		$result = new Result();

		if(!Loader::includeModule('socialservices'))
		{
			$result->addError(new Error('Module socialservices is not installed'));
			return $result;
		}

		if($connection = self::getFields())
		{
			$res = ApTable::delete($connection['ID']);

			if(!$res->isSuccess())
				$result->addErrors($res->getErrors());

			$dbRes = ButtonTable::getList(array(
				'filter' => array(
					'=APP_ID' => $connection['ID']
				)
			));

			while($but = $dbRes->fetch())
			{
				$res = ButtonTable::delete($but['ID']);

				if(!$res->isSuccess())
					$result->addErrors($res->getErrors());
			}
		}

		return $result;
	}

	/**
	 * @param string $title
	 * @return string Button HTML.
	 * @throws \Bitrix\Main\LoaderException
	 */
	public static function getButtonHtml($title = '')
	{
		global $APPLICATION;
		$onclick = '';
		$class = 'connector-btn-blue';
		$href = 'javascript:void(0)';
		$moduleAccess = $APPLICATION->GetGroupRight('b24connector');

		if(strlen($title) <= 0)
			$title = Loc::getMessage('B24C_CONN_BUTT_CONNECT');

		if(!Loader::includeModule('socialservices') || $moduleAccess <= "R")
		{
			$class .= ' connector-btn-blue-disabled';
		}
		else
		{
			if(!self::isLinkedToNet())
				self::linkToNet();

			$hosts = self::getHostsList();

			if(!empty($hosts))
			{
				$urlTeml = self::getUrl('##HOST##');

				if(!empty($urlTeml))
				{
					$onclick = 'BX.B24Connector.showPortalChoosingDialog(\''.\CUtil::JSEscape($urlTeml).'\', '.\CUtil::PhpToJSObject($hosts).');';
				}
				else
				{
					$onclick = 'alert(\''.Loc::getMessage('B24C_CONN_CONNECT_ERROR').'\');';
				}
			}
			else
			{
				$href = self::getUrlNet();
			}
		}

		$result = '<a href="'.htmlspecialcharsbx($href).'"'.
			(strlen($onclick) > 0 ? ' onclick="'.$onclick.'"' : '').
			' class="'.$class.'" >'.
			$title.'</a>';

		return $result;
	}

	/**
	 * @param $title
	 * @return string HTML for connect button.
	 * @throws \Bitrix\Main\LoaderException
	 */
	public static function getOptionButtonHtml($title)
	{
		$onclick = '';
		$disabled = false;

		if(!\Bitrix\Main\Loader::includeModule('socialservices'))
		{
			$disabled = true;
		}
		else
		{
			if(!self::isLinkedToNet())
				self::linkToNet();

			$hosts = self::getHostsList();

			if(!empty($hosts))
			{
				$urlTeml = self::getUrl('##HOST##');

				if(!empty($urlTeml))
				{
					$onclick = 'BX.B24Connector.showPortalChoosingDialog(\''.\CUtil::JSEscape($urlTeml).'\', '.\CUtil::PhpToJSObject($hosts).');';
				}
				else
				{
					$onclick = 'alert(\''.Loc::getMessage('B24C_CONN_CONNECT_ERROR').'\');';
				}
			}
			else
			{
				$onclick = 'window.location.href="'.\CUtil::JSEscape(self::getUrlNet()).'"';
			}
		}

		return '<input type="button" onclick="'.htmlspecialcharsbx($onclick).'" value="'.$title.'"'.($disabled ? ' disabled' : '').'>';
	}

	/**
	 * @return array Connection fields.
	 * @throws \Bitrix\Main\LoaderException
	 */
	public static function getFields()
	{
		static $result = null;

		if($result === null)
		{
			$result = array();

			if(Loader::includeModule('socialservices'))
				$result = ApTable::getConnection();
		}

		return is_array($result) ? $result : array();
	}

	public static function getDomain()
	{
		$fields = self::getFields();
		return !empty($fields['DOMAIN']) ? $fields['DOMAIN'] : '';
	}

	/**
	 * Check if connection exists.
	 * @return bool
	 */
	public static function isExist()
	{
		$fields = self::getFields();
		return !empty($fields);
	}

	/**
	 * @param $host
	 * @return string
	 * @throws \Bitrix\Main\LoaderException
	 */
	private static function getUrl($host)
	{
		global $APPLICATION;

		if(strlen($host) <= 0)
			return '';

		if(!Loader::includeModule("socialservices"))
			return '';

		$result = '';
		$appId = self::getAppID();

		if(strlen($appId) > 0)
		{
			$result = $host.'apconnect/?client_id='.urlencode($appId).'&state='.urlencode(http_build_query(array(
				'check_key' => \CSocServAuthManager::GetUniqueKey(),
				'admin' => 1,
				'backurl' => $APPLICATION->GetCurPageParam(),
			)));
		}

		return $result;
	}

	/**
	 * @return string
	 * @throws \Bitrix\Main\LoaderException
	 */
	private static function getUrlNet()
	{
		if(!Loader::includeModule("socialservices"))
			return '';

		global $APPLICATION;
		$appId = self::getAppID();
		$result = '';

		if(strlen($appId) > 0)
		{
			$result = \CBitrix24NetOAuthInterface::NET_URL.'/oauth/select/?preset=ap&client_id='.urlencode($appId).'&state='.urlencode(http_build_query(array(
				'check_key' => \CSocServAuthManager::GetUniqueKey(),
				'admin' => 1,
				'backurl' => $APPLICATION->GetCurPageParam('', array('apaction', 'apID')),
			)));
		}

		return $result;
	}

	/**
	 * @return array
	 * @throws \Bitrix\Main\LoaderException
	 */
	private  static function getHostsList()
	{
		if(!Loader::includeModule('socialservices'))
			return array();

		$result = array();
		$query = \CBitrix24NetTransport::init();

		if($query)
			$result = $query->call('admin.profile.list', array());

		return !empty($result['result']) && is_array($result['result']) ? $result['result'] : array();
	}
}