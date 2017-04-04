<?php

class HomeController extends BaseController {

	function getIndex(){

		$this->getSettings();
		$this->data['thumbs'] = $this->getThumbs();

		return View::make('index', $this->data);
	
	}
}
