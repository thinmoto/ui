<div x-data="StyleSelect($refs.input, {{ json_encode($options) }})" x-init="">
    <div wire:ignore>
        <select
                x-ref="input"
                {{ $attributes->merge(['class' => 'form-select '.$class])->except(['errors']) }}
                @disabled($disabled)
        >
            @if($empty != '')
                <option value="">{{ $empty }}</option>
            @endif

            @foreach($options as $k => $v)
                <option value="{{ $k }}" @disabled(in_array($k, $disabledOptions))>{{ $v }}</option>
            @endforeach
        </select>
    </div>

    @if(!empty($errors))
        <div class="invalid-feedback">
            {!! implode('<br>', $errors) !!}
        </div>
    @endif
</div>
