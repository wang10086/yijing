<?php
//用于网页授权
class WxPayConf_pub
{		//伏羲太昊
	const APPID = 'wx46580160142505b3';
	const MCHID = '1232522002';
	const KEY = 'beijingfuxitaihaowenhuafazhan201';
	const APPSECRET = '9fc5cd178e79e62e60dac634aa45d6a8'; 
	const JS_API_CALL_URL = 'http://wx.fuxiyi.com/fuwuhao/index.php/Home/Index/pay_for_service?showwxpaytitle=1';
	const SSLCERT_PATH = '/xxx/xxx/xxxx/WxPayPubHelper/cacert/apiclient_cert.pem';
	const SSLKEY_PATH = '/xxx/xxx/xxxx/WxPayPubHelper/cacert/apiclient_key.pem';
	const NOTIFY_URL = 'http://wx.fuxiyi.com/fuwuhao/index.php/Home/Pay/pay_notify';
	const CURL_TIMEOUT = 30;
}
	
?>