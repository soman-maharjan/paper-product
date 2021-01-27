@extends('layouts.app')
@section('content')
<style>
    .imgPreview img {
        padding: 8px;
        max-width: 100px;
    } 
</style>
<div class="container mt-5">
        <h3 class="text-center mb-5">Upload Product Details</h3>
        <form action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="title" class="form-control" id="title" placeholder="Enter title" name="title"
                    value="{{ $product->title }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" placeholder="e.g. 50000" name="price" value="{{ $product->price  }}">
            </div>
            <div class="form-group">
                <label for="dimensions">Dimensions</label>
                <input type="text" class="form-control" placeholder="50 x 50" name="dimensions"
                    value="{{$product->dimensions }}">
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" placeholder="e.g. 50" name="weight" value="{{ $product->weight }}">
            </div>
            <div class="form-group">
                <label for="weight">Description</label> <br>
                <textarea name="description" name="description" cols="65" rows="10">{{ $product->description  }}</textarea>
            </div>
            <label for="cars">Category:</label>
            <div class="form-group">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>
            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Update
            </button>
            <br><br><br>
        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
            var multiImgPreview = function(input, imgPreviewPlaceholder) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                imgPreviewPlaceholder);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#images').on('change', function() {
                multiImgPreview(this, 'div.imgPreview');
            });
        });

    </script>

@endsection
