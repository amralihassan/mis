<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Item</th>
            <th>View</th>
            <th>Add</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Users</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                        {{ in_array(1, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="1">
                    <label class="custom-control-label" for="customCheck1"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck2"
                        {{ in_array(2, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="2">
                    <label class="custom-control-label" for="customCheck2"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck3"
                        {{ in_array(3, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="3">
                    <label class="custom-control-label" for="customCheck3"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck4"
                        {{ in_array(4, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="4">
                    <label class="custom-control-label" for="customCheck4"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Roles</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck5"
                        {{ in_array(5, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="5">
                    <label class="custom-control-label" for="customCheck5"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck6"
                        {{ in_array(6, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="6">
                    <label class="custom-control-label" for="customCheck6"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck7"
                        {{ in_array(7, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="7">
                    <label class="custom-control-label" for="customCheck7"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck8"
                        {{ in_array(8, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="8">
                    <label class="custom-control-label" for="customCheck8"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Settings</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck9"
                        {{ in_array(9, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="9">
                    <label class="custom-control-label" for="customCheck9"></label>
                </div>
            </td>
            <td>
                -
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck10"
                        {{ in_array(10, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="10">
                    <label class="custom-control-label" for="customCheck10"></label>
                </div>
            </td>
            <td>
                -
            </td>
        </tr>

        <tr>
            <td>About</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck11"
                        {{ in_array(11, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="11">
                    <label class="custom-control-label" for="customCheck11"></label>
                </div>
            </td>
            <td>
                -
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck12"
                        {{ in_array(12, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="12">
                    <label class="custom-control-label" for="customCheck12"></label>
                </div>
            </td>
            <td>
                -
            </td>
        </tr>

        <tr>
            <td>Slideshow</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck13"
                        {{ in_array(13, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="13">
                    <label class="custom-control-label" for="customCheck13"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck14"
                        {{ in_array(14, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="14">
                    <label class="custom-control-label" for="customCheck14"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck15"
                        {{ in_array(15, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="15">
                    <label class="custom-control-label" for="customCheck15"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck16"
                        {{ in_array(16, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="16">
                    <label class="custom-control-label" for="customCheck16"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Solutions</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck17"
                        {{ in_array(17, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="17">
                    <label class="custom-control-label" for="customCheck17"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck18"
                        {{ in_array(18, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="18">
                    <label class="custom-control-label" for="customCheck18"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck19"
                        {{ in_array(19, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="19">
                    <label class="custom-control-label" for="customCheck19"></label>
                </div>
            </td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck20"
                        {{ in_array(20, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                        name="permissions[]" value="20">
                    <label class="custom-control-label" for="customCheck20"></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
