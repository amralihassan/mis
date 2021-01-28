
@if($errors->any())
    @foreach($errors->all() as $error)
        <!-- print all errors -->
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
<div class="col-md-6">
    <div class="form-group row">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Name"
            value="{{ old('name', $user->name) }}" required>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email" id="email"
            value="{{ old('email', $user->email) }}" required>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>


@if ($active)
    <div class="col-md-6">
        <div class="form-group row">
            <label for="role_id">Role</label>
            <select name="role_id[]" class="form-control" required>
                <option value="">Select</option>
                @foreach ($roles as $role)
                    <option {{old('role_id' , in_array($role->id,$user->roles->pluck('id')->toArray())) ? 'selected' :''}} value="{{$role->id}}">{{$role->display_name}}</option>
                @endforeach
            </select>
            @error('role_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    @endif
    <div class="col-md-6">
        <div class="form-group row">
            <label for="validationCustom02">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group row">
            <label for="validationCustom02">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value=""
                required>
            @error('confirm_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

<div class="col-md-3">
    <div class="form-group row">
        <label for="validationCustom02">Imgae Profile</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="image_profile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
</div>
