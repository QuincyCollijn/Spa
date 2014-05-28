<?php namespace Azion\Spa\ViewModels;

use Azion\ViewModel\ViewModel;

class SectionView extends ViewModel {

	/**
	 * The name of the view used to render the model.
	 *
	 * @var string
	 */
	protected $view = 'spa::section';

	public function __construct($attributes)
	{
		$this->view = array_get($attributes, 0);
		$this->attributes = array_get($attributes, 1);
	}

	/**
	 * This runs before the rendered view gets returned.
	 *
	 * @return \Illuminate\View\View
	 */
	protected function setup($view)
	{
		$view->with('section', $this->attributes);
		
		return $view;
	}

}
