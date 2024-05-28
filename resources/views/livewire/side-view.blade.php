<div
        x-data="SideView($refs.element, @entangle('viewState').live, @entangle('viewStateHook').live)"
        x-init="$watch('myState', value => updateState())"
        x-on:keydown.escape.window="hide()"
        x-ref="element"
>
    <div
            class="offcanvas offcanvas-end"
            :class="{ 'show': myState }"
    >
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">
                @if(!$viewState)
                    <div>
                        {{ __('ui::loading') }}
                    </div>
                @endif

                <div wire:loading.remove wire:target="viewState">
                    @yield('title')
                </div>

                @yield('head')
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" x-on:click="toggle()"></button>
        </div>
        <div class="offcanvas-body">
            @if(!$viewState)
                <div>
                    <x-ui::loader />
                </div>
            @endif

            <div wire:loading.remove wire:target="viewState">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="offcanvas-backdrop fade" :class="{ 'show': myState }" x-on:click="hide()"></div>
</div>
