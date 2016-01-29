<?php

/**
 * Feature 1: first page
 * author: Jimmi Lin
 * Sate: Jan 28, 2016
 * ------------------------------------------------------------------------
 * Feature 3: sleep
 * Author: Jimmi Lin
 * Date: Jan 28, 2016
 * -----------------------------------
 * Feature 3: sleep
 * Author: Jimmi Lin
 * Date: Jan 28, 2016
 * -----------------------------------
 * Feature 5: show
 * Author: Jimmi Lin
 * Date: Jan 28, 2016
 * -----------------------------------
 */
class First extends Application {

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
		$source = $this->quotes->first();
                $this->data = array_merge($this->data, $source);
               
		$this->render();
	}
        function zzz()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// pick Bob Monkhouse
		$source = $this->quotes->get('1');
                $this->data = array_merge($this->data, $source);
                
		$this->render();
	}
        function gimme($id)
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// pick specified character
		$source = $this->quotes->get($id);
                $this->data = array_merge($this->data, $source);
                
		$this->render();
	}

}

