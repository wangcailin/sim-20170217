<?php
@header('Content-Type:text/html;charset=utf-8'); 
session_start();
@require_once('config.php');
@require_once('oauth.php');
@require_once('opent.php');
@require_once('api_client.php');


$c = new MBApiClient( MB_AKEY , MB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );
//print_r($_SESSION);
//添加标签
$p = array(
		't' => '内在'
	);
//var_dump($c->addTag($p));

//黑名单
$p = array(
	'num' => 30,
	's' => 0,
	'n' => 'hordeliu'	
);
//var_dump($c->getSpecialList($p));

//特别收听
$p =array(
	'ids' =>'43571038742609,34243234242,64323443234,34342344424334',
	'f' => 2
);
//var_dump($c->getReplayCount($p));

//特别收听
$p =array(
	'f' => 0,
	't' => 0,		
	'n' => 5,
    'ct' => 2,
	'a' => 1	
);
//var_dump($c->getSpecial($p));

//时间线
$p =array(
	'f' => 0,
	't' => 0,		
	'n' => 5 
);
//var_dump($c->getTimeline($p));

//拉取username的信息
$p =array(
	'f' => 0,
	't' => 0,		
	'n' => 5,
   	'name' => 'username'	
);
//var_dump($c->getTimeline($p));

//拉取广播大厅消息
$p =array(
	'p' => 0,
	'n' => 5		
);
//var_dump($c->getPublic($p));

//拉取关于我的消息
$p =array(
	'f' => 0,
	'n' => 5,		
	't' => 0,
	'l' => '',
	'type' => 1
);
//var_dump($c->getMyTweet($p));
//
//单条消息
$p =array(
	'id' => 26016073563599 
);
//var_dump($c->getOne($p));
//
//发消息
//	*@content: 微博内容
$p =array(
	'c' => '火车侠',
	'ip' => $_SERVER['REMOTE_ADDR'], 
	'j' => '',
	'w' => ''
);
//var_dump($c->postOne($p));
//
//	*@content: 微博内容
$p =array(
	'id' => 14511064212422
);
//var_dump($c->delOne($p));
$p =array(
	'c' => '转播火车侠',
	'ip' => $_SERVER['REMOTE_ADDR'], 
	'j' => '',
	'w' => '',
	'type' => 1,
	'r' => 10511064707448 
);
//var_dump($c->postOne($p));

$p =array(
	'c' => '转播火车侠',
	'ip' => $_SERVER['REMOTE_ADDR'], 
	'j' => '',
	'w' => '',
	'type' => 2,
	'r' => 10511064707448 
);
//var_dump($c->postOne($p));


$p =array(
	'n' => 20, 
	'f' => 0,
	'reid' => 11016107749292 
);
//print_r($c->getReplay($p));
//print_r($c->getUserInfo());
$p =array(
	'n' => 'username', 
);
//print_r($c->getUserInfo($p));

//
$p =array(
	'n' => 'username',
    'type' => 2	
);
//print_r($c->setMyidol($p));

$p =array(
	'f' => 0,
	'n' => 5,		
	't' => 0,
	'type' => 0
);
//print_r($c->getMailBox($p));
//
$p =array(
	'k' => 'test',
	'n' => 10,		
	'p' => 0,
	'type' => 3
);
//print_r($c->getSearch($p));
//
////
$p =array(
	'type' => 3,		
	'n' => 5,
	'pos' => 0
);
//print_r($c->getHotTopic($p));

$p =array(
	'op' => 0		
);
//print_r($c->getUpdate($p));
//31016124947861
$p =array(
	'id' => 31016124947861,
	'type' => 0	
);
//print_r($c->postFavMsg($p));

$p =array(
	'id' => 10109507010925991304,
	'type' => 0	
);
//print_r($c->postFavTopic($p));
//
$p =array(
	'f' => 2,
	'n' => 10,
	't' => 'IBM',
	'lid' => 0,
	'type' => 1
);
//print_r($c->getFav($p));
$list = $c->getTopic($p);
print_r($list);
if(is_array($list['data']['info']))
{
	mysql_connect('219.232.244.132','harrytest','harrytest@_1234');
	mysql_select_db('lenovo_vote');
	mysql_query('set names utf8');
	foreach($list['data']['info'] as $key=>$value)
	{
		$blogID = $value['id'];
		$authorID = '';
		$userName = $value['name'];
		//$userInfo = $c->getUserInfo(array('n'=>$username));
		//print_r($userInfo);
		$content = $value['text'];
		$portrait = $userInfo['data']['head'];
		$addTime = $value['timestamp'];
		$sql = "insert into VBlog(BlogID,BlogType,AuthorID,AuthorName,AuthorPortrait,Content,AddTime) values('{$blogID}',1,'{$userID}','{$userName}','{$portrait}','{$content}','{$addTime}')";
		echo $sql;
		//exit;
		mysql_query($sql);
	}
}

$p =array(
	'list' => 'qq'
);
//print_r($c->getTopicId($p));
//
$p =array(
	'list' => '10109507010925991304,14318500857773196362'
);
//print_r($c->getTopicList($p));

//
$p = array(
		't' => 'test',
		'num' => 20,
		'p' => 0,
	);
//print_r($c->htHot($p));

$p = array(
		'num' => 20,
		'p' => 0,
	);
//print_r($c->rHot($p));
//print_r($c->kownPerson());
?>
