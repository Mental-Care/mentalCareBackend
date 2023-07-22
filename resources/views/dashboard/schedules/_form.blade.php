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
    <label for="">User_id</label>
    <input type="number" name="user_id" class="form-control" value="{{ old('user_id', $schedule->user_id) }}">
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $schedule->date) }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
