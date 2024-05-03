<div x-data="Modal($refs.modal, @entangle('modalState'), @entangle('modalStateHook'))" x-init="$watch('myState', value => updateState())">
    <div
            x-ref="modal"
            @class(['modal fade', 'show' => $modalState])
            tabindex="-1"
            role="dialog"
            aria-hidden="{{ $modalState == true ? 'false' : 'true' }}"
            style="{{ $modalState == true ? 'display:block' : '' }}"
            wire:ignore.self
            x-on:keydown.escape.window="hide()"
    >
        <div class="modal-dialog modal-{{ $modalSize }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0 d-flex align-items-center">
                        <div wire:loading.block wire:target="modalStateHook">
                            {{ __('ui::loading') }}
                        </div>
                        <div wire:loading.remove wire:target="modalStateHook">
                            @yield('title')
                        </div>
                    </h5>
                    <button type="button" class="btn-close" x-on:click="hide()" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div wire:loading.block wire:target="modalState">
                        <x-base::ui.loader />
                    </div>
                    <div wire:loading.remove wire:target="modalState">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" wire:model.live="modalStateHook">
</div>
