<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <br>
    <h1 align="center">Laravel 7.26 - Image Upload and Resize</h1>
    <br>
    <form method="post" action="{{route('resize.image')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4 mx-2 my-2">
                <h3>Select Image</h3>
            </div>
            <div class="col-md-4 mx-2 my-2">
                <input type="file" name="image" class="image">
            </div>
            <div class="col-md-2 mx-2 my-2">
                <button type="submit" class="btn btn-success">Upload Image</button>
            </div>
        </div>
    </form>
    @if(session('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{session('success')}}</strong>

        </div>
        <div class="row">
            <div class="col-md-6">
                <strong>Orginal Image:</strong>
                <br>
                <img src="/images/{{session('imageName')}}" class="img-responsive img-thumbnail">
            </div>
            <div class="col-md-4">
                <strong>Thumbnail Image:</strong>
                <br>
                <img src="/thumbnail/{{session('imageName')}}" class="img-responsive img-thumbnail border-0" style="border-radius: 50%; width: 60px; max-height: 60px" >
            </div>
        </div>
    @endif
</div>
</body>
</html>
