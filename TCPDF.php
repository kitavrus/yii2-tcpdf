<?php

/**
 * @copyright Copyright &copy; Gogodigital - Wide ICT Solutions, gogodigital.it, 2014
 * @package yii2-tcpdf
 * @version 1.0.0
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