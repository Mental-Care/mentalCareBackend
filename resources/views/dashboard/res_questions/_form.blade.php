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
    <label for="">Res_id</label>
    <input type="number" name="res_id" class="form-control" value="{{ old('res_id', $res_question->res_id) }}">
</div>
<div class="form-group">
    <label for="">Question</label>
    <input type="text" name="question" class="form-control" value="{{ old('question', $res_question->question) }}">
</div>
<div class="form-group">
    <label for="">Opt1</label>
    <input type="text" name="opt1" class="form-control" value="{{ old('opt1', $res_question->opt1) }}">
</div>
<div class="form-group">
    <label for="">Opt2</label>
    <input type="text" name="opt2" class="form-control" value="{{ old('opt2', $res_question->opt2) }}">
</div>
<div class="form-group">
    <label for="">Opt3</label>
    <input type="text" name="opt3" class="form-control" value="{{ old('opt3', $res_question->opt3) }}">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
