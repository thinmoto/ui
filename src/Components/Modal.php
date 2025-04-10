<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Modal extends Component
{
	public function __construct(
		public $modalState,
		public $modalSize = 'md',
	){ }

	public function render(): View|string
	{
		return view('ui::components.modal');
	}
}
