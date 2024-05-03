<div class="form-check {{ !$slot ? 'p-0' : '' }}">
    <input {{ $attributes->merge(['class' => 'form-check-input '.$class])->except('errors') }} type="checkbox" value="{{ $value }}" id="{{ $id }}">
    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>

<div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
