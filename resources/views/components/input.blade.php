<input
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
>

<div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
