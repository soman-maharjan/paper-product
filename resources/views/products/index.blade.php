@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <br>
    <br>
    <h1>Products 
      <a href="/product/create" style="float: right;"><button style=" font-family:'Nunito'" class="btn btn-success">
        Create a new product</button></a></h1>
    <br>
    <div style="min-height: 900px">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                {{-- <th scope="col">Price</th>
                <th scope="col">Dimensions</th> --}}
                <th scope="col">Color</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product) 
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        {{-- <td>{{$product->price}}</td>
                        <td>{{$product->dimensions}}</td> --}}
                        <td>{{$product->color}}</td>
                        <td>{{ Str::limit($product->description, 40) }}</td>
                        <td>{{$product->category->title}}</td>
                        <td style="display: inline-flex">
                          <a href="/product/{{$product->id}}/edit"><button class="btn btn-primary" style="margin-right: 10px">
                                  Edit
                              </button>
                          </a>
          
                          <form action="/product/{{$product->id}}" method="POST">
                              <input type="hidden" name="_method" value="delete" />
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button class="btn btn-danger" style="margin-right: 10px">Delete</button>
                          </form>
          
                          <a href="/product/{{$product->id}}"><button class="btn btn-success">
                            Show
                          </button>
                      </td>
                    </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection