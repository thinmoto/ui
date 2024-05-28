<div {{ $attributes->merge(['class' => 'form-group '.$class]) }}>
    @if($label)
        <label class="form-label">{!! $label !!}</label>
    @endif

    {{ $slot }}
</div>
