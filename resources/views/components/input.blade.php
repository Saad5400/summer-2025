@props([
    'icon' => '',
    'type' => 'text',
    'placeholder' => '',
    'id',
    'label',
])

<div class="input">
    <span class="{{ "$icon text-base-content/80 my-auto size-5 shrink-0" }}"></span>
    <div class="input-floating grow">
        <input
            required
            type="{{ $type }}"
            placeholder="{{ $placeholder }}"
            class="ps-3"
            id="{{ $id }}"
            name="{{ $id }}"
            maxLength="255"
            {{ $attributes }}
        />
        <label class="input-floating-label" for="{{ $id }}">{{ $label }}</label>
    </div>
</div>
