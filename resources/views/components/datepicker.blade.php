<div x-data="{}" x-init="
    flatpickr($refs.input, {dateFormat: '{{ $format }}'});
">
    <input
        x-ref="input"
        {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
    >

    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
</div>
