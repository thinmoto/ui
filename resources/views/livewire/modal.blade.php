<div x-data="Modal($refs.modal, @entangle('modalState').live, @entangle('modalStateHook').live)" x-init="$watch('myState', value => updateState())">
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
        <div
                class="transform transition-all modal-dialog modal-{{ $modalSize }}"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
            <div class="modal-content">
                <div class="modal-header" wire:loading.class="d-none" wire:target="modalStateHook">
                    <h5 class="modal-title mt-0 d-flex align-items-center">
                        <div>
                            @yield('modal-title')
                        </div>
                    </h5>
                    <button type="button" class="btn-close" x-on:click="hide()" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if(!$modalState)
                        <div>
                            <x-ui::loader />
                        </div>
                    @endif

                    <div wire:loading.class="d-none" wire:target="modalState" wire:key="ui-modal-content">
                        @yield('modal-content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" wire:model.live="modalStateHook">
</div>
