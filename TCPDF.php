<?php

/**
 * @copyright Copyright &copy;2014 Giandomenico Olini
 * @company Gogodigital - Wide ICT Solutions 
 * @website http://www.gogodigital.it
 * @package yii2-tcpdf
 * @github https://github.com/cinghie/yii2-tcpdf
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @tcpdf library 6.0.075
 * @tcpdf documentation http://www.tcpdf.org/docs.php
 * @tcpdf examples http://www.tcpdf.org/examples.php
 */
 
namespace cinghie\tcpdf;

use Yii;
use yii\base\Component;

/*                                     *
 *  Component to load TCPDF Libraries  *
 *                                     */
 
class TCPDF extends Component 
{

	public function __construct()
	{
		// Include the main TCPDF library
		require_once(dirname(__FILE__).'/tcpdf/tcpdf.php');
	}

}