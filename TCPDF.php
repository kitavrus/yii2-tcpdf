<?php

namespace cinghie\tcpdf;

use Yii;

class TCPDF extends Component 
{

	public function init()
	{
		// Include the main TCPDF library (search for installation path).
		require_once(__DIR__.'/tcpdf/tcpdf_include.php');
		
		parent::init();
	}

}