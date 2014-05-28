<?php namespace Azion\Spa\Models;

use Azion\Foundation\Models\BaseModel;

class Spa extends BaseModel {

	protected $table = "pages_spa";

	/**
	 * The relation with the blocked items.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function content()
	{
		return $this->morphTo();
	}

}