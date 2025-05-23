@props([
    'errors' => null,
    'class' => 'input-group flex-nowrap',
])

<div class="{{ $class }}{{ (!empty($errors) ? ' is-invalid' : '') }}">
    @if(!empty($prepend))
        <span class="input-group-text">{{ $prepend }}</span>
    @endif

    {{ $slot }}

    @if(!empty($append))
        <span class="input-group-text">{{ $append }}</span>
    @endif
</div>

@if(!empty($errors))
    <div class="invalid-feedback">
        {!! implode('<br>', $errors) !!}
    </div>
@endif
