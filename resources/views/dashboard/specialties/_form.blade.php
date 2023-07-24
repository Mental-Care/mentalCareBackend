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
    <label for="">Specialties Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $specialty->name) }}">
</div>

<div class="form-group">
    <label for="">Specialties Parent</label>
    <select name="parent_id" class="form-control form-select">
        <option value="">Primary Specialties</option>
        @foreach ($parents as $parent)
            <option value="{{ $parent->id }}" @selected($specialty->parent_id == $parent->id)>{{ $parent->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
