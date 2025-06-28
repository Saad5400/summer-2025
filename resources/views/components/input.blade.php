@props([
    'icon' => '',
    'type' => 'text',
    'placeholder' => '',
    'id' => Str::uuid(),
    'label',
])

<div class="input">
    <span class="{{ "$icon text-base-content/80 my-auto size-5 shrink-0" }}"></span>
    <div class="input-floating grow">
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" class="ps-3" id="{{ $id }}" />
        <label class="input-floating-label" for="{{ $id }}">{{ $label }}</label>
    </div>
</div>
