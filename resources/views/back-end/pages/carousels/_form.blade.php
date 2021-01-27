@if($errors->any())
    @foreach($errors->all() as $error)
        <!-- print all errors -->
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" class="form-control" name="title" placeholder="title"
            value="{{ old('title', $carousel->title) }}" required>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>


<div class="col-md-12">
    <div class="form-group ">
        <label for="paragraph">Paragraph</label>

        <textarea class="form-control editor" name="paragraph" id="paragraph" required cols="30"
            rows="10">{{ old('paragraph', $carousel->paragraph) }}</textarea>
        @error('paragraph')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="validationCustom02">Slideshow Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="slide_image">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
</div>
