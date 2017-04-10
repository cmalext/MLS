<?php

Class AdminController extends BaseController{

	function getLogin(){
		return View::make('admin.login');
	}

	function postLogin(){
		if(\Config::get('config.password') == Input::get('key')){
			Session::put('user', $_SERVER['REMOTE_ADDR']);
			return \Redirect::to(\Config::get('config.base_url').'/mls');
		}

		return \Redirect::to(\Config::get('config.base_url').'/mls/login');
	}

	function getLogout(){
		Session::forget('user');
		return \Redirect::to(\Config::get('config.base_url').'/mls/login');	
	}

	function getIndex(){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');
		
		$data['thumbs'] = $this->getThumbs();

		return View::make('admin.index',$data);
	}

	function getAdd(){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');

		return View::make('admin.create');
	}

	function postAdd(){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');


		if (Input::hasFile('image')){

			$file = str_replace(' ', '', Input::file('image')->getClientOriginalName());
			Input::file('image')->move(public_path().'/art', $file);
			DB::table('thumbs')->insert(array(
				'image'	=> $file,
				'title'	=> Input::get('title'),
				'description'	=> Input::get('description')
			));
			Cache::forget(Config::get('config.cache_key'));
		}

		return Redirect::to(Config::get('config.base_url').'/mls');
	}

	function getDelete($id){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');

		DB::table('thumbs')->delete($id);
		Cache::forget(Config::get('config.cache_key'));
		
		return Redirect::to(Config::get('config.base_url').'/mls');
	}

	function getEdit($id){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');
		
		$data['thumb'] = $this->getThumb($id);

		return View::make('admin.edit', $data);
	}

	function postEdit($id){
		if(!Session::has('user'))
			return \Redirect::to(Config::get('config.base_url').'/mls/login');


		DB::table('thumbs')->where('id', $id)->update(['title' => Input::get('title'), 'description' => Input::get('description')]);
		Cache::forget(Config::get('config.cache_key'));

		return \Redirect::to(Config::get('config.base_url').'/mls/edit/'.$id);
	}
}