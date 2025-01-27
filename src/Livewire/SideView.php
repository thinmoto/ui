<?php

namespace Thinmoto\Ui\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SideView extends Component
{
    public $viewState = false;

	public $viewStateHook;

	protected array $keepOnClose = [];

    public function render()
    {
        return view('ui::livewire.side-view');
    }

    public function open(): void
    {
        $this->viewState = true;

		$this->dispatch('ui-update-side-view-state');
    }

	public function close(): void
	{
		$this->viewState = false;

		$this->resetExcept(array_merge($this->keepOnClose, [
			'viewState', 'viewStateHook'
		]));
	}

	public function updatedViewState(): void
	{
		if(!$this->viewState)
			$this->close();
	}
}
