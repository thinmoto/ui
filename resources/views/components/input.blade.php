@props([
    'errors' => null,
    'class' => 'form-control',
])

<input
    type="{{ $type }}"
    class="{{ $class }}{{ (!empty($errors) ? ' is-invalid' : '') }}"
    {{ $attributes->except('errors') }}
>

@if(!empty($errors))
    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
@endif
