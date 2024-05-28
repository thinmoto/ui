<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class InputGroup extends Component
{
	public function __construct(
		public ?array $errors = null,
	) {}

	public function render(): View|string
	{
		return view('ui::components.input-group');
	}
}
