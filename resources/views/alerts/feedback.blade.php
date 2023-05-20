@if ($errors->has($field))
    <span class="invalid-feedback" role="alert" style="color:red">{{ $errors->first($field) }}</span>
@endif
