<div x-data="{
    image:'{{ $image }}',
    editing: '{{ $image }}' ? false : true,
    remove: @entangle($attributes->whereStartsWith('remove:model')->first()),
}" {{ $attributes->merge(['class' => 'form-control '.$class])->except('errors') }}>
    <div class="d-flex flex-column align-items-center">
        <img :src="image" x-show="image" class="img-thumbnail mb-2" style="max-height: 150px">

        <div x-show="!editing">
            <button class="btn btn-primary btn-sm me-2" x-on:click="editing = true">
                <i class="fas fa-edit"></i> Change
            </button>
            <button class="btn btn-danger btn-sm" x-on:click="image = null; editing = true; remove = true;">
                <i class="fas fa-trash"></i> Delete
            </button>
        </div>
    </div>

    <div x-show="editing">
        <div class="d-flex flex-column align-items-center gap-2">
            <input type="file" class="form-control me-2" id="fileInput" {{ $attributes->whereStartsWith('wire:model') }}>

            <button class="btn btn-secondary btn-sm" x-on:click="editing = false" x-show="image">
                <i class="fas fa-times"></i> Cancel
            </button>
        </div>
    </div>
</div>
