<div class="input-group flex-nowrap">
    @if(!empty($prepend))
        <span class="input-group-text">{{ $prepend }}</span>
    @endif

    {{ $slot }}

    @if(!empty($append))
        <span class="input-group-text">{{ $append }}</span>
    @endif
</div>

@if(!empty($errors))
        <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
@endif
