@props([
	'type' => 'text'
])

<input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control'.(!empty($errors) ? ' is-invalid' : '')])->except('errors') }}>

@if(!empty($errors))
    <div class="invalid-feedback">
        {!! implode('<br>', $errors) !!}
    </div>
@endif