<div>
    <x-ui::x-modal :modal-state="$modalState" :modal-id="$modalSize" :modal-size="$modalSize">
        <x-slot name="title">
            @yield('modal-title')
        </x-slot>

        <x-slot name="content">
            @yield('modal-content')
        </x-slot>

        <x-slot name="footer">
            @yield('modal-footer')
        </x-slot>
    </x-ui::x-modal>
</div>
