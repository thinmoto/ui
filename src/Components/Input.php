<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
	public function __construct(
		public string $type = 'text',
		public string $class = '',
		public $errors = [],
	) {}

	public function render(): View|string
	{
		if(count($this->errors))
			$this->class .= ' is-invalid';

		return view('ui::components.input');
	}
}
