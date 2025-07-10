<div x-data="StyleSelect($refs.input, @entangle($attributes->wire('model')))" x-init="" class="{{ (!empty($errors) ? ' with-errors' : '') }}">
    <div wire:ignore>
        <select
                x-ref="input"
                {{ $attributes->merge(['class' => 'form-select '.$class])->whereDoesntStartWith('wire:model')->except(['errors']) }}
                @disabled($disabled)
                onchange="this.dispatchEvent(new InputEvent('input'))"
        >
            @if($empty != '')
                <option value="">{{ $empty }}</option>
            @endif

            @foreach($options as $k => $v)
                <option value="{{ $k }}" @disabled(in_array($k, $disabledOptions))>
                    {{ $v }}
                </option>
            @endforeach
        </select>
    </div>

    @if(!empty($errors))
        <div class="invalid-feedback">
            {!! implode('<br>', $errors) !!}
        </div>
    @endif
</div>
