@props([
    'type' => 'text',
    'name',
    'label' => ucfirst($name),
    'value' => '',
    'placeholder' => '',
])

<div class="form-group">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
</div>
