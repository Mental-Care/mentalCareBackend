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
    <input type="text" name="name" placeholder="enter name" class="form-control"
        value="{{ old('name', $therapist->user->name) }}">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" placeholder="enter email" class="form-control"
        value="{{ old('email', $therapist->user->email) }}">
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" placeholder="enter password" class="form-control"
        value="{{ old('password', $therapist->user->password) }}">
</div>
<div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" placeholder="enter address" class="form-control"
        value="{{ old('address', $therapist->user->address) }}">
</div>
<div class="form-group">
    <label for="">Gender</label>
    <input type="text" name="gender" placeholder="enter gender" class="form-control"
        value="{{ old('gender', $therapist->user->gender) }}">
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="text" name="date" placeholder="enter date" class="form-control"
        value="{{ old('date', $therapist->user->date) }}">
</div>
<div class="form-group">
    <label for="">Number</label>
    <input type="number" name="number" placeholder="enter number" class="form-control"
        value="{{ old('number', $therapist->user->number) }}">
</div>
<div class="form-group">
    <label for="">Image</label>
    <input type="text" name="image" placeholder="enter image" class="form-control"
        value="{{ old('image', $therapist->user->image) }}">
</div>
<div class="form-group">
    <label for="">Role</label>
    <input type="text" name="role" placeholder="enter role" class="form-control"
        value="{{ old('role', $therapist->user->role) }}">
</div>

<div class="form-group">
    <label for="">Specialty</label>
    <select name="specialty_id"class="form-control form-select">
        @foreach ($specialties as $specialty)
            <option value="{{ $specialty->id }}" @selected($specialty->id == $therapist->specialty_id)>{{ $specialty->name }}</option>
        @endforeach
    </select>
</div>
{{-- it need js to appear just related --}}
<div class="form-group">
    <label for="">Sub Specialty</label>
    <select name="subSpecialty_id"class="form-control form-select">
        @foreach ($subSpecialties as $subSpecialty)
            <option value="{{ $subSpecialty->id }}" @selected($subSpecialty->id == $therapist->subSpecialty_id)>{{ $subSpecialty->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Interests</label>
    <select name="interests_id"class="form-control form-select">
        @foreach ($interests as $interest)
            <option value="{{ $interest->id }}" @selected($interest->id == $therapist->interests_id)>{{ $interest->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Language</label>
    <select name="language"class="form-control form-select">
        <option value="ar" @selected('ar' == $therapist->language)>Arabic</option>
        <option value="en" @selected('en' == $therapist->language)>English</option>
    </select>
</div>

<div class="form-group">
    <label for="">Country</label>
    <select name="country"class="form-control form-select">
        <option value="pal" @selected('pal' == $therapist->country)>فلسطين</option>
        <option value="pal" @selected('pal' == $therapist->country)>فلسطين</option>
        <option value="eg" @selected('eg' == $therapist->country)>مصر</option>
        <option value="eg" @selected('eg' == $therapist->country)>مصر</option>
    </select>
</div>
<div class="form-group">
    <label for="">Sessions</label>
    <input type="number" name="sessions" placeholder="enter sessions" class="form-control"
        value="{{ old('sessions', $therapist->sessions) }}">
</div>
<div class="form-group">
    <label for="">Rate</label>
    <input type="number" name="rate" placeholder="enter rate" class="form-control"
        value="{{ old('rate', $therapist->rate) }}">
</div>
<div class="form-group">
    <label for="">Review</label>
    <input type="number" name="review" placeholder="enter review" class="form-control"
        value="{{ old('review', $therapist->review) }}">
</div>
<div class="form-group">
    <label for="">Communication Skills</label>
    <input type="number" name="communicationSkills" placeholder="enter communicationSkills" class="form-control"
        value="{{ old('communicationSkills', $therapist->communicationSkills) }}">
</div>
<div class="form-group">
    <label for="">Communication Skills</label>
    <input type="number" name="communicationSkills" placeholder="enter communicationSkills" class="form-control"
        value="{{ old('communicationSkills', $therapist->communicationSkills) }}">
</div>
<div class="form-group">
    <label for="">Effective Solutions</label>
    <input type="number" name="effectiveSolutions" placeholder="enter effectiveSolutions" class="form-control"
        value="{{ old('effectiveSolutions', $therapist->effectiveSolutions) }}">
</div>
<div class="form-group">
    <label for="">Understand Situation</label>
    <input type="number" name="understandSituation" placeholder="enter understandSituation" class="form-control"
        value="{{ old('understandSituation', $therapist->understandSituation) }}">
</div>
<div class="form-group">
    <label for="">Commitment Session Dates</label>
    <input type="number" name="CommitmentSessionDates" placeholder="enter CommitmentSessionDates"
        class="form-control" value="{{ old('CommitmentSessionDates', $therapist->CommitmentSessionDates) }}">
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="date" name="date" placeholder="enter date" class="form-control"
        value="{{ old('date', $therapist->date) }}">
</div>
<div class="form-group">
    <label for="">Time</label>
    <input type="time" name="time" placeholder="enter time" class="form-control"
        value="{{ old('time', $therapist->time) }}">
</div>
<div class="form-group">
    <label for="">Price (60 min)</label>
    <input type="number" name="price_60" placeholder="enter price_60" class="form-control"
        value="{{ old('price_60', $therapist->price_60) }}">
</div>
<div class="form-group">
    <label for="">Price (30 min)</label>
    <input type="number" name="price_30" placeholder="enter price_30" class="form-control"
        value="{{ old('price_30', $therapist->price_30) }}">
</div>
<div class="form-group">
    <label for="">Is Psychotherapy</label>
    <select name="isPsychotherapy"class="form-control form-select">
        <option value="1" @selected('1' == $therapist->isPsychotherapy)>Yes</option>
        <option value="0" @selected('0' == $therapist->isPsychotherapy)>No</option>
    </select>
</div>
<div class="form-group">
    <label for="">Connected</label>
    <select name="Connected"class="form-control form-select">
        <option value="1" @selected('1' == $therapist->Connected)>Yes</option>
        <option value="0" @selected('0' == $therapist->Connected)>No</option>
    </select>
</div>
<div class="form-group">
    <label for="">Is BestTherapist</label>
    <select name="isBestTherapist"class="form-control form-select">
        <option value="1" @selected('1' == $therapist->isBestTherapist)>Yes</option>
        <option value="0" @selected('0' == $therapist->isBestTherapist)>No</option>
    </select>
</div>
<div class="form-group">
    <label for="">Image</label>
    <input type="file" name="image" placeholder="enter image" class="form-control"
        value="{{ $therapist->image }}">
</div>


{{-- <div class="form-group">
    <label for="">Specialty ID</label>
    <select name="specialty_id" class="form-control form-select">
        <option value="">Primary Specialties</option>
        @foreach ($parents as $parent)
            <option value="{{ $parent->id }}" @selected($specialty->parent_id == $parent->id)>{{ $parent->name }}</option>
        @endforeach
    </select>
</div> --}}

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $button_label ?? 'Save' }}</button>
</div>
