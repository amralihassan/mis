@if($errors->any())
    @foreach($errors->all() as $error)
        <!-- print all errors -->
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="solution_name">Solution</label>
            <input type="text" id="solution_name" class="form-control" name="solution_name" placeholder="Solution"
                value="{{ old('solution_name', $solution->solution_name) }}" required>
            @error('solution_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="abstract">Abstract</label>
            <input type="text" id="abstract" class="form-control" name="abstract" placeholder="Abstract"
                value="{{ old('abstract', $solution->abstract) }}" required>
            @error('abstract')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control" required>
                <option value="">Select</option>
                <option value="software">Software</option>
                <option value="network">Network</option>
            </select>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sort">Sort</label>
            <input type="number" min="0" step="1" id="sort" class="form-control" name="sort" placeholder="sort"
                value="{{ old('sort', $solution->sort) }}" required>
            @error('sort')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group ">
        <label for="description">Description</label>

        <textarea class="form-control editor" name="description" id="description" required cols="30"
            rows="10">{{ old('description', $solution->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="validationCustom02">Solution Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="solution_image">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
</div>
