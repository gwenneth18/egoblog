<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
	protected $helpers = ['url', 'form', 'CIFunctions']; // Changed from 'CIFunction' to 'CIFunctions'

	public function __construct()
	{
		// Load helper explicitly to ensure it's available
		helper('CIFunctions');
	}

	public function index()
	{
		$data = [
			'pageTitle' => get_settings()->blog_title
		];
	
		return view('frontend/example', $data);
	}
    
    public function about()
    {
        $data = [
            'pageTitle' => 'About Me - ' . get_settings()->blog_title
        ];

        return view('frontend/about', $data);
    }
}