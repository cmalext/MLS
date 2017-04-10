<?php

class BaseController extends Controller {

	public function __construct(){
		 $this->data = [];

		 View::share ( 'base_url', Config::get('config.base_url'));
		 View::share ( 'page_title', Config::get('config.page_title'));
		 View::share ('default_bg', Config::get('config.background'));
	}

	public function getThumbs($recache = false){
		if($recache == false && \Cache::has(Config::get('config.cache_key')))
			return \Cache::get(Config::get('config.cache_key'));
		
		$thumbs = DB::table('thumbs')->orderBy('id', 'desc')->get();
		Cache::forever(Config::get('config.cache_key'), $thumbs);
		
		return $thumbs;
	}

	public function paginateThumbs($page){
		$thumbs = $this->getThumbs();
		$thumbs = array_slice($thumbs, $page, \Config::get('config.per_page'));
		
		return $thumbs;
	}

	public function getThumb($id){
		$thumbs = $this->getThumbs();

		foreach($thumbs as $thumb){
			if($thumb->id == $id)
				return $thumb;
		}
	}
}
