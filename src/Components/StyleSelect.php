<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class StyleSelect extends Component
{
	public function __construct(
		public array $options,
		public string $class = '',
		public string $empty = '',
		public bool $disabled = false,
		public $errors = [],
		public $settings = [],
		public $disabledOptions = [],
	) {
		$this->settings = array_merge($this->settings, [
			'itemSelectText' => '',
			'searchEnabled' => false,
		]);
	}

	public function render(): View|string
	{
		if(!empty($this->errors))
			if(count($this->errors))
				$this->class .= ' is-invalid';

		return view('ui::components.style-select');
	}
}
