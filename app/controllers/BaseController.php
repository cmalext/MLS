<?php

class BaseController extends Controller {

	public function __construct(){
		 $this->data = [];

		 View::share ( 'base_url', Config::get('config.base_url'));
		 View::share ( 'page_title', Config::get('config.page_title'));
		 View::share ('default_bg', Config::get('config.background'));
	}

	public function getSettings(){

		if(\Cache::has('settings')){

			$this->data[] = \Cache::get('settings');
		
		}else{
			
			$settings = DB::table('settings')->get();
			
			foreach($settings as $setting)
				$this->data[$setting->varname] = $setting->value;
			
			\Cache::forever('settings', $this->data);
		}

	}

	public function getThumbs(){

		$thumbs = DB::table('thumbs')->get();

		return $thumbs;
	}
}
