<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
	protected $helpers = ['url', 'form', 'CIMail', 'CIFunction'];

	public function index()
	{
		$data = [
			'pageTitle' => 'EGOBLOG - Love, Travel & Cooking Adventure '

		];
	
		return view ('frontend/example', $data);
	}
}