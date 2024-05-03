<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Datepicker extends Component
{
	public function __construct(
		public string $format = 'd.m.Y',
		public string $class = '',
		public $errors = [],
	) {}

	public function render(): View|string
	{
		if(count($this->errors))
			$this->class .= ' is-invalid';

		return view('ui::components.datepicker');
	}
}
