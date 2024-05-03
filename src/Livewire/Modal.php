<?php

namespace Thinmoto\Ui\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $modalState = false;
	public $modalSize = 'lg';

	public $modalStateHook;

    public function render()
    {
        return view('ui::livewire.modal');
    }

    public function open(): void
    {
        $this->modalState = true;
        $this->modalStateHook = time();

		$this->dispatch('ui-update-modal-state');
    }

	public function close(): void
	{
		$this->modalState = false;
	}
}
