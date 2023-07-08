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
    <label for="">User ID</label>
    <input type="text" name="user_id" class="form-control" value="{{ old('user_id', $interest->user_id) }}">
</div>

<div class="form-group">
    <label for="">Interests Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $interest->name) }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
