<?php

namespace Thinmoto\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ImageUpload extends Component
{
	public function __construct(
		public ?string $image = null,
		public string $class = '',
	) {}

	public function render(): View|string
	{
		if(!empty($this->errors))
			if(count($this->errors))
				$this->class .= ' is-invalid';

		return view('ui::components.image-upload');
	}
}
