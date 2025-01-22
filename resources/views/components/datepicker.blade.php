<div x-data="Datepicker($refs.input, {{ json_encode($options) }}, $wire.entangle('{{ $attributes->whereStartsWith('wire:model')->first() }}'))">
    <div class="input-group" wire:ignore>
        <input
            x-ref="input"
            {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
            data-input
        >

        <span class="input-group-text" x-on:click="$refs.input.focus()">
            <i class="fa fa-calendar"></i>
        </span>
    </div>

    @if(!empty($errors))
        <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
    @endif
</div>
