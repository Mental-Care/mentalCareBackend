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
    <input type="number" name="user_id" class="form-control" value="{{ old('user_id', $blog->user_id) }}">
</div>
<div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
</div>
<div class="form-group">
    <label for="">CategoryBlogs_id</label>
    <input type="number" name="categoryBlogs_id" class="form-control"
        value="{{ old('categoryBlogs_id', $blog->categoryBlogs_id) }}">
</div>
<div class="form-group">
    <label for="">SubCategoryBlogs_id</label>
    <input type="number" name="subCategoryBlogs_id" class="form-control"
        value="{{ old('subCategoryBlogs_id', $blog->subCategoryBlogs_id) }}">
</div>
<div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" class="form-control" value="{{ old('description', $blog->description) }}">
</div>
<div class="form-group">
    <label for="">Cover</label>
    <input type="file" name="cover" class="form-control" value="{{ old('cover', $blog->cover) }}">
</div>



<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
