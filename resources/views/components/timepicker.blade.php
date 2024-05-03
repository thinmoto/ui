<div x-data="{}" x-init="
    flatpickr($refs.input, {
        dateFormat: '{{ $format }}',
        enableTime: true,
        noCalendar: true,
        time_24hr: true
    });
">
    <input
        x-ref="input"
        {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
    >

    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
</div>
