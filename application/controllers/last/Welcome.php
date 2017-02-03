<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// grab the last author and set it to the view
		$record = $this->quotes->get(6);
                $this->data = array_merge($this->data, $record);
                
		$this->render();
	}

}
