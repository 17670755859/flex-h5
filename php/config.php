<?php

$config		= array(
	##数据库配置
	'dbhost'		=> '120.24.42.67',	//数据库地址
	'dbname'		=> 'zhangyin',		//数据库名
	'dbport'		=> '3306',			//数据库端口
	'dbuser'		=> 'root',			//数据库用户名
	'dbpass'		=> 'Wy!@#xyz414',	//数据库密码
	'isonlyopenid'	=> false,			//是否静默方式只获取用户opendid（true，false；）
	'debug'			=> true,			//是否开启debug模式
	##OSS对象配置
	'OSS_ID'		=> 'dzsyFRgdbW9zwzcp',
	'OSS_SECRET'	=> 'fo8qVUlyDKJ66a3BIl1rfUFzVo6xZt',
	'OSS_POINT'		=> 'oss-cn-shanghai.aliyuncs.com',
	'OSS_BUCKET'	=> 'weixin-game',
);

##根据链接分配公众号授权

	$config['appid']	= "wx3d0ebda9d6d41cd0";
	$config['secret']	= "c106150510cb3ea57dc6e9398cc4087e";


return $config;