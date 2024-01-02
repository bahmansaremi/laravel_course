@extends('layout.master')
@section('title')
    Edit existing products
@endsection

@section('content')
    <h3 class="">Edit {{$product->title}}</h3>
    <form method="POST" action="{{route('product.update', $product->id)}}" class="row col-12">
        @csrf
        @method('PUT')
        <div class="col-6">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title" value="{{$product->title}}">
                @if($errors->has('title'))
                    <span class="text-danger mt-1">{{$errors->first('title')}}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price" value="{{$product->price}}">
                @if($errors->has('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description">{{$product->description}}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="total_count">Total count:</label>
                <input type="text" name="total_count" class="form-control" id="total_count" aria-describedby="emailHelp" placeholder="Enter total count" value="{{$product->total_count}}">
                @if($errors->has('total_count'))
                    <span class="text-danger">{{$errors->first('total_count')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option {{$product->category == 'technology' ? 'selected': ''}} value="technology">Technology</option>
                    <option {{$product->category == 'sport' ? 'selected': ''}} value="sport">Sport</option>
                </select>
                @if($errors->has('category'))
                    <span class="text-danger">{{$errors->first('category')}}</span>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

