<?php

class IndexController extends Controller
{
	public function index()
	{
		return new ActionResponse('who', 'World');
	}

	public function json()
	{
		return new JSONResponse(array('msg' => 'Hello, World!'));
	}
}

?>