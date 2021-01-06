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
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">description</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id}}</td>
                            <td>{{ $product->description}}</td>
                            <td><a href="{{url("/admin/$product->id/edit")}}" class="btn btn-success">modifier</a></td>
                            <td>
                                <form action="{{ url("/admin/$product->id/delete") }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">supprimer</button>
                                </form>
                            </td>
                        </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
       
       
    </section>
</body>
</html>
@endsection
    