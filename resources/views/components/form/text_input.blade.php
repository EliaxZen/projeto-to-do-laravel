<div class="input_area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>

    <input type="{{ empty($type) ? 'type' : $type }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? '' : 'required' }}
        value="{{ !empty($type) && $type === 'date' && !empty($value) ? \Carbon\Carbon::parse($value)->format('Y-m-d') : $value ?? '' }}" />
</div>
