@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $quiz->name) }}">
</div>
<div class="form-group">
    <label for="">Duration</label>
    <input type="number" name="duration" class="form-control" value="{{ old('duration', $quiz->duration) }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
