<?php

namespace cinghie\tcpdf;

use Yii;
use yii\base\Component;

class TCPDF extends Component 
{

	public function __construct()
	{
		// Include the main TCPDF library
		require_once(dirname(__FILE__).'/tcpdf/tcpdf.php');
	}

}