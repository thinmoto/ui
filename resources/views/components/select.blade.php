<select
    {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}
>
@if($empty != '')
        <option value="">{{ $empty }}</option>
@endif
    @foreach($options as $k => $v)
        <option value="{{ $k }}">{{ $v }}</option>
    @endforeach
</select>

<div class="invalid-feedback">{{ $errors ? implode('<br>', $errors) : '' }}</div>
