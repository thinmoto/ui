<div class="form-radio {{ !$slot ? 'p-0' : '' }}">
    <input {{ $attributes->merge(['class' => 'form-radio-input '.$class])->except('errors') }} type="radio" value="{{ $value }}" id="{{ $id }}">
    <label class="form-radio-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
