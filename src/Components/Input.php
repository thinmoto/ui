<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
	public function __construct(
		public $errors = null,
	) {}

	public function render(): View|string
	{
		return view('ui::components.input');
	}
}
