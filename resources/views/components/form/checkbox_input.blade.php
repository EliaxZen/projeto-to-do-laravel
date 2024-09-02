<div class="title">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <input class="title_checkbox" type="checkbox" id="{{ $name }}" name="{{ $name }}" {{ empty($required) ? '' : 'required' }}
        value="1"
        {{ $checked ? 'checked' : '' }}   
    />
</div>
