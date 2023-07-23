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
    <label for="">Question</label>
    <input type="text" name="question" class="form-control" value="{{ old('question', $faq->question) }}">
</div>
<div class="form-group">
    <label for="">Answer</label>
    <input type="text" name="answer" class="form-control" value="{{ old('answer', $faq->answer) }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
