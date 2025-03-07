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

    @if(!empty($errors))
        <div class="invalid-feedback">
            {!! implode('<br>', $errors) !!}
        </div>
    @endif
</div>
