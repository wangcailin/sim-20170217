<?php
	/**
	 * ��֤��
	 *
	 * @category Core
	 * @package Core
	 * @author harry
	 * @version v1.0 2011-01-25
	 */
	class Validate
	{
		/**
		 * ���캯��
		 *
		 * @access public
		 */
		public function __construct()
		{
		}
		
		/**
		 * ���캯��
		 *
		 * @access public
		 */
		public function Validate()
		{
		}
		
		/**
		 * ��֤email�Ƿ�Ϸ�
		 *
		 * @access public
		 * @param string $email
		 * @return bool
		 */
		public function email($email)
		{
			if(empty($email) || !ereg("^[-a-zA-Z0-9_.]+@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$email))
			{
				return false;
			}else{
				return true;
			}
		}
	}
?>
