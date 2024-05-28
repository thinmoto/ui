<input
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
>

@if(!empty($errors))
    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
@endif
