<?php

class Controller_Book extends Controller_Template
{

	public function action_index()
	{
		$view = View::forge('layout');

		$view->title = 'Book the space';
		$view->content = View::forge('book/index');

		return $view;
	}

	public function action_uses()
	{
		$view = View::forge('layout');

		$view->title = 'Uses';
		$view->content = View::forge('book/uses');

		return $view;
	}


}
