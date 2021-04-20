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
        <label for="project_name">Project Name</label>
        <input type="text" id="project_name" class="form-control" name="project_name" placeholder="Project Name"
            value="{{ old('project_name', $project->project_name) }}" required>
        @error('project_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>
<div class="col-md-6">
    <div class="form-group row">
        <label for="works">Works</label>
        <input type="text" id="works" class="form-control" name="works" placeholder="Works"
            value="{{ old('works', $project->works) }}" required>
        @error('works')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>


