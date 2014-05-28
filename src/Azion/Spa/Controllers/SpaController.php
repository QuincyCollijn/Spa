<?php namespace Azion\Spa\Controllers;

use Azion\Foundation\Controllers\BaseController;
use Azion\Spa\Models\Spa;
use Azion\Spa\ViewModels\SpaView;
use Azion\ViewModel\ViewModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class SpaController extends BaseController {

	public function __construct()
	{

	}

	public function process()
	{
		$sections = Spa::with('content')->get();

		return SpaView::make($sections);
	}
}