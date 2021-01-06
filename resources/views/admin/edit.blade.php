@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Admin / Index </title>
</head>
<body>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                 <div class="col-md-8 mx-auto">
                     @if($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mb-4">
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        </div>
                        @endforeach
                    @endif
                    <form action="{{url("/admin/$product->id/edit")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Description :</label>
                            <textarea class="form-control" rows="6" name="description">{{$product->description}}</textarea>
                        </div>
                        <img src="{{$product->image}}" alt="">
                        <div class="form-group">
                            <button class="btn btn-success form-control">Edite</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
       
       
    </section>
</body>
</html>
@endsection
    