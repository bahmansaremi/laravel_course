@extends('layout.master')

@section('title')
    Details of {{$product->title}}
@endsection

@section('content')
    <h3>Details of {{$product->title}}</h3>
    <div class="card" style="width: 20rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Title: {{$product->title}}</li>
            <li class="list-group-item">Price: {{$product->price}}</li>
            <li class="list-group-item">Total count: {{$product->total_count}}</li>
            <li class="list-group-item">Description: {{$product->description}}</li>
            <li class="list-group-item">Category: {{$product->category}}</li>
        </ul>
    </div>
@endsection
