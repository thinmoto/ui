@props(['modalState', 'modalSize'])

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
            wire:key="modal.{{ $this->getId() }}"
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
                @if(isset($title) && !$title->isEmpty())
                    <div class="modal-header" wire:loading.class="d-none" wire:target="modalStateHook">
                        <h5 class="modal-title mt-0 d-flex align-items-center">
                            <div>
                                {{ $title }}
                            </div>
                        </h5>
                        <button type="button" class="btn-close" x-on:click="hide()" aria-label="Close"></button>
                    </div>
                @endif

                <div class="modal-body" wire:key="modal.body.{{ $this->getId() }}">
                    @if(!$modalState)
                        <div>
                            <x-ui::loader />
                        </div>
                    @endif

                    <div wire:loading.class="d-none" wire:target="modalState" wire:key="modal.content.{{ $this->getId() }}">
                        {{ $content ?? '' }}
                    </div>
                </div>

                @if(isset($footer) && !$footer->isEmpty())
                    <div class="modal-footer">
                        {{ $footer }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <input type="hidden" wire:model.live="modalStateHook">
</div>
