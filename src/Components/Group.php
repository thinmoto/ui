<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Group extends Component
{
	public function __construct(
		public string $class = '',
		public string $label = '',
		public $errors = null,
	) {}

	public function render(): View|string
	{
		return view('ui::components.group');
	}
}
