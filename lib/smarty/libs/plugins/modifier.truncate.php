<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */
 
/**
 * Smarty truncate modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *               optionally splitting in the middle of a word, and
 *               appending the $etc string or inserting $etc into the middle.
 * 
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php truncate (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com> 
 * @param string $string input string
 * @param integer $length lenght of truncated text
 * @param string $etc end string
 * @param boolean $break_words truncate at word boundary
 * @param boolean $middle truncate in the middle of text
 * @return string truncated string
 */
function smarty_modifier_truncate($string, $length = 80, $etc = '...',
    $break_words = false, $middle = false)
{
    if ($length == 0)
        return '';
	
	$i = 0;
	$n = 0;
	$strLength = strlen($string);
	while ($n<$length && $i<$strLength)
	{
		$tempStr = substr($string,$i,1);
		$ascNum = ord($tempStr);
		if ($ascNum>=224)
		{
			$returnStr=$returnStr.substr($string,$i,3); //����UTF-8����淶����3���������ַ���Ϊ�����ַ�
			$i = $i+3; //ʵ��Byte��Ϊ3
			$n++; //�ִ����ȼ�1
		}elseif ($ascNum>=192) //���ASCIIλ����192��
		{
			$returnStr = $returnStr.substr($string,$i,2); //����UTF-8����淶����2���������ַ���Ϊ�����ַ�
			$i = $i+2; //ʵ��Byte��Ϊ2
			$n++; //�ִ����ȼ�1
		}elseif ($ascNum>=65 && $ascNum<=90) //����Ǵ�д��ĸ��
		{
			$returnStr=$returnStr.substr($string,$i,1);
			$i = $i+1; //ʵ�ʵ�Byte���Լ�1��
			$n++; //�������������ۣ���д��ĸ�Ƴ�һ����λ�ַ�
		}else //��������£�����Сд��ĸ�Ͱ�Ǳ����ţ�
		{
			$returnStr=$returnStr.substr($string,$i,1);
			$i = $i+1; //ʵ�ʵ�Byte����1��
			//$n = $n+0.5; //Сд��ĸ�Ͱ�Ǳ���������λ�ַ���...
			$n++;
		}
	}
	if($strLength>$i && $etc)
	{
		$returnStr = $returnStr . $etc;//��������ʱ��β������ʡ�Ժ�
	}
	return $returnStr;
} 

?>