<?php

class HomeController extends BaseController {

	function getIndex(){
		$this->data['page'] = 0;
		$this->data['offset'] = 0;
		$this->data['thumbs'] = $this->paginateThumbs($this->data['offset']);
		
		return View::make('index', $this->data);
	}

	function getPage(){
		$this->data['page'] = \Input::has('page') ? \Input::get('page') : 1;
		$this->data['offset'] = $this->data['page'] * \Config::get('config.per_page');
		$this->data['thumbs'] = $this->paginateThumbs($this->data['offset']);

		return View::make('page', $this->data);
	}

	function getArt($id){
		$this->data['thumb'] = $this->getThumb($id);
		
		return View::make('art', $this->data);
	}
}
