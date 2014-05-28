<?php namespace Azion\Spa\ViewModels;

use Azion\ViewModel\ViewModel;

class SpaView extends ViewModel {

	/**
	 * The name of the view used to render the model.
	 *
	 * @var string
	 */
	protected $view = 'spa::spa';

	protected $map = array(
		'Azion\Page\Models\Page' => 'spa::views.page',
		'Azion\Article\Models\Article' => 'spa::views.article'
	);

	/**
	 * This runs before the rendered view gets returned.
	 *
	 * @return \Illuminate\View\View
	 */
	protected function setup($view)
	{
		$sections = array();
		foreach($this->attributes as $section)
		{
			$sections[] = $this->createSectionView($section);
		}

		$view->with('sections', $sections);
		
		return $view;
	}

	protected function createSectionView($section)
	{
		$type = get_class($section->content);
		if($view = $this->getViewForType($type))
		{
			return SectionView::make(array($view, $section));
		}
	}

	protected function getViewForType($type)
	{
		if(isset($this->map[$type]))
		{
			return $this->map[$type];
		}
	}

}
