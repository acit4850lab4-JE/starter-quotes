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
		$this->data['pagebody'] = 'homepage';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array();
		foreach ($source as $record)
		{
			$authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */