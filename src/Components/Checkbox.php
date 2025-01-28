<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Checkbox extends Component
{
	public function __construct(
		public ?string $id = null,
		public string $value = 'on',
		public string $class = '',
		public $errors = [],
	) {}

	public function render(): View|string
	{
		if(empty($this->id))
			$this->id = uuid_create();

		if(count($this->errors))
			$this->class .= ' is-invalid';

		return view('ui::components.checkbox');
	}
}
