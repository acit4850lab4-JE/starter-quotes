<?php

/**
 * Feature 7: Bingo
 * Author: Jimmi Lin
 * Date: Jan 28, 2016
 * -----------------------------------
 */
class Bingo extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// pick the first quote
		$source = $this->quotes->get('5');
                $this->data = array_merge($this->data, $source);
               
		$this->render();
	}
      

}

