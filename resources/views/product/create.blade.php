@extends('layout.master')

@section('title')
    Create new product
@endsection

@section('content')
    <h3 class="">Create new product</h3>
    <form method="POST" action="{{route('product.store')}}" class="row col-12">
        @csrf
    <div class="col-6">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
            @if($errors->has('title'))
                <span class="text-danger mt-1">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
            @if($errors->has('price'))
                <span class="text-danger">{{$errors->first('price')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
            @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description')}}</span>
            @endif
        </div>
    </div>
        <div class="col-6">
        <div class="form-group">
            <label for="total_count">Total count:</label>
            <input type="text" name="total_count" class="form-control" id="total_count" aria-describedby="emailHelp" placeholder="Enter total count">
            @if($errors->has('total_count'))
                <span class="text-danger">{{$errors->first('total_count')}}</span>
            @endif
        </div>
        <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option value="technology">Technology</option>
                    <option value="sport">Sport</option>
                </select>
            @if($errors->has('category'))
                <span class="text-danger">{{$errors->first('category')}}</span>
            @endif
        </div>
    </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
