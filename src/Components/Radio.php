<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Radio extends Component
{
	public function __construct(
		public string $id,
		public string $value = 'on',
		public string $class = '',
		public $errors = [],
	) {}

	public function render(): View|string
	{
		if(count($this->errors))
			$this->class .= ' is-invalid';

		return view('ui::components.radio');
	}
}
