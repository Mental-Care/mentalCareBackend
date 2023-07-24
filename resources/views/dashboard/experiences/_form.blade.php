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
    <input type="number" name="user_id" class="form-control" value="{{ old('user_id', $experience->user_id) }}">
</div>
<div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $experience->title) }}">
</div>
<div class="form-group">
    <label for="">Place</label>
    <input type="text" name="place" class="form-control" value="{{ old('place', $experience->place) }}">
</div>
<div class="form-group">
    <label for="">FromDate</label>
    <input type="date" name="fromDate" class="form-control" value="{{ old('fromDate', $experience->fromDate) }}">
</div>
<div class="form-group">
    <label for="">ToDate</label>
    <input type="date" name="toDate" class="form-control" value="{{ old('toDate', $experience->toDate) }}">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
