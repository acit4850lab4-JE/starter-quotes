<?php

/**
 * Feature 2: last page
 * Author: Yi(Evelyn) Dai 
 * Date: Jan 28, 2016
 * -----------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// show justone view
		
                
                //get the last quote
                $record = $this->quotes->last();
                
                //Merge the record data into this.data
                $this->data = array_merge($this->data, $record); 
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */