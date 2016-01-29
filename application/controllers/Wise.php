<?php

/**
 * Feature 8: Isaac Asimov's quote page - bingo() method
 * Author: Yi(Evelyn) Dai 
 * Date: Jan 28, 2016
 * -----------------------------------
 */
class Wise extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------


        function bingo()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// pick Isaac Asimov's quote
		$source = $this->quotes->get('6');
                
                //Merge the record data into this.data
                $this->data = array_merge($this->data, $source);
               
		$this->render();
	}
      
      

}

/* End of file Wise.php */
/* Location: application/controllers/Wise.php */