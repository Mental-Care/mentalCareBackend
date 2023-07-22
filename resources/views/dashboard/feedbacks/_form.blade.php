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
    <input type="number" name="user_id" class="form-control" value="{{ old('user_id', $feedback->user_id) }}">
</div>
<div class="form-group">
    <label for="">Therapist_id</label>
    <input type="number" name="therapist_id" class="form-control"
        value="{{ old('therapist_id', $feedback->therapist_id) }}">
</div>
<div class="form-group">
    <label for="">Rate</label>
    <input type="number" name="rate" class="form-control" value="{{ old('rate', $feedback->rate) }}">
</div>
<div class="form-group">
    <label for="">Text</label>
    <input type="text" name="text" class="form-control" value="{{ old('text', $feedback->text) }}">
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $feedback->date) }}">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
