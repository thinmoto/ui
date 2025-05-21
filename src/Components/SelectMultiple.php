<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SelectMultiple extends Component
{
	public function __construct(
		public array $options,
		public string $class = '',
		public string $empty = '',
		public bool $disabled = false,
		public $errors = [],
		public $disabledOptions = [],
	) {}

	public function render(): View|string
	{
		if(!empty($this->errors))
			if(count($this->errors))
				$this->class .= ' is-invalid';

		return view('ui::components.select-multiple');
	}
}
