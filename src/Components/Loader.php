<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Loader extends Component
{
	public function __construct()
	{
		//
	}

	public function render(): View|string
	{
		return view('ui::components.loader');
	}
}
