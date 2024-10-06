<select
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

@if($errors && count($errors))
    <div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
@endif
