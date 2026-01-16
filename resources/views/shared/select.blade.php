@php
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
@endphp

<div @class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}[]" multiple>
        @foreach($options as $ids => $names)
            <option @selected($value->contains($ids)) value="{{ $ids }}">{{ $names }}</option>
        @endforeach
    </select>
   
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>