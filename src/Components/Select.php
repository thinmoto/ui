<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Select extends Component
{
	public function __construct(
		public array $options,
		public string $class = '',
		public string $empty = '',
		public $errors = [],
	) {}

	public function render(): View|string
	{
		if(count($this->errors))
			$this->class .= ' is-invalid';

		return view('ui::components.select');
	}
}
