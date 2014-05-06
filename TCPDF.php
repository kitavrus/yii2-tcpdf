<?php

/**
 * @copyright Copyright &copy; Giandomenico Olin, gogodigital.it, 2014
 * @package yii2-tcpdf
 * @version 1.0.0
 * @tcpdf library 6.0.075
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