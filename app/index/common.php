<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-10-9
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------


function _initialize(){
    ////判断是否为移动端访问
    // if(isMobile()){
    //     $this->redirect('mobile/index');
    // }

}

/** 根据随机数生成6位密钥 */
function getRandKey ($num = false)
{
	if ($num) {
		$randStr = str_shuffle('1234567890');
		return substr($randStr, 0, 6);
	} else {
		return substr(md5(mt_rand(0, 32) . '0905' . md5(mt_rand(0, 32)) . '0123'), 10, 6);
	}
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @param boolean $adv 是否进行高级模式获取（有可能被伪装）
 * @return mixed
 */
function get_client_ip ($type = 0, $adv = false)
{
	$type = $type ? 1 : 0;
	static $ip = NULL;
	if ($ip !== NULL) return $ip[$type];
	if ($adv) {
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
			$pos = array_search('unknown', $arr);
			if (false !== $pos) unset($arr[$pos]);
			$ip = trim($arr[0]);
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (isset($_SERVER['REMOTE_ADDR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
	} elseif (isset($_SERVER['REMOTE_ADDR'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	// IP地址合法验证
	$long = sprintf("%u", ip2long($ip));
	$ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
	return $ip[$type];
}
