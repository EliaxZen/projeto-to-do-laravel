<div class="input_area">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <input type="{{ empty($type) ? 'text' : $type }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? '' : 'required' }} />
</div>
