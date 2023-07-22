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
    <label for="">Quizze_id</label>
    <input type="number" name="quizze_id" class="form-control"
        value="{{ old('quizze_id', $quizzes_question->quizze_id) }}">
</div>
<div class="form-group">
    <label for="">Opt1</label>
    <input type="text" name="opt1" class="form-control" value="{{ old('opt1', $quizzes_question->opt1) }}">
</div>
<div class="form-group">
    <label for="">Opt2</label>
    <input type="text" name="opt2" class="form-control" value="{{ old('opt2', $quizzes_question->opt2) }}">
</div>
<div class="form-group">
    <label for="">Opt3</label>
    <input type="text" name="opt3" class="form-control" value="{{ old('opt3', $quizzes_question->opt3) }}">
</div>
<div class="form-group">
    <label for="">Opt4</label>
    <input type="text" name="opt4" class="form-control" value="{{ old('opt4', $quizzes_question->opt4) }}">
</div>
<div class="form-group">
    <label for="">Ans</label>
    <input type="text" name="ans" class="form-control" value="{{ old('ans', $quizzes_question->ans) }}">
</div>



<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
