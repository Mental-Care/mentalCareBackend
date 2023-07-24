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
    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
</div>
@if ($button_label == 'Create')
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" value="{{ old('password', $user->password) }}">
    </div>
@endif
<div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
</div>
<div class="form-group">
    <label for="">Role</label>
    <select name="role"class="form-control form-select">
        <option value="user" @selected('user' == $user->role)>user</option>
        <option value="therapist" @selected('therapist' == $user->role)>therapist</option>
        <option value="admin" @selected('admin' == $user->role)>admin</option>
    </select>
</div>
<div class="form-group">
    <label for="">Gender</label>
    <input type="text" name="gender" class="form-control" value="{{ old('gender', $user->gender) }}">
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $user->date) }}">
</div>
<div class="form-group">
    <label for="">Image</label>
    <input type="file" name="image" class="form-control" value="{{ old('image', $user->image) }}">
</div>
<div class="form-group">
    <label for="">Number</label>
    <input type="number" name="number" class="form-control" value="{{ old('number', $user->number) }}">
</div>



<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
