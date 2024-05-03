<div {{ $attributes->class(['form-group']) }}>
    @if($label)
        <label class="form-label">{!! $label !!}</label>
    @endif

    {{ $slot }}
</div>
