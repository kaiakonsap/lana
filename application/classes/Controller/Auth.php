<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template
{

	public function action_index()


	{
		$username = $this->request->post("username");
		$password = $this->request->post("password");
		$is_logged_in = Auth::instance()->login($username, $password);
		$is_logged_in = Auth::instance()->force_login("demo");
		if ($is_logged_in)
		{Notify::success("Jah");
		$this->redirect('welcome');

		}
			
		else Notify::error("ei saanud");
	}

} // End Welcome
