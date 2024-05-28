<div {{ $attributes->merge(['class' => 'form-group '.$class]) }}>
    @if($label)
        <label class="form-label">{!! $label !!}</label>
    @endif

    {{ $slot }}

        @if($handleErrors)
            <div class="invalid-feedback d-block">{!! $errors ? implode('<br>', $errors) : '' !!}</div>
        @endif
</div>
