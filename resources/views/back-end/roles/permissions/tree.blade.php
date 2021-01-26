<div class="row">
    <div class="col-lg-4  col-md-6">
        <h4><strong>Users</strong></h4>
        <ul style="list-style: none">
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" {{in_array( 1, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="1">
                    <label class="custom-control-label" for="customCheck1">View Users</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" {{in_array( 2, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="2">
                    <label class="custom-control-label" for="customCheck2">Add User</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" {{in_array( 3, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="3">
                    <label class="custom-control-label" for="customCheck3">Edit User</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck4" {{in_array( 4, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="4">
                    <label class="custom-control-label" for="customCheck4">Delete User</label>
                </div>
            </li>
        </ul>
    </div>
    <div class="col-lg-4  col-md-6">
        <h4><strong>Roles</strong></h4>
        <ul style="list-style: none">
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck5" {{in_array( 5, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="5">
                    <label class="custom-control-label" for="customCheck5">View Roles</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck6" {{in_array( 6, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="6">
                    <label class="custom-control-label" for="customCheck6">Add Role</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck7" {{in_array( 7, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="7">
                    <label class="custom-control-label" for="customCheck7">Edit Role</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck8" {{in_array( 8, $role->permissions->pluck('id')->toArray()) ? 'checked' : ''}} name="permissions[]" value="8">
                    <label class="custom-control-label" for="customCheck8">Delete Role</label>
                </div>
            </li>
        </ul>
    </div>

</div>

