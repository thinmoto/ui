<textarea
    {{ $attributes->merge(['class' => 'form-control '.(!empty($class) ? $class : '')])->except('errors') }}
></textarea>

@if(!empty($errors))
    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
@endif
