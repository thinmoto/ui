<?php

namespace Thinmoto\Ui\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public $modalState = false;
	public $modalSize = 'lg';

	public $modalStateHook;

	protected array $keepOnClose = [];

    public function render()
    {
        return view('ui::livewire.modal');
    }

    public function open(): void
    {
        $this->modalState = true;

		$this->dispatch('ui-update-modal-state');
    }

	public function close(): void
	{
		$this->modalState = false;

		$this->resetExcept(array_merge($this->keepOnClose, [
			'modalState', 'modalSize', 'modalStateHook'
		]));
	}

	public function updatedModalState(): void
	{
		if(!$this->modalState)
			$this->close();
	}
}
