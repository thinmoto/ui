<div class="dropdown" x-on:click.away="open = false" x-data="{
    open: false,
    label: '',
    placeholder: '{{ $empty ?? '' }}',
    options: {{ json_encode($options) }},
    selected: @entangle($attributes->whereStartsWith('wire:model')->first()).live,
    updateLabel(){
        let label = [];

        for(index in this.options)
        {
            let searched = false;

            for(index2 in this.selected)
            {
                if(index == this.selected[index2])
                {
                    searched = true;
                    break;
                }
            }

            if(searched)
                label.push(this.options[index]);
        }

        if(!label.length)
            this.label = this.placeholder ? this.placeholder : 'Empty';
        else
            this.label = label.join(', ');
    },
    toggleCheckbox(event){
        let checkbox = event.target.querySelector('input');

        if(checkbox)
            checkbox.click();

        this.updateLabel();
    } }"
     x-init="updateLabel()"
>

    <div class="form-select" @disabled($disabled) x-on:click="open = !open" x-text="label">

    </div>

    <ul class="dropdown-menu" :class="{ 'show': open }">
        @foreach($options as $k => $v)
            {{--<option value="{{ $k }}" @disabled(in_array($k, $disabledOptions))>{{ $v }}</option>--}}

            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" @disabled(in_array($k, $disabledOptions)) x-on:click="toggleCheckbox($event)">
                    <div class="form-check" style="position: relative; top: 2px;">
                        <input class="form-check-input" type="checkbox" value="{{ $k }}" x-model="selected" @disabled(in_array($k, $disabledOptions)) x-on:change="updateLabel">
                    </div>

                    {{ $v }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

@if(!empty($errors))
    <div class="invalid-feedback">
        {!! implode('<br>', $errors) !!}
    </div>
@endif
