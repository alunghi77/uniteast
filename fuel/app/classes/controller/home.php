<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$view = View::forge('layout');

		$view->title = 'Home';
		$view->content = View::forge('home/index');

		return $view;
	}

}
